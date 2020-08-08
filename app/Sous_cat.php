<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sous_cat extends Model
{
    //
    public function categorie(){
    	return $this->belongsTo("App\Categorie");
    }
    public function produit(){
    	return $this->hasMany("App\Produit");
    }
}  
 