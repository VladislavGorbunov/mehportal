<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LoginAdminRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginAdminPage()
    {
        if (Auth::guard('admin')->user()) {
            return redirect('/admin');
        }

        return view('admin.login-admin');
    }
    

    public function loginAdmin(LoginAdminRequest $request)
    {
        $validated = $request->validated();
        
        $email = $validated['email'];
        $password = $validated['password'];

        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], true)) {
            $request->session()->regenerate();
            $user = Auth::guard('admin')->user();
            Auth::guard('admin')->login($user);
            return redirect('/admin');
        } else {
            session()->flash('error', 'Ошибка входа.');
            return redirect()->back();
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        Auth::guard('admin')->logout();
        // Auth::guard('executor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
