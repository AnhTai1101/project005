<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\color;
use App\Http\Requests\nameRequest;

class colorController extends Controller
{
    public function home(){
        $datas = color::all();
        return view('backend/color.home', compact('datas'));
    }
    // add
    public function add(){
        return view('backend/color.add');
    }
    // post add
    public function goAdd(nameRequest $req){
        $color = new color();
        $color->name = $req->name;
        $color->save();
        return redirect(route('home-color'));
    }
    // 
}
