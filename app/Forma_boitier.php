<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forma_boitier extends Model
{
    public function produit(){
    	return $this->hasMany("App\Produit");
    }
}
