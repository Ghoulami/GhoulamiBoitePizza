<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\Supplement;
use Illuminate\Http\Request;

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

    function getPoduit ($id) {
        $produit = Produit::with('commentaire')->find($id);;
        $commenatires = $produit->commentaire;
        $suppluments = Supplement::all();
        return view('infos', [
            'produit' =>$produit,
            'commenatires' => $commenatires,
            'suppluments' => $suppluments
        ]);
    }

    function getAddToCart($id , Request $request){
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $product = Produit::find($id);
        $cart = new Cart($oldCart);
        $cart->addProduit($product, $product->id);
        $request->session()->put('cart', $cart);
        return back()->with('success','Item created successfully!');
    }

    
    function getRemoveProduct($id , Request $request){
        
        $cart = $request->session()->get('cart');
        $removedItem = $cart->products[$id];
        $cart->totalQty-=  $removedItem['qty'];
        $cart->totalPrice -= $removedItem['product']['prix'] * $removedItem['qty'];
        $cart->products[$id] = $removedItem;
        unset($cart->products[$id]);

        if(empty($cart->supplements) && empty($cart->products)){
            $request->session()->forget('cart');
        }else{
            $request->session()->put('cart', $cart);
        }
        
        return back()->with('success','Item created successfully!');
    }

}



