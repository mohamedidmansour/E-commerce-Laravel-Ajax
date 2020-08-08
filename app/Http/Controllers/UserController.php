<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function indexUser()
    {
 
    }

    public function creatUser()
    {
        return view('site.all_produit');
        //$user = Auth::user();
        //echo $user->id;
    }

    public function storeUser(Request $requist)
    {
        $User = new User();
        if ($requist->hasFile('photo')) {
            $path = $requist->photo->store('images');
            $var = explode("/", $path);
            /*
             * cmd :  php artisan storage:link
             *
             * */
            $url = $requist->file("photo")->storeAs("images", $var[1], 'public');
            $User->photo = $url;
            $User->nom = $requist->input('nom');
            $User->email = $requist->input('email');
            $User->password = $requist->input('password');
            $User->prenom = $requist->input('prenom');
            $User->civilite = $requist->input('civilite');
            $User->adresse = $requist->input('adresse');
            $User->dateNaissance = $requist->input('dateNaissance');
            $User->tel = $requist->input('tel');
            $User->ville = $requist->input('ville');
            $User->codePostale = $requist->input('codePostale');
            $User->pays = $requist->input('pays');
            $User->type = "client";
            $User->Save();
        }

        return redirect('profile/login');
    }

    public function editUser()
    {
        if (\Illuminate\Support\Facades\Session::has("id")) {
            $so = User::find(session()->get("id")[0]);
            return view('site.update_user', ["so" => $so]);
        } else {
            return redirect('profile/login');
        }
    }

    public function updateUser(Request $requist)
    {
        $User = User::find(session()->get("id")[0]);
        if ($requist->hasFile('photo')) {
            $path = $requist->photo->store('images');
            $var = explode("/", $path);
            /*
             * cmd :  php artisan storage:link
             * */
            $url = $requist->file("photo")->storeAs("images", $var[1], 'public');
            $User->photo = $url;
            $User->nom = $requist->input('nom');
            $User->prenom = $requist->input('prenom');
            $User->email = $requist->input('email');
            $User->password = $requist->input('password');
            $User->civilite = $requist->input('civilite');
            $User->adresse = $requist->input('adresse');
            $User->dateNaissance = $requist->input('dateNaissance');
            $User->tel = $requist->input('tel');
            $User->ville = $requist->input('ville');
            $User->codePostale = $requist->input('codePostale');
            $User->pays = $requist->input('pays');
            $User->Save();
            return redirect('all_pr');
        } else {
            echo "upload avec erreur!!";
        }

    }



    public function loginUser()
    {
        $cmd = DB::table('cmds')->where("val","=",0)->where("user_id","=",session()->get("id")[0]);
        $total=$cmd->count();
        return view("site.inscrire_user",["total"=>$total]);
    }

    public function loginValideUser(Request $requist)
    {
        $user = User::all()->where("email", $requist->input('email'))
                           ->where("password", $requist->input('password'))->first();
        if (isset($user)) {
            session()->push("id", $user->id);
            return redirect('all_pr');
        } else {
            return redirect('all_pr');
        }
    }

    public function destorySession()
    {
        if (\Illuminate\Support\Facades\Session::has("id")) {
            session()->forget('id');
        }
        return redirect("all_pr");
    }
}
