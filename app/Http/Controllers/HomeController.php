<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class HomeController extends Controller
{ 
    //
    
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('components.index',compact('products','categories'));
    }

    public function login()
    {
        return view(); 
    }
}
