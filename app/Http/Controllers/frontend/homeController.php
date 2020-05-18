<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\category;
use App\Models\slide;
use App\Models\color;

class homeController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $slide = slide::orderBy('id', 'desc')->take(4)->get();
        $category = category::all();
        view()->share('slide', $slide);
        $color = color::all();
        view()->share('color', $color);
        view()->share('category', $category);
    }
    public function home(){
        // $slide = slide::orderBy('id','desc')->take(4)->get();
        // $category = category::all();
        $products = product::orderBy('id','desc')->take(16)->get();
        return view('frontend.home', compact('products'));
    }
}
