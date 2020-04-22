<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\addProductRequest;

class productController extends Controller
{
    public function home(){
        return view('backend/product.home');
    }
    public function add(){
        return view('backend/product.add');
    }
    public function getAdd(addProductRequest $req){
        
    }
}
