<?php

namespace App\Http\Controllers\Executor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Executor\LoginExecutorRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginExecutorPage()
    {
        if (Auth::guard('executor')->user()) {
            return redirect('/executor');
        }

        return view('executor.login-executor');
    }
    

    public function loginExecutor(LoginExecutorRequest $request)
    {
        $validated = $request->validated();
        
        $email = $validated['email'];
        $password = $validated['password'];

        if (Auth::guard('executor')->attempt(['email' => $email, 'password' => $password, 'active' => 1], true)) {
            $request->session()->regenerate();
            $user = Auth::guard('executor')->user();
            Auth::guard('executor')->login($user);
            return redirect('/executor');
        } else {
            session()->flash('error', 'Ошибка входа.');
            return redirect()->back();
        }
    }

   

    public function logout(Request $request) 
    {
        Auth::logout();
        Auth::guard('executor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
