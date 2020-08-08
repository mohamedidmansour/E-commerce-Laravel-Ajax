<?php

namespace App\Http\Controllers;

use App\Forma_boitier;
use Illuminate\Http\Request;

class Forma_boitierController extends Controller
{
    //
    public function creatForma_boitier()
    {
        return view('dashbord.add_forma_boitier');
    }

    public function storeForma_boitier(Request $requist)
    {
        $forma_boitier = new Forma_boitier();
        $forma_boitier->libelle = $requist->input('libelle');
        $forma_boitier->Save();
        return redirect('all_info');
    }

    public function editForma_boitier($id)
    {
        $so = Forma_boitier::find($id);
        return view('dashbord.update_forma_boitier', ['so' => $so]);
    }

    public function updateForma_boitier(Request $requist, $id)
    {
        $forma_boitier = Forma_boitier::find($id);
        $forma_boitier->libelle = $requist->input('libelle');
        $forma_boitier->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }

    public function destroyForma_boitier(Request $requist, $id)
    {
        $sout = Forma_boitier::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }
}
