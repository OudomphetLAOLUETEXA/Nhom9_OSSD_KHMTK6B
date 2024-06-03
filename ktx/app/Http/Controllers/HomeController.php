<?php

namespace App\Http\Controllers;

use App\Hinhanh;
use App\Lienhe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()  {
        $anh = Hinhanh::get();
        return view('home',['anh'=>$anh]);
    }

    function lienhe(Request $request) {
        Lienhe::create($request->all());
        return redirect()->back();
    }
}
