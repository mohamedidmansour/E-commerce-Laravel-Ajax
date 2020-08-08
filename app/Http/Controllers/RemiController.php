<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remi;

class RemiController extends Controller
{
    //
    public function creatRemi()
    { 
    	return view('dashbord.add_remi');
    }

    public function storeRemi(Request $requist)
    {
    	$Remi = new Remi();
    	$Remi->taux=$requist->input('taux');
    	$Remi->Save(); 
    	return redirect('all_info');
    }
    
    public function editRemi($id)
    {
        $so=Remi::find($id); 
        return view('dashbord.update_remi',['so'=>$so]);
    }
    
    public function updateRemi(Request $requist,$id)
    {
        $Remi=Remi::find($id);
        $Remi->taux=$requist->input('taux');
        $Remi->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }
    
    public function destroyRemi(Request $requist,$id)
    {
        $sout=Remi::find($id);
        $sout->delete();
       //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }
}
