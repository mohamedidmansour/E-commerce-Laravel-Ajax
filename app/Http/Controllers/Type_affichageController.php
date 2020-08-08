<?php

namespace App\Http\Controllers;

use App\Type_affichage;
use Illuminate\Http\Request;

class Type_affichageController extends Controller
{
    //
    public function creatType_aff()
    {
        return view('dashbord.add_type_affichage');
    }

    public function storeType_aff(Request $requist)
    {
        $marque = new Type_affichage();
        $marque->libelle=$requist->input('libelle');
        $marque->Save();
        return redirect('all_info');
    }

    public function editType_aff($id)
    {
        $so=Type_affichage::find($id);
        return view('dashbord.update_type_affichage',['so'=>$so]);
    }

    public function updateType_aff(Request $requist,$id)
    {
        $marque=Type_affichage::find($id);
        $marque->libelle=$requist->input('libelle');
        $marque->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }

    public function destroyType_aff(Request $requist,$id)
    {
        $sout=Type_affichage::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }
}
