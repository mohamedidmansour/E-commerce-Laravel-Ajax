<?php

namespace App\Http\Controllers;

use App\Color_metal;
use Illuminate\Http\Request;

class Color_metalController extends Controller
{
    //
    public function creatcolor()
    {
        return view('dashbord.add_color');
    }

    public function storecolor(Request $requist)
    {
        $color_metal = new Color_metal();
        $color_metal->libelle = $requist->input('libelle');
        $color_metal->code_color = $requist->input('code_color');
        $color_metal->description = $requist->input('description');
        $color_metal->Save();
        return redirect('all_info');
    }

    public function editcolor($id)
    {
        $so = Color_metal::find($id);
        return view('dashbord.update_color', ['so' => $so]);
    }

    public function updatecolor(Request $requist, $id)
    {
        $color_metal = Color_metal::find($id);
        $color_metal->libelle = $requist->input('libelle');
        $color_metal->code_color = $requist->input('code_color');
        $color_metal->description = $requist->input('description');
        $color_metal->Save();
        //session()->flash('update','تمت عملية التعديل بنجاح !');
        return redirect('all_info');
    }

    public function destroycolor(Request $requist, $id)
    {
        $sout = Color_metal::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('all_info');
    }
}
