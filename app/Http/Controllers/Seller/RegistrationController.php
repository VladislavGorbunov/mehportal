<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\RegistrationSellerRequest;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Seller\Seller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Mail\SellerRegistration;
use App\Mail\UserRegistration;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    // Страница формы регистрации
    public function registrationPage()
    {   
        $data['regions'] = Region::get();
        return view('seller.registration', $data);
    }

    // Добавление пользователя в БД и авторизация
    public function store(RegistrationSellerRequest $request)
    {
        $validated = $request->validated();

        $seller = Seller::create([
            "name"      => $validated['name'],
            "lastname"  => $validated['lastname'],
            "email"     => $validated['email'],
            "password"  => Hash::make($validated['password']),
            "phone"     => $validated['phone'],
            "active"    => true,
        ]);

        if (Auth::guard('seller')->attempt(['email' => $validated['email'], 'password' => $validated['password'], 'active' => 1], true)) {
            $request->session()->regenerate();
            $user = Auth::guard('seller')->user();
            Auth::guard('seller')->login($user);
            
            Mail::mailer('smtp')->to($validated['email'])->send(new SellerRegistration($validated['email'], $validated['password']));
            Mail::mailer('smtp')->to('info@mehportal.ru')->send(new UserRegistration('Поставщик', $seller->id, $validated['email']));
            
            return redirect('/seller');
        } else {
            session()->flash('error', 'Произошла ошибка при попытке авторизации.');
            return redirect()->back();
        }
    }
}