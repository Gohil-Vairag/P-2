<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class logincontroller extends Controller
{
    public function login(Request $request)
    {

        // dd(11);
        $email = $request->email;
        $password = $request->password;
        dd($email);
    if (Auth::attempt(['email'=>$email,'password'=>$password])) {
        $request->session()->regenerate();
        return redirect('dashborad');
    }
    return back();
    }

    public function logout(Request $request)
    {
        // Session:: flush();
        Auth::logout();
        return redirect('/');
    }
}
