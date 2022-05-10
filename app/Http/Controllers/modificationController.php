<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;


class modificationController extends Controller
{
    function AfficherPageModification(Request $request,$id){
        $produit = Produit::find($id);
        return view("modification",['produit'=> $produit]);
        }
        function modifier(Request $request, $id){

            $produit = Produit::find($id);

            $produit->nom = $request->nom;

            $produit->prix = $request->prix;

            $produit->quantite = $request->quantite;

            $produit->fourniseur = $request->fourniseur;

            $produit->save();

            return redirect("/");
        }
}
