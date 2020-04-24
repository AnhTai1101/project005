<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\type;
use App\Http\Requests\nameRequest;

class typeController extends Controller
{
    public function home(){
        $datas = type::all();
        return view('backend/type.home', compact('datas'));
    }
    // add
    public function add(){
        return view('backend/type.add');
    }
    // post add
    public function goAdd(nameRequest $req){
        $type = new type();
        $type->name = $req->name;
        $type->save();
        return redirect(route('home-type'));
    }
    // edit
    public function goEdit(nameRequest $req){
        $type = type::find($req->id);
        $type->name = $req->name;
        // dd($req->name);
        $type->save();
        return redirect(route('home-type'));
    }
    // delete
    public function delete($id){
        type::find($id)->delete();
        return redirect(route('home-type'));
    }
}
