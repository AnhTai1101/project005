<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\slide;
use App\Http\Requests\slideRequest;
use App\Http\Requests\editSlide;

class slideController extends Controller
{
    public function home(){
        $slide = slide::orderBy('id', 'desc')->paginate(12);
        return view('backend/slide.home', compact('slide'));
    }
    public function add(){
        return view('backend/slide.add');
    }
    public function goAdd(slideRequest $req){
        $slide = new slide;
        $slide->name = $req->name;
        $slide->title = $req->title;
        if ($req->hasFile('image') && $req->image != '') {
            $image = '';
            $file = $req->image;
            $image = time().'-'.$file->getClientOriginalName();
            $file->move('images',$image);
            $slide->image = $image;
        }
        $slide->save();
        return redirect(route('home-slide'));
    }
    public function edit($id){
        $slide = slide::where('id',$id)->first();
        return view('backend/slide.edit', compact('slide'));
    }
    public function goEdit(editSlide $req){
        $slide = slide::where('id', $req->id)->first();
        $slide->name = $req->name;
        $slide->title = $req->title;
        
        if ($req->hasFile('image') && $req->image != '') {
            unlink('images/'.$slide->image);
            $image = '';
            $file = $req->image;
            $image = time().'-'.$file->getClientOriginalName();
            $file->move('images/',$image);
            $slide->image = $image;
        }
        $slide->save();
        return redirect(route('home-slide'));
    }
}
