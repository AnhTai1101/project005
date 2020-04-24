<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\size;
use App\Http\Requests\nameRequest;

class sizeController extends Controller
{
    public function home(){
        $datas = size::all();
        return view('backend/size.home', compact('datas'));
    }
    // add
    public function add(){
        return view('backend/size.add');
    }
    // post add
    public function goAdd(nameRequest $req){
        $size = new size();
        $size->name = $req->name;
        $size->save();
        return redirect(route('home-size'));
    }
    // edit
    public function goEdit(nameRequest $req){
        $size = size::find($req->id);
        $size->name = $req->name;
        // dd($req->name);
        $size->save();
        return redirect(route('home-size'));
    }
    // delete
    public function delete($id){
        size::find($id)->delete();
        return redirect(route('home-size'));
    }
}
