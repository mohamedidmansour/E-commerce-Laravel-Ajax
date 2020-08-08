<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque;
use App\Categorie;
use App\Color_metal;
use App\Forma_boitier;
use App\Mouvement;
use App\Sous_cat;
use App\Type_affichage;
use App\Typesn;
use App\Univer;
use App\Remi; 
use Illuminate\Support\Facades\DB; 
use App\Produit;

class MixtController extends Controller
{
    //
    public function indexMarque() 
    {
        $listMarque=Marque::all();
        $listCategorie=Categorie::all();
        $listColor_metal=Color_metal::all();
        $listForma_boitier=Forma_boitier::all();
        $listMouvement=Mouvement::all();
        $listSous_cate=Sous_cat::all();
        $listType_affichage=Type_affichage::all();
        $listTypesn=Typesn::all();
        $listUniver=Univer::all();
        $listRemi=Remi::all();
        $listProduit=Produit::all();
    
        return view('dashbord.all_info',['marque'=>$listMarque,
        'cat'=>$listCategorie,
        'color'=>$listColor_metal,
        'forma'=>$listForma_boitier,
        'mouv'=>$listMouvement,
        'scat'=>$listSous_cate,
        'type_aff'=>$listType_affichage,
        'typesn'=>$listTypesn,
        'univer'=>$listUniver,
        'remi'=>$listRemi,
        'pr'=>$listProduit]);
    }
    public function recherche_pro(Request $requist)
    {
        $nam=$requist->input('sear');
        $prod=DB::table('produits')->where("libelle","=",$nam)
        ->orwhere("libelle",'like',$nam.'%')
        ->orwhere("libelle",'like','%'.$nam)
        ->orwhere("libelle",'like','%'.$nam.'%')->get();

        return view('site.search_produit',["prod"=>$prod]);
    }
    public function recherche_admin(Request $requist)
    {
        $nam=$requist->input('sear');
        $prod=DB::table('produits')->where("libelle","=",$nam)
        ->orwhere("libelle",'like',$nam.'%')
        ->orwhere("libelle",'like','%'.$nam)
        ->orwhere("libelle",'like','%'.$nam.'%')->get();

        return view('dashbord.search_produit_admin',["prod"=>$prod]);
    }

    public function chartnumber1(Request $requist)
    {
      //   $stmt = $db->prepare("SELECT p.nom_pr as nom_pr,SUM(l.quantity_cmd) AS sommeP FROM ligne_cmd l inner join produit p ON p.id_pr=l.id_pr GROUP BY p.nom_pr");      
      // $stmt->execute();   

        $listproduit = DB::table('produits')
        ->join('lign_cmds', 'lign_cmds.produit_id', '=', 'produits.id')
        ->select('produits.libelle as nom_pr','SUM(lign_cmds.qte) as sommeP')
        ->groupBy('produits.libelle')
        ->get();    
      
     
 
        $rows = array();

        while($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $rows[] = $r;
        }
         
        //echo result as json
        echo json_encode($rows);
    }

    public function indexpage()
    {
        return view('dashbord.index');
    }
}
