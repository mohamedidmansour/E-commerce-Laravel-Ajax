<?php

namespace App\Http\Controllers;

use App\Mouvement;
use Illuminate\Http\Request;

class MouvementController extends Controller
{
    //
    public function creatMouvement()
    {
        return view('dashbord.add_mouvement');
    }

    public function storeMouvement(Request $requist)
    {
        $forma_boitier = new Mouvement();
        $forma_boitier->libelle = $requist->input('libelle');
        $forma_boitier->Save();
        return redirect('all_info');
    }

    public function editMouvement($id)
    {
        $so = Mouvement::find($id);
        return view('dashbord.update_mouvement', ['so' => $so]);
    }

    public function updateMouvement(Request $requist, $id)
    {
        $forma_boitier = Mouvement::find($id);
        $forma_boitier->libelle = $requist->input('libelle');
        $forma_boitier->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }

    public function destroyMouvement(Request $requist, $id)
    {
        $sout = Mouvement::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }
}
