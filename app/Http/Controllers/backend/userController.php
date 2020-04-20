<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\editUser;

class userController extends Controller
{
    public function home(){
        $datas = User::orderBy('id', 'desc')->get();
        return view('backend/user.user', compact('datas'));
    }
    public function add(LoginRequest $req){
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->save();
        return redirect(route('home-user'));
    }
    public function edit($id){
        $info = user::where('id',$id)->first();
        return view('backend/user.edit-user', compact('info'));
    }
    public function goEdit(editUser $req){
        $user = user::find($req->id);
        $user->email = $req->email;
        $user->name = $req->name;
        $user->save();
        return redirect(route('home-user'));
    }
    public function delete($id){
        User::destroy($id);
        return redirect(route('home-user'));
    }
}
