<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function cartPage(){

        $listcart = $this->getUnpaidProduct(Auth::user()->user_id);

        return view('page.cart', compact('listcart'));
    }

    public function deleteCart(Request $request){
        $cart_id = $request->id;

        $delete_cart = Cart::destroy($cart_id);

        return $this->cartPage();
    }

    public function checkOut(){
        $user_id = Auth::user()->user_id;

        Cart::where('user_id', $user_id)->update(['cart_status' => 'paid']);

        return redirect()->route('dashboard-log', ['page' => 1]);
    }

    public function getUnpaidProduct($id){
        $listcart = Cart::where('user_id', $id)
                    ->where('cart_status', 'unpaid')
                    ->get();
        return $listcart;
    }


    public function addToCart(Request $request){

        $now = now();
        $product_id = $request->id;
        $user_id = Auth::user()->user_id;

        $product = Product::find($product_id);

        /**
         * harusnya ada validasi lagi misalnya user_id nya valid ga
         * terus product_id nya valid ga
         * terus pas di cari $product nya kosong ga
         * baru check kalo productnya ada qty nya masih ada sisa ga
         * tapi karna bodo amat jadi gas langsung create masukin table carts
         */

        $data = Cart::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'cart_status' => 'unpaid',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan ke keranjang');

    }
}
