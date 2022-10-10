<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProducts(){
        $products=Products::select('name','price','description','id','picture')->get();
        return view('catalog',['products'=>$products]);
    }
}
