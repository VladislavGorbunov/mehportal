<?php

namespace App\Http\Controllers\Suppliers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Suppliers\LoginSuppliersRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginPage()
    {
        if (Auth::guard('suppliers')->user()) {
            return redirect('/supplier');
        }

        return view('suppliers.login');
    }
    

    public function loginSeller(LoginSuppliersRequest $request)
    {
        $validated = $request->validated();
        
        $email = $validated['email'];
        $password = $validated['password'];

        if (Auth::guard('suppliers')->attempt(['email' => $email, 'password' => $password], true)) {
            $request->session()->regenerate();
            $user = Auth::guard('suppliers')->user();
            Auth::guard('suppliers')->login($user);
            return redirect('/supplier');
        } else {
            session()->flash('error', 'Ошибка входа.');
            return redirect()->back();
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        Auth::guard('suppliers')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}