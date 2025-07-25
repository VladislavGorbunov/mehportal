<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\RegistrationCustomerRequest;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    //
    public function registrationCustomerPage()
    {
        $data['regions'] = Region::get();
        return view('customer.registration-customer', $data);
    }

    public function store(RegistrationCustomerRequest $request)
    {
        $validated = $request->validated();


        $customer = Customer::create([
            "name"      => $validated['name'],
            "lastname"  => $validated['lastname'],
            "email"     => $validated['email'],
            "password"  => Hash::make($validated['password']),
            "phone"     => $validated['phone'],
            "active"    => true,
        ]);

        if (Auth::guard('customer')->attempt(['email' => $validated['email'], 'password' => $validated['password'], 'active' => 1], true)) {
            $request->session()->regenerate();
            $user = Auth::guard('customer')->user();
            Auth::guard('customer')->login($user);
            return redirect('/customer');
        } else {
            session()->flash('error', 'Произошла ошибка при попытке авторизации.');
            return redirect()->back();
        }
    }
}
