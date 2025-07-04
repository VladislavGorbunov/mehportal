<?php

namespace App\Http\Controllers\Executor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Executor\RegistrationExecutorRequest;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Executor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    //
    public function registrationExecutorPage()
    {
        $data['regions'] = Region::get();
        return view('executor.registration-executor', $data);
    }

    public function store(RegistrationExecutorRequest $request)
    {
        $validated = $request->validated();

        $customer = Executor::create([
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
            return redirect('/executor');
        } else {
            session()->flash('error', 'Произошла ошибка при попытке авторизации.');
            return redirect()->back();
        }
    }
}
