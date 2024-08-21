<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class ResgisterController extends Controller
{
    //
    public function register()
    {
        if (Auth::check()) {
            return back();
        } 
        return view('auth.register');
    }

    public function registerStore(RegisterRequest $request)
    {
        $request->validated();
        if($request->password !== $request->confirm_password) {
            return to_route('register')->withErrors(['error' => 'Invalid password!']);
        }

        $create_aacount = DB::table('user')->insert([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        if($create_aacount) return to_route('login');
       
    }
}
