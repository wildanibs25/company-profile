<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.index');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:8|max:255',
            'remember' => 'nullable|string',
        ]);

        if ($user = User::where('email', $request->email)->first()) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user, $request->remember);
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else {
                return back()->withInput()->withErrors(['password' => ['Password Salah !!']]);
            }
        } else {
            return back()->withInput()->withErrors(['email' => ['Email Tidak Ditemukan...']]);
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
