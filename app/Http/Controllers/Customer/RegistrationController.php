<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\RegistrationCustomerRequest;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

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
    }
}
