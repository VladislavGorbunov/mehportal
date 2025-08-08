<?php

namespace App\Http\Controllers\Executor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Executor\RegistrationExecutorRequest;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Executor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Mail\ExecutorRegistration;
use App\Mail\UserRegistration;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    // Страница формы регистрации 
    public function registrationExecutorPage()
    {
        $data['regions'] = Region::get();
        return view('executor.registration-executor', $data);
    }

    // Добавление пользователя в БД и авторизация
    public function store(RegistrationExecutorRequest $request)
    {
        $validated = $request->validated();

        $executor = Executor::create([
            "name"      => $validated['name'],
            "lastname"  => $validated['lastname'],
            "email"     => $validated['email'],
            "password"  => Hash::make($validated['password']),
            "phone"     => $validated['phone'],
            "active"    => true,
        ]);

        if (Auth::guard('executor')->attempt(['email' => $validated['email'], 'password' => $validated['password'], 'active' => 1], true)) {
            $request->session()->regenerate();
            $user = Auth::guard('executor')->user();
            Auth::guard('executor')->login($user);
            Mail::mailer('smtp')->to($validated['email'])->send(new ExecutorRegistration($validated['email'], $validated['password']));
            Mail::mailer('smtp')->to('info@mehportal.ru')->send(new UserRegistration('Исполнитель', $executor->id, $validated['email']));
            return redirect('/executor');
        } else {
            session()->flash('error', 'Произошла ошибка при попытке авторизации.');
            return redirect()->back();
        }
    }
}
