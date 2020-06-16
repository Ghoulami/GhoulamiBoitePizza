<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    function getShoppingCart(Request $request) {
        if (!Session ::has('cart')){
            return view('carte' ,[
                'produits' => null,
                'supplements' => null,
                'totale' => 0,
                'qty'=> 0,
            ]);
        }

        $cart = $request->session()->get('cart');
        //dd($cart);
        return view('carte' ,[
            'produits' => $cart->products,
            'supplements' => $cart->supplements,
            'totale' => $cart->totalPrice,
            'qty'=> $cart->totalQty
        ]);
    }
}
