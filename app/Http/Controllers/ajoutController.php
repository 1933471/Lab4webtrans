<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ajoutController extends Controller
{
    function AfficherPageAjout(){

        return view("ajout",['produit'=> new Produit]);
    }
    function add(Request $request){

        $request->validate([
            'nom'=>'required|max:100',
            'prix' => 'required|max:1000'
        ]);
        $produit =new Produit;

        $produit->nom = $request->nom;

        $produit->prix = $request->prix;

        $produit->quantite = $request->quantite;

        $produit->fourniseur = $request->fourniseur;

        $produit->save();

        return redirect("/");

    }
}

