<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class WishlistController extends Controller
{
    //
    public function showWishlist()
    {
        $wishlist = session()->get('wishlist',[]);
        return view('components.wishlist',compact('wishlist'));
    }

    public function addToWishlist($id = null)
    {
        if(!$id)
        {
            return back()->with('error','error');
        }

        $product = Product::find($id);

        if(!$product)
        {
            return back()->with('error','error');
        }

        $wishlist = session()->get('wishlist',[]);
        
        if(!isset($wishlist[$id]))
        {
            $wishlist[$id] = [
                'id' => $product->id,
                'title' => $product->title,
                'image' => $product->image,
                'price' => $product->price
            ];

            session()->put('wishlist',$wishlist);
        }
        else
            return back()->with('error','error');

        return back()->with('success','success');
    }

    public function clearWishlist()
    {
        session()->forget('wishlist');
        return back()->with('sucess','success');
    }

    public function removeItem($id = null)
    {
        if(!$id)
        {
            return back()->with('error','error');
        }
        
        $wishlist = session()->get('wishlist',[]);

        if(isset($wishlist[$id]))
        {
            unset($wishlist[$id]);
            session()->put('wishlist',$wishlist);
        }
        else 
            return back()->with('error','error');

        return back()->with('success','sucess');

    }


}
