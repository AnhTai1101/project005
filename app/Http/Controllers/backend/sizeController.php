<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\size;
use App\Http\Requests\nameRequest;

class sizeController extends Controller
{
    public function home(){
        $datas = size::all();
        return view('backend/size.home', compact('datas'));
    }
}
