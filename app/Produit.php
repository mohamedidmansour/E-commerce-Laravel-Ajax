<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sous_cat;

class Produit extends Model
{ 
    //
    public function color_metal(){
    	return $this->belongsTo("App\Color_metal");
    }
    public function mouvement(){
    	return $this->belongsTo("App\Mouvement");
    }
    public function forma_boitier(){
    	return $this->belongsTo("App\Forma_boitier");
    }
    public function typesn(){
    	return $this->belongsTo("App\Typesn");
    }
    public function type_affichage(){
    	return $this->belongsTo("App\Type_affichage");
    }
    public function marque(){
    	return $this->belongsTo("App\Marque");
    }
    public function univer(){
    	return $this->belongsTo("App\Univer");
    } 
    public function sous_cat(){
    	return $this->belongsTo("App\Sous_cat");
    }
    // public function getsous_cat()
    // {
    //     return Sous_cat::where('id',$this->sous_cat_id)->first()->id;
    // }
}
