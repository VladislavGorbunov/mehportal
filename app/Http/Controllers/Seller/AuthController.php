<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Seller\LoginSellerRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginPage()
    {
        if (Auth::guard('seller')->user()) {
            return redirect('/seller');
        }

        return view('seller.login');
    }
    

    public function loginSeller(LoginSellerRequest $request)
    {
        $validated = $request->validated();
        
        $email = $validated['email'];
        $password = $validated['password'];

        if (Auth::guard('seller')->attempt(['email' => $email, 'password' => $password], true)) {
            $request->session()->regenerate();
            $user = Auth::guard('seller')->user();
            Auth::guard('seller')->login($user);
            return redirect('/seller');
        } else {
            session()->flash('error', 'Ошибка входа.');
            return redirect()->back();
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        Auth::guard('seller')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}