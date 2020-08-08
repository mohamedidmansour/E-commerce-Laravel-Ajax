<?php

namespace App\Http\Controllers;

use App\Univer;
use Illuminate\Http\Request;

class UniverController extends Controller
{
    //
    public function creatUniver()
    {
        return view('dashbord.add_univer');
    }

    public function storeUniver(Request $requist)
    {
        $marque = new Univer();
        $marque->libelle=$requist->input('libelle');
        $marque->Save();
        return redirect('all_info');
    }

    public function editUniver($id)
    {
        $so=Univer::find($id);
        return view('dashbord.update_univer',['so'=>$so]);
    }

    public function updateUniver(Request $requist,$id)
    {
        $marque=Univer::find($id);
        $marque->libelle=$requist->input('libelle');
        $marque->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }

    public function destroyUniver(Request $requist,$id)
    {
        $sout=Univer::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }
}
