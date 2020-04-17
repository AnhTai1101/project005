<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('backend\login.login');
    }
    public function postLogin(LoginRequest $req){
        $email = $req->email;
        $password = $req->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect(route('homeBackend'));;
        }else{
            return redirect()->back()->with('thongbao','Tài khoản, mật khẩu không chính xác');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
