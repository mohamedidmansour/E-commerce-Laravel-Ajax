<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Produit;
use App\Image_pr;
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

class ProduitController extends Controller
{ 
    //
    public function indexproduit() 
    { 
    	$listproduit=Produit::all();
        $listcolor=Color_metal::all();
        $listmarque=Marque::all();
        $listUniver=Univer::all();
        $listForma_boitier=Forma_boitier::all();

        $cmd = DB::table('cmds')->where("val","=",0)->where("user_id","=",session()->get("id")[0]);
        $total=$cmd->count();
    	return view('site.all_produit',['produit'=>$listproduit,'total'=>$total,'color'=>$listcolor,'marque'=>$listmarque,'univer'=>$listUniver,'frma'=>$listForma_boitier]); 
    }
    public function indexproduit3() 
    { 
        $listproduit=Produit::all();
        $cmd = DB::table('cmds')->where("val","=",0)->where("user_id","=",session()->get("id")[0]);
        $total=$cmd->count();
        return view('site.pro_sans',['produit'=>$listproduit,'total'=>$total]); 
    }

     public function indexproduit4($id)
    { 
        if ($id=="women") {
            # code...
            $listproduit = DB::table('produits')->where("univer_id","=",2)->get();
        }
        if ($id=="men") {
            # code...
            $listproduit = DB::table('produits')->where("univer_id","=",1)->get();
        }
        if ($id=="accessoire") {
            # code...
            $listproduit = DB::table('produits')->where("type","=","bijoux")->get();
        }
        if ($id=="monter") {
            # code...
            $listproduit = DB::table('produits')->where("type","=","montre")->get();
        }
        if ($id=="menmontre") {
            # code...
            $listproduit = DB::table('produits')->where("type","=","montre")->where("univer_id","=",1)->get();
        }
        if ($id=="womenmontre") {
            # code...
            $listproduit = DB::table('produits')->where("type","=","montre")->where("univer_id","=",2)->get();
        }
        if ($id=="womenacces") {
            # code...
            $listproduit = DB::table('produits')->where("type","=","bijoux")->where("univer_id","=",2)->get();
        }
        return view('site.all_pr_categrie',['produit'=>$listproduit]);
    }


    public function getproduits() 
    { 
        // $listproduit=Produit::all();
        // return $listproduit; 

        $listproduit = DB::table('produits')
        ->join('lign_cmds', 'lign_cmds.produit_id', '=', 'produits.id')
        ->join('cmds', 'lign_cmds.cmd_id', '=', 'cmds.id')
        ->where("cmds.user_id","=",session()->get("id")[0])
        ->where("cmds.val","=",0)
        ->select('produits.libelle','produits.url_p','lign_cmds.qte','produits.prix_vent')
        ->orderBy('lign_cmds.created_at', 'desc')
        ->get();
        return $listproduit;
    }


    public function cartcount() 
    { 
        $cmd = DB::table('cmds')->where("val","=",0)->where("user_id","=",session()->get("id")[0]);
        $total=$cmd->count();
        return $total; 
    }
    public function indexproduit2() 
    { 
    	$listproduit=Produit::all();
    	return view('dashbord.list_products',['produit'=>$listproduit]); 
    }

    public function creatproduit()
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

