<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // public function register()
    // {
    //     return view('register');
    // }

    // public function registerPost(Request $request)
    // {
    //     $user = new User();

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);

    //     $user->save();

    //     return back()->with('success', 'Register successfully');
    // }

    // public function login()
    // {
    //     return view('signin');
    // }

    // public function loginPost(Request $request)
    // {
    //     $credentials = [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ];

    //     if (Auth::attempt($credentials)) {
    //         if (auth()->user()->role === 'adm') {
    //             return redirect('/dashboard/admin')->with('success', 'Login Success');
    //         } else {
    //             return redirect('/dashboard/home')->with('success', 'Login Success');
    //         }
    //     }

    //     return back()->with('error', 'Invalid email or password');
    // }

    // public function logout()
    // {
    //     Auth::logout();

    //     return redirect()->route('login');
    // }
}