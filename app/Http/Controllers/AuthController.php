<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login', ['request' => $request]);
    }

    public function signup(Request $request)
    {
        return view('auth.signup', ['request' => $request]);
    }

    public function register(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();
        if (!$user && $request->password == $request->re_password) {
            DB::table('users')->insert(['full_name' => $request->full_name, 'email' => $request->email, 'password' => Hash::make($request->password)]);
            return redirect('login');
        } else {
            return redirect('signup');
        }
    }

    public function authentication(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();
        if ($user && password_verify($request->password, $user->password)) {
            $request->session()->put('user', $user->id);
            return redirect('/');
        } else {
            return back()->with('fail', 'incorrect information');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->remove('user');
        return redirect('/');
    }
}
