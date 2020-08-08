<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //

    public function creatcategorie()
    {
        return view('dashbord.add_categorie');
    }

    public function storecategorie(Request $requist)
    {
        $marque = new Categorie();
        $marque->libelle=$requist->input('nom_categ');
        $marque->Save();
        return redirect('all_info');
    }

    public function editcategorie($id)
    {
        $so=Categorie::find($id);
        return view('dashbord.update_categorie',['so'=>$so]);
    }

    public function updatecategorie(Request $requist,$id)
    {
        $marque=Categorie::find($id);
        $marque->libelle=$requist->input('nom_categ');
        $marque->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }

    public function destroycategorie(Request $requist,$id)
    {
        $sout=Categorie::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }
}
