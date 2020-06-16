<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Commandes;
use App\Models\Supplement;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Stripe::setApiKey('sk_test_51GrQBbHCDCu5X4r0eg4p3uALxmt8WxoR16kzyvE8Oi54qcXmpccVBy1nafc6imF8p6hFJGfCYGw7onOMJOxQYUOe00JF2bxCX0');

        $intent = PaymentIntent::create([
            'amount' => Session::has('cart') ? (Session::get('cart')->totalPrice) * 10 : 50,
            'currency' => 'usd',
        ]);

        $clientSecret = Arr::get($intent,'client_secret');

        if (!Session::has('cart')){
            return view('checkout' ,[
                'produits' => null,
                'supplements' => null,
                'totale' => 0,
                'qty'=> 0,
                'clientSecret' => $clientSecret,
            ]);
        }

        $cart = Session::get('cart');
    
        return view('checkout')->with([
            'produits' => $cart->products,
            'supplements' => $cart->supplements,
            'totale' => $cart->totalPrice,
            'qty'=> $cart->totalQty,
            'clientSecret' => $clientSecret,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $cart = Session::get('cart');
        Session::forget('cart');
        $data = $request->json()->all();
        $data['qty_total'] = $cart->totalQty;
        $data['prixTotal'] = $cart->totalPrice;
        $commande = new Commandes($data);
        $commande->client_id = auth()->user()->id;
        $commande->save();

        foreach(array_keys($cart->products) as $id){
            $commande->produit()->attach($id);
        }
        if(!is_null($cart->supplements)){
            foreach(array_keys($cart->supplements) as $id){
                $commande->supplement()->attach($id);
                Supplement::find($id)->produit()->toggle($cart->supplements[$id]['produits']);
            }
        }
        $request->session()->put('commande', $commande);
        return "save command";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
