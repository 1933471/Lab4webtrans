<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class apiController extends Controller
{
    public function delete($id)
    {
        $nouveauProduit = Produit::find($id);
        $nouveauProduit->delete();

        return response()->json(
            'Produit bien suprimé de la base de données'
        );
    }
 function changerQuantite($id, $nouvelleQuantite)
 {
     $nouveauProduit = Produit::find($id);
     $nouveauProduit->quantite = $nouvelleQuantite;

     $nouveauProduit->save();

     return response()->json(
         'Quantité bien modifiée'
     );
 }
}
