<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\User;
use App\Cmd;
use App\Lign_cmd;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Auth;

class CmdController extends Controller
{
    public function storecmd(Request $requist)
    { 
        $User = User::find(session()->get("id")[0]);
        $var=$requist->input('produit_id');
       	$product=Produit::find($var);

       	$testcmd = DB::table('produits')
       	->join('lign_cmds', 'lign_cmds.produit_id', '=', 'produits.id')
       	->join('cmds', 'lign_cmds.cmd_id', '=', 'cmds.id')
       	->where("cmds.user_id","=",session()->get("id")[0])
       	->where("cmds.val","=",0)
       	->where("produits.id","=",$var);
       	$total2=$testcmd->count();

       	if ($total2==0) {
       		# code... 
       		$commande = new Cmd();
	    	$commande->date_creation="2019-06-03";
	    	$commande->val=0;
	    	$commande->user_id=$User->id;
	    	$commande->Save(); 

	        $maxcmd = DB::table('cmds')->max('id');

	        $ligne_cmd = new Lign_cmd();
	        $ligne_cmd->cmd_id=$maxcmd;
	        $ligne_cmd->produit_id=$product->id;
	        $ligne_cmd->qte=1;
	        $ligne_cmd->Save(); 
	        return 'OK';
       	}
    }
    public function notification()
    {
    	$cmd = DB::table('cmds')->where("val","=",0)->where("user_id","=",session()->get("id")[0]);
        $total=$cmd->count();
        return view('layout1.master',$total);
    }

}
