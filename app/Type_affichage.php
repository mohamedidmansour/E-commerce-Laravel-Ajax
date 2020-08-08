<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_affichage extends Model
{
    //
    public function produit(){
    	return $this->hasMany("App\Produit");
    }
}
