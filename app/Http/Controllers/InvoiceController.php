<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;


class InvoiceController extends Controller
{
    public function printInvoice()
    {
        $commande = Session::get('commande');

        return view('invoice');/*->with([
            'produits' => $commande->products,
            'supplements' => $commande->supplements,
            'commande' => $commande,
        ]);*/
    }
}
