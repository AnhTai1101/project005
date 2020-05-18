<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\category;
use App\Models\size;
use App\Models\color;
use App\Models\slide;
use App\Models\detail;

class filterController extends Controller
{
    public function __construct(){
        $slide = slide::orderBy('id','desc')->take(4)->get();
        view()->share('slide', $slide);
        // $products = product::orderBy('id', 'desc')->take(16)->get();
        // view()->share('products', $products);
        $category = category::all();
        view()->share('category', $category);
        $color = color::all();
        view()->share('color', $color);
    }
    public function id_new(){
        $products = product::orderBy('id', 'desc')->take(12)->get();
        return view('frontend/product.home', compact('products'));
    }
    // giá giảm dần
    public function price_reduction(){
        $products = product::orderBy('price', 'desc')->take(12)->get();
        return view('frontend/product.home', compact('products'));
    }
    // tăng dần
    public function price_increase(){
        $products = product::orderBy('price', 'asc')->take(12)->get();
        return view('frontend/product.home', compact('products'));
    }
    // duoi 150k
    public function price150(){
        $products = product::where('price', '<', '150000')->get();
        return view('frontend/product.home', compact('products'));
    }
    // duoi 300k
    public function price300(){
        $products = product::where('price', '>=', '150000')->where('price', '<', '300000')->get();
        return view('frontend/product.home', compact('products'));
    }
    // duoi 500k
    public function price500(){
        $products = product::where('price', '>=', '300000')->where('price', '<', '500000')->get();
        return view('frontend/product.home', compact('products'));
    }
    // duoi 2.t
    public function price2(){
        $products = product::where('price', '>=', '500000')->where('price', '<', '2000000')->get();
        return view('frontend/product.home', compact('products'));
    }
    // duoi 2.t
    public function price2t(){
        $products = product::where('price', '>=', '2000000')->get();
        return view('frontend/product.home', compact('products'));
    }
    // color
    public function color($id){
        $product_id = detail::where('color_id', '=', $id)->pluck('product_id')->toArray();
        $echo =  array_unique($product_id);
        $products = [];
        foreach($echo as $echo){
            $products[] = product::where('id',$echo)->first();
        }
        return view('frontend/product.home', compact('products'));
    }
}
