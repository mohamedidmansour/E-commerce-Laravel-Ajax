<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/shop', function () {
    return view('site.shoping_cart');
});

//////Affichage tous les info
Route::get('all_info','MixtController@indexMarque');
 
///////Recherche
Route::post('recherch','MixtController@recherche_pro');

///////Admin
Route::post('searchepartAdmin','MixtController@recherche_admin');

///////////////////Affichage Tous Les Produit Sans Slider & Banners
Route::get('pro_sans','ProduitController@indexproduit3');

///////////////////Affichage Tous Les Produit Sans Slider & Banners white categorie
Route::get('pro_sans_categorie/{id}/edit','ProduitController@indexproduit4');

//////Affichage tous les produits
Route::get('all_pr','ProduitController@indexproduit');

//////Affichage tous les produits
Route::get('index','MixtController@indexpage');
Route::post('chartjs1','MixtController@chartnumber1');


 
////Affichage detaille des produit
Route::get('produit/{id}/edit','ProduitController@editproduct');


/////Mis a jour Des Info

//------------------------

//********************Marque

Route::group(['prefix' => "marque"], function () {
        //Route::get('/','MarqueController@indexmarque');
        Route::get('/create','MarqueController@creatmarque');
        Route::post('/','MarqueController@storemarque');
        Route::put('/{id}','MarqueController@updatemarque');
        Route::get('/{id}/edit','MarqueController@editmarque');
        Route::delete('/{id}','MarqueController@destroymarque');
});

//********************Categorie

Route::group(['prefix' => "cat"], function () {
    //Route::get('/','CategorieController@indexcategorie');
    Route::get('/create','CategorieController@creatcategorie');
    Route::post('/','CategorieController@storecategorie');
    Route::put('/{id}','CategorieController@updatecategorie');
    Route::get('/{id}/edit','CategorieController@editcategorie');
    Route::delete('/{id}','CategorieController@destroycategorie');
});
//********************Color_metals

Route::group(['prefix' => "color"], function () {
    //Route::get('/','Color_metalController@indexcolor');
    Route::get('/create','Color_metalController@creatcolor');
    Route::post('/','Color_metalController@storecolor');
    Route::put('/{id}','Color_metalController@updatecolor');
    Route::get('/{id}/edit','Color_metalController@editcolor');
    Route::delete('/{id}','Color_metalController@destroycolor');
});

//********************Forma_boitiers

Route::group(['prefix' => "forma"], function () {
    //Route::get('/','Forma_boitierController@indexForma_boitier');
    Route::get('/create','Forma_boitierController@creatForma_boitier');
    Route::post('/','Forma_boitierController@storeForma_boitier');
    Route::put('/{id}','Forma_boitierController@updateForma_boitier');
    Route::get('/{id}/edit','Forma_boitierController@editForma_boitier');
    Route::delete('/{id}','Forma_boitierController@destroyForma_boitier');
});

//********************Remis

Route::group(['prefix' => "remis"], function () {
    //Route::get('/','RemiController@indexremi');
    Route::get('/create','RemiController@creatRemi');
    Route::post('/','RemiController@storeRemi');
    Route::put('/{id}','RemiController@updateRemi');
    Route::get('/{id}/edit','RemiController@editRemi');
    Route::delete('/{id}','RemiController@destroyRemi');
});

//******************** Mouvement

Route::group(['prefix' => "mouv"], function () {
    //Route::get('/','MouvementController@indexMouvement');
    Route::get('/create','MouvementController@creatMouvement');
    Route::post('/','MouvementController@storeMouvement');
    Route::put('/{id}','MouvementController@updateMouvement');
    Route::get('/{id}/edit','MouvementController@editMouvement');
    Route::delete('/{id}','MouvementController@destroyMouvement');
});

//******************** Sous_cat

Route::group(['prefix' => "scat"], function () {
    //Route::get('/','Sous_catController@indexSous_cat');
    Route::get('/create','Sous_catController@creatSous_cat');
    Route::post('/','Sous_catController@storeSous_cat');
    Route::put('/{id}','Sous_catController@updateSous_cat');
    Route::get('/{id}/edit','Sous_catController@editSous_cat');
    Route::delete('/{id}','Sous_catController@destroySous_cat');
});

//******************** type_affichage

Route::group(['prefix' => "type_aff"], function () {
    //Route::get('/','Type_affichageController@indexType_aff');
    Route::get('/create','Type_affichageController@creatType_aff');
    Route::post('/','Type_affichageController@storeType_aff');
    Route::put('/{id}','Type_affichageController@updateType_aff');
    Route::get('/{id}/edit','Type_affichageController@editType_aff');
    Route::delete('/{id}','Type_affichageController@destroyType_aff');
});


//******************** Type SN

