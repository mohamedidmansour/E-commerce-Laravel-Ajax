<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Image_pr;
use App\Produit;
use Illuminate\Support\Facades\DB;

class Image_prController extends Controller
{
    //
    public function creatimage($id)
    {
        $so=Produit::find($id);
    	return view('dashbord.add_image',['so'=>$so]);
    }

    public function storeimage(Request $requist)
    {
        $produit = new Image_pr();
        
        $produit->produit_id=$requist->input('produit_id');
        
        $path = $requist->photo->store('images');
            $a=explode('/',$path);
            $ur= $requist->file('photo')->storeAs('images',$a[1],'public');
        $produit->url=$ur;
        $produit->Save();
    	return redirect('product/list');
    }
}
