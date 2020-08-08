<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Remi;
use App\Produit_remi;

class Produit_remiController extends Controller
{
    //

     public function create_remise($id)
    {
        $listeRemise = Remi::all();
        $produit = Produit::find($id);
        return view('dashbord.add_remise_pr', ["remises" => $listeRemise, "produit" => $produit]);
    }
    public function store_remise(Request $requist)
    {
    	$remise = new Produit_remi();
    	$remise->produit_id=$requist->input('produit_id');
    	$remise->remi_id=$requist->input('remi_id');
    	$remise->date_debut=$requist->input('date_debut');
    	$remise->date_fin=$requist->input('date_fin');
    	$remise->Save(); 
    	return redirect('product/list');
    }
}