Route::group(['prefix' => "typesn"], function () {
    //Route::get('/','TypesnController@indexTypesn');
    Route::get('/create','TypesnController@creatTypesn');
    Route::post('/','TypesnController@storeTypesn');
    Route::put('/{id}','TypesnController@updateTypesn');
    Route::get('/{id}/edit','TypesnController@editTypesn');
    Route::delete('/{id}','TypesnController@destroyTypesn');
});


//******************** Univer

Route::group(['prefix' => "univer"], function () {
    //Route::get('/','UniverController@indexUniver');
    Route::get('/create','UniverController@creatUniver');
    Route::post('/','UniverController@storeUniver');
    Route::put('/{id}','UniverController@updateUniver');
    Route::get('/{id}/edit','UniverController@editUniver');
    Route::delete('/{id}','UniverController@destroyUniver');
});

//******************** Product

Route::group(['prefix' => "product"], function () {
    Route::get('/','ProduitController@indexproduit');
    Route::get('/list','ProduitController@indexproduit2');
    Route::get('/create','ProduitController@creatproduit');
    Route::post('/','ProduitController@storeproduit');
    Route::post('/{id}','ProduitController@updatproduit');
    Route::get('/{id}/edit','ProduitController@editproduit3');
    Route::delete('/{id}','ProduitController@destroyproduit');
});

//********************Remis
Route::group(['prefix' => "remis_produite"], function () 
{
    Route::get('/create/{id}','Produit_remiController@create_remise');
    Route::post('/','Produit_remiController@store_remise');
});

// cart counter Ajax
Route::get('/cartcounter','ProduitController@cartcount');

// Get Product Commander Ajax 
Route::get('/getproduits','ProduitController@getproduits');

//**********************produit detail
Route::get('produit/{id}/edit_details','ProduitController@editproduit2');


//******************** Image Product

Route::group(['prefix' => "img_produit"], function () { 
    Route::get('/','Image_prController@indexproduit');
    Route::get('/create/{id}','Image_prController@creatimage');
    Route::post('/','Image_prController@storeimage');
});


//******************** client
Route::group(['prefix' => "profile"], function () {
    Route::get('/','UserController@indexUser');
    Route::get('/create','UserController@creatUser');
    Route::post('/','UserController@storeUser');
    Route::put('/update','UserController@updateUser');
    Route::get('/edit','UserController@editUser');
    Route::get('/login','UserController@loginUser');
    Route::get('/destorySession','UserController@destorySession');
    Route::post('/login','UserController@loginValideUser');
});

//******************** Admin SUP

Route::group(['prefix' => "admin"], function () {
    Route::get('/list','Sup_adminController@indexAdmin');
    Route::get('/listclient','Sup_adminController@ListClient');
    Route::get('/create','Sup_adminController@creatAdmin');
    Route::get('/login','Sup_adminController@loginAdmin');
    Route::post('/login','Sup_adminController@loginAdminTest');
    Route::post('/','Sup_adminController@storeAdmin');
    Route::put('/{id}','Sup_adminController@updateAdmin');
    Route::get('/{id}/edit','Sup_adminController@editAdmin');
    Route::get('/{id}/delete','Sup_adminController@deleteAdmin');
    Route::get('/deconnexion','Sup_adminController@DeconnexionAdmin');
});

//********************Compte

Route::group(['prefix' => "compte"], function () {
    //Route::get('/','compteController@indexcompte');
    Route::get('/create','CompteController@creatcompte');
    Route::post('/','CompteController@storecompte');
    Route::put('/{id}','CompteController@updatecompte');
    Route::get('/{id}/edit','CompteController@editcompte');
    Route::delete('/{id}','CompteController@destroycompte');
});

Route::group(['prefix' => "cmd"], function () {
    //Route::get('/','compteController@indexcompte');
    // Route::get('/create','CmdController@creatcompte');
    Route::post('/','CmdController@storecmd');
    // Route::put('/{id}','CmdController@updatecompte');
    // Route::get('/{id}/edit','CmdController@editcompte');
    // Route::delete('/{id}','CmdController@destroycompte');
});

Route::group(['prefix' => "shop"], function () {
    //Route::get('/','Lign_cmdController@indexcompte');
    Route::get('/create','Lign_cmdController@createshop');
    Route::get('/create/val','Lign_cmdController@validshop');
    Route::post('/mo','Lign_cmdController@editshopupdate');
    Route::put('/','Lign_cmdController@editshop');
    // Route::get('/{id}/edit','Lign_cmdController@editshop'); 
    Route::get('/delete/{id}/{cmd_id}','Lign_cmdController@destroyshop');
    Route::post('/validerTous','Lign_cmdController@validerTous');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => "lignecomande"], function () {
    Route::post('/ligneplus','Lign_cmdController@lignecmd_fplus');

});
