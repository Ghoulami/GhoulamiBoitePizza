<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Session;

class ProduitController extends Controller
{
    function indexPizzas() {
        $pizzas = Categorie::find(2)->produit;
        return view('pizzas' , [
            'pizzas' =>$pizzas
        ]);
    }

    function indexProduiut(Request $request) {
        $produits = Produit::All();

        return view('order' , [
            'produits' =>$produits,
            'cart' => $request->session()->get('cart')
        ]);
    }

    function getAddToCart($id , Request $request){
        
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $product = Produit::find($id);
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        //dd($cart);
        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        //$request->session()->forget('cart');
        return back()->with('success','Item created successfully!');
    }

    function getRemoveToCart($id , Request $request){
        
        $cart = $request->session()->get('cart');
        $removedItem = $cart->items[$id];
        $removedItem['qty']--;
        $removedItem['price'] = $removedItem['item']['prix'] * $removedItem['qty'];
        $cart->totalQty--;
        $cart->totalPrice -= $removedItem['item']['prix'];
        $cart->items[$id] = $removedItem;
        if ($removedItem['qty'] == 0){
            unset($cart->items[$id]);
        }

        if(empty($cart->items)){
            $request->session()->forget('cart');
        }else{
            $request->session()->put('cart', $cart);
        }
        
        return back()->with('success','Item created successfully!');
    }

    function getShoppingCart(Request $request) {
        //dd($request->session()->get('cart'));
        //$request->session()->forget('cart');
        if (!Session ::has('cart')){
            return view('carte' ,[
                'produits' => null,
                'totale' => 0,
                'qty'=> 0,
            ]);
        }

        $cart = $request->session()->get('cart');
        return view('carte' ,[
            'produits' => $cart->items,
            'totale' => $cart->totalPrice,
            'qty'=> $cart->totalQty
        ]);
    }

}



