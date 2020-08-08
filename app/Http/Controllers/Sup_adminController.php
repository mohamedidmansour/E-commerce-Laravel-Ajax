<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Sup_adminController extends Controller
{
    public function indexAdmin()
    {
        $list = DB::table('users')->where('type', '=', 'admin')->get();
        return view('dashbord.list_admins', ['admin' => $list]);
    }

    function ListClient()
    {

        $list = DB::table('users')->where('type', '=', 'client')->get();
        return view('dashbord.list_clients', ['admin' => $list]);

    }

    public function creatAdmin()
    {
        return view('dashbord.add_admin');
    }

    public function storeAdmin(Request $requist)
    {

        if ($requist->hasFile('photo')) {
            $User = new User();
            $path = $requist->photo->store('images');
            $var = explode("/", $path);
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
            $User->type = "admin";
            $User->Save();
            return redirect('admin\list');
        } else {
            echo "upload failed";
        }


    }


    // Partie Admin
    public function updateAdmin($id, Request $requist)
    {
        if ($requist->hasFile('photo')) {
            $User = User::find($id);
            $path = $requist->photo->store('images');
            $var = explode("/", $path);
            /*
             * cmd :  php artisan storage:link
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
            $User->type = "admin";
            $User->Save();
        }
        return redirect('admin\list');


    }

    public function editAdmin($id)
    {
        $so = User::find($id);
        return view('dashbord.update_admin', ["so" => $so]);
    }


    public function destroyAdmin(Request $requist, $id)
    {
        $sout = Produit::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('list');
    }

    public function loginAdmin()
    {
        if (\Illuminate\Support\Facades\Session::has("id_admin") || \Illuminate\Support\Facades\Session::has("type_admin") == "sup" || \Illuminate\Support\Facades\Session::has("type_admin") == "admin") {
            return redirect('index');
        }
        return view('dashbord.login_admin');
    }

    public function loginAdminTest(Request $requist)
    {
        if (\Illuminate\Support\Facades\Session::has("id_admin") || \Illuminate\Support\Facades\Session::has("type_admin") == "sup" || \Illuminate\Support\Facades\Session::has("type_admin") == "admin") {
            return redirect('admin\list');
        }
        $user = User::all()->where("email", $requist->input('email'))
            ->where("password", $requist->input('password'))->first();
        if (isset($user)) {
            session()->push("id_admin", $user->id);
            session()->push("type_admin", $user->type);
            //echo $user->type;
            return redirect('index');
        } else {
            return redirect('admin\login');
        }
    }

    public function DeconnexionAdmin()
    {
        session()->forget('id_admin');
        session()->forget('type_admin');
        return redirect("admin\login");
    }

    public function deleteAdmin($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect('admin\list');
    }

}
