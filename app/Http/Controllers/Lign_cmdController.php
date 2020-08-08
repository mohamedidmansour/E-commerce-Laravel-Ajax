<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\User;
use App\Cmd;
use App\Lign_cmd;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB; 

class Lign_cmdController extends Controller
{
    // 
    public function createshop(Request $requist)
    { 
        $User = User::find(session()->get("id")[0]);
        $var=$requist->input('produit_id');
       	$product=Produit::all();
        $cmpts = DB::table('comptes')->where("user_id","=",session()->get("id")[0])->get();


       	$listproduit = DB::table('produits')
        ->join('lign_cmds', 'lign_cmds.produit_id', '=', 'produits.id')
        ->join('cmds', 'lign_cmds.cmd_id', '=', 'cmds.id')
        ->where("cmds.user_id","=",session()->get("id")[0])
        ->where("cmds.val","=",0)
        ->select('produits.libelle','produits.url_p','lign_cmds.qte','produits.prix_vent','lign_cmds.cmd_id','lign_cmds.produit_id','lign_cmds.id')
        ->get();
        return view('site.shoping_cart',['listpr'=>$listproduit,'cmpts'=>$cmpts]);
    } 
    public function validshop(Request $requist)
    { 
        $listproduit = DB::table('produits')
        ->join('lign_cmds', 'lign_cmds.produit_id', '=', 'produits.id')
        ->join('cmds', 'lign_cmds.cmd_id', '=', 'cmds.id')
        ->where("cmds.user_id","=",session()->get("id")[0])
        ->where("cmds.val","=",1)
        ->select('produits.libelle','produits.url_p','lign_cmds.qte','produits.prix_vent','lign_cmds.cmd_id','lign_cmds.produit_id','lign_cmds.id','cmds.updated_at')
        ->get();
        return view('site.shoping_cart_val',['listpr'=>$listproduit]);
    }
    public function editshop(Request $requist)
    {
    	$idcmd=$requist->input('hidden_cmd');
        $cmd=Cmd::find($idcmd);
        $cmd->val=1;
        $cmd->Save();

        $idtof=$requist->input('hidden_tof');
        // $lignecmd = DB::table('lign_cmds')->where("cmd_id","=",$idcmd)->where("produit_id","=",$idpr)->get();
        $tof=Lign_cmd::find($idtof); 
        $tof->qte=$requist->input('numproduct1');
        $tof->Save();
        
        return redirect('shop/create');
    }

    public function editshopupdate(Request $requist)
    {
        $produit_id=$requist->input('produit_id');
        $qte=$requist->input('num_qte');

        $cmd=DB::table('lign_cmds')
        ->join('cmds', 'lign_cmds.cmd_id', '=', 'cmds.id')
        ->join('produits', 'produits.id', '=', 'lign_cmds.produit_id')
        ->where("cmds.user_id","=",session()->get("id")[0])
        ->where("cmds.val","=",0)
        ->where("lign_cmds.produit_id","=",$produit_id) 
        ->select("lign_cmds.id")
        ->first();
        
        if (isset($cmd->id)) {
            # code...
            $idilgne=$cmd->id;
            $ligne_cmd_ligne=Lign_cmd::find($idilgne);
            $ligne_cmd_ligne->qte=$qte;
            $ligne_cmd_ligne->Save();
            return redirect("all_pr");

        }
            // $maxcmd = DB::table('cmds')->max('id');
            // return $maxcmd;
        
            $iduser=session()->get("id")[0];
            $commande = new Cmd();
            $commande->date_creation="2019-06-03";
            $commande->val=0;
            $commande->user_id=$iduser;
            $commande->Save(); 

            $maxcmd = DB::table('cmds')->max('id');
            $ligne_cmd = new Lign_cmd();
            $ligne_cmd->cmd_id=$maxcmd;
            $ligne_cmd->produit_id=$produit_id;
            $ligne_cmd->qte=$qte;
            $ligne_cmd->Save(); 
        
        return redirect("all_pr");
    }

    public function destroyshop($id,$cmd_id)
    {
        $sout=Lign_cmd::find($id);
        $sout->delete();
        $cmd=Cmd::find($cmd_id);
        $cmd->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('shop/create');
    } 

    public function validerTous(Request $requist)
    {
        $cmd=DB::table('cmds')
        ->where("user_id","=",session()->get("id")[0])
        ->where("val","=",0)
        ->get();
        
        $idcmpt=$requist->input('compt');

        foreach ($cmd as $so) {
            # code...
            $valid=Cmd::find($so->id);
            $valid->val=1;
            $valid->compte_id=$idcmpt;
            $valid->save();
        }
        
        return redirect('shop/create');
    }

     public function lignecmd_fplus(Request $requist)
    {
            $idilgne=$requist->input('ligne_cmd_id');
            $qte=$requist->input('quantiter');
            return $qte;
            $ligne_cmd_ligne=Lign_cmd::find($idilgne);
            $ligne_cmd_ligne->qte=$qte+1;
            $ligne_cmd_ligne->Save();

    }

}
