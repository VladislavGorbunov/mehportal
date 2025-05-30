<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Customer\LoginCustomerRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginCustomerPage()
    {
        return view('customer.login-customer');
    }

    public function loginCustomer(LoginCustomerRequest $request)
    {
        $validated = $request->validated();
        
        if (Auth::guard('customer')->attempt($validated, true)) {
            $request->session()->regenerate();
            $user = Auth::guard('customer')->user();
            Auth::guard('customer')->login($user);
            return redirect('/profile');
        } else {
            session()->flash('error', 'Неверный логин или пароль.');
            return redirect()->back();
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        Auth::guard('customer')->logout();
        // Auth::guard('executor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
