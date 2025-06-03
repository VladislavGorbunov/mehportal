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
        if (Auth::guard('customer')->user()) {
            return redirect('/customer');
        }

        return view('customer.login-customer');
    }
    

    public function loginCustomer(LoginCustomerRequest $request)
    {
        $validated = $request->validated();
        
        $email = $validated['email'];
        $password = $validated['password'];

        if (Auth::guard('customer')->attempt(['email' => $email, 'password' => $password, 'active' => 1], true)) {
            $request->session()->regenerate();
            $user = Auth::guard('customer')->user();
            Auth::guard('customer')->login($user);
            return redirect('/customer');
        } else {
            session()->flash('error', 'Ошибка входа.');
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
