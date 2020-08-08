<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    public function sous_cat(){
    	return $this->hasMany("App\Sous_cat");
    }
}
