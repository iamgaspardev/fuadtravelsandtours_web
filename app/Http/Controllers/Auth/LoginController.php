<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'usr') {
                return redirect()->route('user.home');
            } elseif ($user->role === 'adm') {
                return redirect()->route('admin.home');
            }
        }

        // Authentication failed...
        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
