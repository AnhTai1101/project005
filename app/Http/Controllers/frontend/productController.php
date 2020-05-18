<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\slide;
use App\Models\product;
use App\Models\category;
use App\Models\size;
use App\Models\color;

class productController extends Controller
{
    public function __construct(){
        $slide = slide::orderBy('id','desc')->take(4)->get();
        view()->share('slide', $slide);
        $products = product::orderBy('id', 'desc')->take(16)->get();
        view()->share('products', $products);
        $category = category::all();
        view()->share('category', $category);
        

    }
    public function home(){
        return view('frontend/product.home');
    }
    // detail
    public function detail($id){
        $color = color::all();
        $size = size::all();
        $product = product::where('id', '=', $id)->first();
        return view('frontend/product.detail', compact('product', 'color','size'));
    }
}
