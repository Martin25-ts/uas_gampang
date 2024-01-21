<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function doLogin(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // $remember = $request->has('remember');
        // if (Auth::attempt($credentials, $remember)) {

        if (Auth::attempt($credentials, true)) {

            // kalo nanti ada rememberme bisa pake ini
            // session(['mysession' => $credentials]);

            return redirect()->route('dashboard-log', ['page' => 1])->with(['Succes' => 'Berasil Login']);
        }else{
            return redirect()->back()->with('error', 'Email atau Password salah !');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('loginPage');
    }
}
