<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\User;

class LoginController extends Controller
{
    public function getLogin(){
        return view('admin.login.master');
    }

    public function checkLogin(LoginRequest $request)
    {
        $login = [
                    'username' => $request->username,
                    'password' => $request->password,
                    'level'    => 1,
                 ];
        if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
        //$data = [];
        //return view('admin.login.master', $data);
    }
}
