<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque;

class MarqueController extends Controller
{
    //

    public function creatmarque()
    { 
    	return view('dashbord.add_marque');
    }

    public function storemarque(Request $requist)
    {
    	$marque = new Marque();
    	$marque->libelle=$requist->input('nom_marq');
    	$marque->Save(); 
    	return redirect('all_info');
    } 
    
    public function editmarque($id)
    {
        $so=Marque::find($id);
        return view('dashbord.update_marque',['so'=>$so]);
    }
    
    public function updatemarque(Request $requist,$id)
    {
        $marque=Marque::find($id);
        $marque->libelle=$requist->input('nom_marq');
        $marque->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }
    
    public function destroymarque(Request $requist,$id)
    {
        $sout=Marque::find($id);
        $sout->delete();
       //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }
}
