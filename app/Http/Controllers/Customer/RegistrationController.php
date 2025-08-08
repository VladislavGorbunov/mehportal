<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\RegistrationCustomerRequest;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Mail\CustomerRegistration;
use App\Mail\UserRegistration;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    // Страница формы регистрации
    public function registrationCustomerPage()
    {   
        $data['regions'] = Region::get();
        return view('customer.registration-customer', $data);
    }

    // Добавление пользователя в БД и авторизация
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
            
            Mail::mailer('smtp')->to($validated['email'])->send(new CustomerRegistration($validated['email'], $validated['password']));
            Mail::mailer('smtp')->to('info@mehportal.ru')->send(new UserRegistration('Заказчик', $customer->id, $validated['email']));
            
            return redirect('/customer');
        } else {
            session()->flash('error', 'Произошла ошибка при попытке авторизации.');
            return redirect()->back();
        }
    }
}
