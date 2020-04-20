<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productController extends Controller
{
    public function home(){
        return view('backend/product.home');
    }
}
