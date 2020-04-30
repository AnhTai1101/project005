<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\addProductRequest;
use App\Models\size;
use App\Models\color;
use App\Models\type;
use App\Models\category;
use App\Models\product;
use App\Models\detail;
use App\Http\Requests\addDetail;
use App\Http\Requests\editProduct;


class productController extends Controller
{
    public function home(){
        $products = product::orderBy('id', 'desc')->paginate(10);
        return view('backend/product.home', compact('products'));
    }
    // return view
    public function add(){
        $color = color::all();
        $size = size::all();
        $type = type::all();
        $category = category::all();
        return view('backend/product.add', compact('color', 'size', 'type', 'category'));
    }
    // get add product
    public function getAdd(addProductRequest $req){
        // dd($req->type_id);
        //Kiểm tra file
        $image1 = '';
        if ($req->hasFile('image1')) {
            $file = $req->image1;
            $image1 = time().'-'.$file->getClientOriginalName();
            $file->move('images',$image1);
        }else{
            $image1 = 'null';
        }
        //Kiểm tra file
        $image2 = '';
        if ($req->hasFile('image2')) {
            $file = $req->image2;
            $image2 = time().'-'.$file->getClientOriginalName();
            $file->move('images',$image2);
        }
        //Kiểm tra file
        $image3 = '';
        if ($req->hasFile('image3')) {
            $file = $req->image3;
            $image3 = time().'-'.$file->getClientOriginalName();
            $file->move('images',$image3);
        }
        $add = new product;
        // name
        $add->name = $req->name;
        // title
        $add->title = $req->title;
        // description
        $add->description = $req->description;
        // type
        $add->type_id = $req->type_id;
        // category
        $add->category_id = $req->category_id;
        // image
        $add->image1 = $image1;
        $add->image2 = $image2;
        $add->image3 = $image3;
        // title
        $add->title = $req->title; 
        // quantity
        $add->qty = $req->quantity;
        // price default
        $add->price = $req->price;
        // promotion
        $add->promotion = $req->promotion;
        // save
        $add->save();
        // add detail
        $product2 = Product::orderBy('id','desc')->first();
        // new detail
        $quantity = new detail;
        // product id
        $quantity->product_id = $product2->id;
        // color
        $quantity->color_id = $req->color_id;
        // size
        $quantity->size_id = $req->size_id;
        // quantity
        $quantity->quantity = $req->quantity;
        // price unit
        $quantity->price = $req->price;
        // price promotion
        $quantity->promotion = $req->promotion;
        $quantity->save();
        return redirect(route('home-product'));
    }
    // edit
        public function edit($id){
            $type = type::all();
            $category = category::all();
            $product = product::where('id',$id)->first();
            return view('backend/product.edit', compact('type', 'category', 'product'));
        }
        public function goEdit(editProduct $req){
            $product = product::where('id', $req->id)->first();
            $product->name = $req->name;
            $product->title = $req->title;
            $product->description = $req->description;
            $product->price = $req->price;
            $product->promotion = $req->promotion;
            // type
            $product->type_id = $req->type_id;
            // category
            $product->category_id = $req->category_id;
            // image1
            if ($req->hasFile('image1') && $req->image1 != '') {
                $image1 = '';
                $file = $req->image1;
                $image1 = time().'-'.$file->getClientOriginalName();
                $file->move('images',$image1);
                unlink('images/'.$product->image1);
                $product->image1 = $image1;
            }
            // image2
            if ($req->hasFile('image2') && $req->image2 != '') {
                $image2 = '';
                $file = $req->image2;
                $image2 = time().'-'.$file->getClientOriginalName();
                $file->move('images',$image2);
                unlink('images/'.$product->image2);
                $product->image2 = $image2;
            }
            //image3
            if ($req->hasFile('image3') && $req->image3 != '') {
                $image3 = '';
                $file = $req->image3;
                $image3 = time().'-'.$file->getClientOriginalName();
                $file->move('images',$image3);
                unlink('images/'.$product->image3);
                $product->image3 = $image3;
            }
            $product->save();
            return redirect(route('home-product'));
            
        }
    // end edit

    // detroy
    public function delete($id){
        $product = product::where('id', $id)->first();
        if($product->image1 !== ''){
            unlink('images/'.$product->image1);
        }
        if($product->image2 !== ''){
            unlink('images/'.$product->image2);
        }
        if($product->image3 !== ''){
            unlink('images/'.$product->image3);
        }
        $product->delete();
        detail::where('product_id', $id)->delete();
        return redirect(route('home-product'));
    }
    // detail
        // view
        public function addDetail($id){
            $product = product::where('id',$id)->first();
            $color = color::all();
            $size = size::all();
            $name = $product->name;
            return view('backend/detail.add', compact('name', 'color', 'size', 'product'));
        }
        // post
        public function postDetail(addDetail $req){
            $detail =  new detail;
            $detail->product_id = $req->product_id;
            $detail->color_id = $req->color_id;
            $detail->size_id = $req->size_id;
            $detail->price = $req->price;
            $detail->promotion = $req->promotion;
            $detail->quantity = $req->quantity;
            $detail->save();
            $product = product::where('id', $req->product_id)->first();
            $product->qty += $req->quantity;
            $product->save();
            return redirect(route('home-detail', $detail->product_id));

        }
        // home detail
        public function detail($id){
            $details = detail::where('product_id', $id)->orderBy('id', 'desc')->paginate(10);
            $product = product::where('id', $id)->first();
            $size = size::all();
            $color = color::all();
            return view('backend/detail.home', compact('details', 'product', 'color', 'size'));
        }
        // delete Detail
        public function deleteDetail($id){
            $detail = detail::where('id', $id)->first();
            $product_id = $detail->product_id;
            // update quantity product
            $product = product::where('id', $product_id)->first();
            $product->qty -= $detail->quantity;
            $product->save();
            detail::where('id', $id)->delete();
            return redirect(route('home-detail', $product_id));
        }
        // edit detail
        public function editDetail($id){
            $color = color::all();
            $size = size::all();
            $detail = detail::where('id', $id)->first();
            return view('backend/detail.edit', compact('detail', 'color', 'size'));
        }
    // end detail

}
