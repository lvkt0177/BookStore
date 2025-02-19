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

    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product)
        {
            return redirect()->back()->with('error','Lỗi khi thêm vào giỏ hàng');
        }

        $cart = session()->get('cart',[]);

        if(isset($cart[$id]))
        {
            $cart[$id]['quantity'] += 1;
        }
        else
        {
            $cart[$id] = [
                'id' => $product->id,
                'title' => $product->title,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];
        }
        
        session()->put('cart',$cart);

        return redirect()->back()->with('success','Thêm vào giỏ hàng thành công');
    }

    public function removeItemOnCart($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) 
        {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Đã xóa sản phẩm khỏi giỏ hàng');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('clearSession','Đã xóa toàn bộ giỏ hàng');
    }

}
