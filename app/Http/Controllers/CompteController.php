<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compte;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
class CompteController extends Controller
{
    //
    public function creatcompte()
    { 
        $cmpts = DB::table('comptes')->where("user_id","=",session()->get("id")[0])->get();
        // return $cmpts;
    	return view('site.compte',['cmpts'=>$cmpts]);
    }

    public function storecompte(Request $requist)
    {
    	$compte = new Compte();
        $compte->libelle=$requist->input('libelle');
        $compte->numcopmte=$requist->input('numcopmte');
        $compte->month=$requist->input('month');
        $compte->year=$requist->input('year');
        $compte->cosesecurity=$requist->input('cosesecurity');
        $compte->password=$requist->input('password');
        $compte->user_id=session()->get("id")[0];
    	$compte->Save(); 
    	return redirect('compte/create');
    }
    
    public function editcompte($id)
    {
        $so=Compte::find($id);
        return view('site.update_compte',['so'=>$so]);
    }
    
    public function updatecompte(Request $requist,$id)
    {
        $compte=Compte::find($id);
        $compte = new Compte();
        $compte->libelle=$requist->input('libelle');
        $compte->numcopmte=$requist->input('numcopmte');
        $compte->month=$requist->input('month');
        $compte->year=$requist->input('year');
        $compte->cosesecurity=$requist->input('cosesecurity');
        $compte->password=$requist->input('password');
        $compte->user_id=$requist->input('user_id');
        $compte->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }
    
    public function destroycompte(Request $requist,$id)
    {
        $sout=Compte::find($id);
        $sout->delete();
       //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('compte/create');
    }
}
