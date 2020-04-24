<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Http\Requests\nameRequest;

class categoryController extends Controller
{
    public function home(){
        $datas = category::all();
        return view('backend/category.home', compact('datas'));
    }
    // add
    public function add(){
        return view('backend/category.add');
    }
    // post add
    public function goAdd(nameRequest $req){
        $category = new category();
        $category->name = $req->name;
        $category->save();
        return redirect(route('home-category'));
    }
    // edit
    public function goEdit(nameRequest $req){
        $category = category::find($req->id);
        $category->name = $req->name;
        // dd($req->name);
        $category->save();
        return redirect(route('home-category'));
    }
    // delete
    public function delete($id){
        category::find($id)->delete();
        return redirect(route('home-category'));
    }
}