        return view('dashbord.add_product',['marque'=>$listMarque,
        'cat'=>$listCategorie,
        'color'=>$listColor_metal,
        'forma'=>$listForma_boitier,
        'mouv'=>$listMouvement,
        'scat'=>$listSous_cate,
        'type_aff'=>$listType_affichage,
        'typesn'=>$listTypesn,
        'univer'=>$listUniver,
        'remi'=>$listRemi]);
    }

    public function storeproduit(Request $requist)
    {
        $produit = new Produit();
        $produit->libelle=$requist->input('libelle_pr');
        $produit->prix_achat=$requist->input('prix_achat');
        $produit->prix_vent=$requist->input('prix_vent');
        $produit->seuil=$requist->input('seuil');
        $produit->taille=$requist->input('taille');
        $produit->qte_stock=$requist->input('qte');
        $produit->description=$requist->input('desc');
        $produit->marque_id=$requist->input('marque');
        $produit->univer_id=$requist->input('univer');
        $produit->color_metal_id=$requist->input('color');
        $produit->typesn_id=$requist->input('typesn');
        $produit->mouvement_id=$requist->input('move');
        $produit->type_affichage_id=$requist->input('type_affich');
        $produit->forma_boitier_id=$requist->input('forma_boi');
        $produit->sous_cat_id=$requist->input('scat');
        $produit->remi_id=$requist->input('remi_id');
        $produit->type=$requist->input('type');
            $path = $requist->photo->store('images');
            $a=explode('/',$path);
            $ur= $requist->file('photo')->storeAs('images',$a[1],'public');
            $produit->url_p=$ur;
        $produit->Save();
        return redirect('product/list');
    }
     public function updatproduit(Request $requist)
    {
        $produit = Produit::find($requist->input("id"));
        $produit->libelle = $requist->input('libelle');
        $produit->prix_achat = $requist->input('prix_achat');
        $produit->prix_vent = $requist->input('prix_vent');
        $produit->seuil = $requist->input('seuil');
        $produit->taille = $requist->input('taille');
        $produit->qte_stock = $requist->input('qte');
        $produit->description = $requist->input('desc');
        $produit->marque_id = $requist->input('marque');
        $produit->univer_id = $requist->input('univer');
        $produit->color_metal_id = $requist->input('color');
        $produit->typesn_id = $requist->input('typesn');
        $produit->mouvement_id = $requist->input('move');
        $produit->type_affichage_id = $requist->input('type_affich');
        $produit->forma_boitier_id = $requist->input('forma_boi');
        $produit->sous_cat_id = $requist->input('scat');
        $produit->remi_id = $requist->input('remi_id');
        $path = $requist->photo->store('images');
        $a = explode('/', $path);
        $ur = $requist->file('photo')->storeAs('images', $a[1], 'public');
        $produit->url_p = $ur;
        $produit->save();
        return redirect('product/list');
    }

    public function editproduit3($id)
    {
        // tout les donner du produit
        $listproduit = Produit::find($id);
        $listMarque = Marque::all();
        $listCategorie = Categorie::all();
        $listColor_metal = Color_metal::all();
        $listForma_boitier = Forma_boitier::all();
        $listMouvement = Mouvement::all();
        $listSous_cate = Sous_cat::all();
        $listType_affichage = Type_affichage::all();
        $listTypesn = Typesn::all();
        $listUniver = Univer::all();
        $listRemi = Remi::all();

        return view('dashbord.update_product', ['produit' => $listproduit,
            'marque' => $listMarque,
            'cat' => $listCategorie,
            'color' => $listColor_metal,
            'forma' => $listForma_boitier,
            'mouv' => $listMouvement,
            'scat' => $listSous_cate,
            'type_aff' => $listType_affichage,
            'typesn' => $listTypesn,
            'univer' => $listUniver,
            'remi' => $listRemi]);



    }

    // Partie Admin
    public function editproduit2($id)
    {
        $listproduit=Produit::find($id);
        $remi=Remi::find($listproduit->remi_id);
        $imgs = DB::table('image_prs')->where('produit_id', '=', $id)->get();
        return view('dashbord.details_product_ad',['so'=>$listproduit,'imgs'=>$imgs,'rrr'=>$remi]);
    }

    public function editproduct($id)
    {
        $listproduit=Produit::find($id);
        $imge=DB::table('image_prs')->where("produit_id","=",$id)->get();
        $cmd = DB::table('cmds')->where("val","=",0)->where("user_id","=",session()->get("id")[0]);
        $total=$cmd->count();
        return view('site.detaille_produit',['product'=>$listproduit,"total"=>$total,"imge"=>$imge]);
    }

    public function destroyproduit(Request $requist,$id)
    {
        $sout=Produit::find($id);
        $sout->delete();
        //session()->flash('delete','تمت عملية الحدف بنجاح');
        return redirect('product\list');
    }
}
