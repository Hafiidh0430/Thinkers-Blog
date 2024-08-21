<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return back();
        } 
        return view('auth.login');
    }
    public function userLogin(UserAuthRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('pages.index');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
