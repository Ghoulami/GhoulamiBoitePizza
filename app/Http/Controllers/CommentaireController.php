<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class commentaireController extends Controller
{
    function postComment($clinet_id , $produit_id , Request $request){
        $data = $request->only(['texte']);
        $data['client_id'] = $clinet_id;
        $data['produit_id'] = $produit_id;
        $commenatire = Commentaire::create($data);
        return back()->with('success','Comment successfully!');
    }
}
