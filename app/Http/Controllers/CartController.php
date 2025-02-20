<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //

    public function showCart()
    {
        $cart = session()->get('cart',[]);
        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        return view('components.cart',compact('cart','total'));
    }

    public function addToCart($id = null)
    {
        logger('====================');

        if (!$id || !is_numeric($id)) 
        {
            logger('Loi khong ID');
            return back()->with('error', 'Error');
        }

        $product = Product::find($id);
        if(!$product)
        {
            return redirect()->back()->with('error','Error');
        }

        $cart = session()->get('cart',[]);

        if(isset($cart[$id]))
        {
            $cart[$id]['quantity'] += 1;
        }
        else
        {
            logger('Chay ham');

            $cart[$id] = 
            [
                'id' => $product->id,
                'title' => $product->title,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];

        }
        session()->put('cart',$cart);

        return redirect()->back()->with('success','Successfull add to cart');

    }

    public function removeItemOnCart($id = null)
    {
        if(!$id)
        {
            return back()->with('error','error');
        }

        $cart = session()->get('cart',[]);

        if(isset($cart[$id]))
        {
            logger('Vao if');
            unset($cart[$id]);
            session()->put('cart',$cart);
        }

        return redirect()->back()->with('success','success');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success','Đã xóa toàn bộ giỏ hàng');
    }

    public function AddAllToCartFromWishlist()
    {
        $cart = session()->get('cart',[]);
        $wishlist = session()->get('wishlist',[]);

        foreach($wishlist as $item)
        {
            if(isset($cart[$item['id']]))
            {
                $cart[$item['id']]['quantity'] += 1;
            }
            else
            {
                $item['quantity'] = 1;
                $cart[$item['id']] = $item;
            }
        }

        session()->put('cart',$cart);

        return back()->with('success','success');

    }
}
