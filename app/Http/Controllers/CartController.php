<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request,$id)
    {
        $productId=$request->cookie();
    }
}
