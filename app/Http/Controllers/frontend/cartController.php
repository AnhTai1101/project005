<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\bill;
use App\Models\product;
use App\Models\bill_detail;
use App\Models\category;
use App\Http\Requests\cartRequest;


class cartController extends Controller
{
    public function __construct(){
        $category = category::all();
        view()->share('category', $category);
    }
    public function home(){
        // dd(session('cart'));
        $detail = bill_detail::all();
        // $bill = bill::where('id', '=', 1)->first();
        // dd($bill->customer->toArray());
        return view('frontend/cart.home', compact('detail'));
    }

    // add cart
    public function add(cartRequest $cart){ 
        // dd($cart->quantity);
        // kiem tra xem da ton tai session chua
        if(session()->has('cart')){
            // kiem tra xe da ton tai san pham trong gio hang chua
            $test = array_key_exists($cart->id,session('cart'));
            if($test){
                // neu da ton tai trong gio hang -> // code
                // kiem tra xem color va size co trung khong
                // test color_id
                $test_color = $cart->color_id == session('cart')[$cart->id]['color_id'];
                $test_size = $cart->size_id == session('cart')[$cart->id]['size_id'];
                // color and size trung thi cong them quantity
                if($test_color & $test_size){
                    session('cart')[$cart->id]['quantity'] += $cart->quantity;
                }else{
                    // session('cart')[$cart->id]['detail'] 
                }
            }else{
                // chua ton tai thi ta se them vao
                $product = product::where('id', $cart->id)->first();
                $price = $product->price;
                $image = $product->image1;
                $value = [$cart->id => [
                    'product_id'=>$cart->id,
                    'name' => $product->name,
                    'size_id'=>$cart->size_id,
                    'color_id'=>$cart->color_id,
                    'quantity'=>$cart->quantity,
                    'price' => $price,
                    'image'=> $image
                ]];
                session()->push('cart', $value);
            }
        }else{
            // chua ton tai thi ta se them vao
            $product = product::where('id', $cart->id)->first();
            $price = $product->price;
            $image = $product->image1;
            session()->put('cart',[
                $cart->id => [
                    'product_id'=>$cart->id,
                    'name' => $product->name,
                    'size_id'=>$cart->size_id,
                    'color_id'=>$cart->color_id,
                    'quantity'=>$cart->quantity,
                    'price' => $price,
                    'image'=> $image
                ]
            ]);
        }
        
        dd(session('cart'));
        return redirect(route('fn-home-cart'));
    }
}
