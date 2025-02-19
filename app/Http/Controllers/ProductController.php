<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    //
    public function detail($id)
    {
        $product = Product::find($id);

        return view('components.details',compact('product'));
    }

    public function productOfCategory($id = null)
    {
        if($id)
        {
            $category = Category::find($id);
            $products = $category ? $category->products : collect();
        }
        else
        {
            $products = Product::all();
        }   

        return view('components.product',compact('products'));
    }


}
