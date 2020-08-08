<?php

namespace App\Http\Controllers;

use App\Typesn;
use Illuminate\Http\Request;

class TypesnController extends Controller
{
    //
    public function creatTypeSn()
    {
        return view('dashbord.add_type_sn');
    }

    public function storeTypeSn(Request $requist)
    {
        $marque = new Typesn();
        $marque->libelle=$requist->input('libelle');
        $marque->Save();
        return redirect('all_info');
    }

    public function editTypeSn($id)
    {
        $so=Typesn::find($id);
        return view('dashbord.update_type_sn',['so'=>$so]);
    }

    public function updateTypeSn(Request $requist,$id)
    {
        $marque=Typesn::find($id);
        $marque->libelle=$requist->input('libelle');
        $marque->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }

    public function destroyTypeSn(Request $requist,$id)
    {
        $sout=Typesn::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    } 
}
