<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Sous_cat;
use Illuminate\Http\Request;

class Sous_catController extends Controller
{
    //
    public function creatSous_cat()
    {
        $so=Categorie::all();
        
        return view('dashbord.add_sous_categorie',['so'=>$so]);
    }

    public function storeSous_cat(Request $requist)
    {
        $marque = new Sous_cat();
        $marque->libelle=$requist->input('nom_categ');
        $marque->categorie_id=$requist->input('categorie');
        $marque->Save();
        return redirect('all_info');
    }

    public function editSous_cat($id)
    {
        $so=Sous_cat::find($id);
        $sor=Categorie::all();
        return view('dashbord.update_sous_categorie',['so'=>$so,'sor'=>$sor]);
    }

    public function updateSous_cat(Request $requist,$id)
    {
        $marque=Sous_cat::find($id);
        $marque->libelle=$requist->input('nom_categ');
        $marque->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }

    public function destroySous_cat(Request $requist,$id)
    {
        $sout=Sous_cat::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }

}
