<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color_metal extends Model
{
    //
    public function produit(){
    	return $this->hasMany("App\Produit");
    }
}
