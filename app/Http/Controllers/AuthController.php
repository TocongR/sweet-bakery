<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login(Request $request)
    {  
        $fields = $request->validate([
            'email' => 'required|email|max:225',
            'password' => 'required'
        ]);

        if (Auth::attempt($fields, $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials does not match in our records.'
            ])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
