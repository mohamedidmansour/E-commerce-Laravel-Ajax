@extends("layout2.master")

@section("content")

    <div class="single-product-tab-area mg-tb-15">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="fa fa-pencil"
                                                                             aria-hidden="true"></i> Produit Info</a>
                                </li>
                                <li><a href="#reviews"></a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form action="{{url('product/'.$produit->id)}}" method="post"
                                          enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Nom Produit" value="{{$produit->libelle}}"
                                                               name="libelle">
                                                        <input type="hidden" class="form-control"
                                                               value="{{$produit->id}}"
                                                               name="id">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Prix d'achat"
                                                               value="{{$produit->prix_achat}}" name="prix_achat">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Prix de vente"
                                                               value="{{$produit->prix_vent}}" name="prix_vent">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-qrcode"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Seuil"
                                                               value="{{$produit->seuil}}" name="seuil">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-qrcode"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Quantity"
                                                               value="{{$produit->qte_stock}}" name="qte">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-ticket"
                                                                                           aria-hidden="true"></i></span>
                                                        <!-- <input type="text" class="form-control" placeholder="Product Description"> -->
                                                        <textarea class="form-control" placeholder="Description"

                                                                  name="desc">{{$produit->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Taille"
                                                               value="{{$produit->taille}}" name="taille">
                                                    </div>
                                                    <select name="marque"
                                                            class="form-control pro-edt-select form-control-primary"
                                                            style="margin-top: 15px;">
                                                        <option value="">Select Marque</option>
                                                        @foreach($marque as $so)
                                                            @if($so->id == $produit->marque_id)
                                                                <option selected="selected"
                                                                        value="{{$so->id}}">{{$so->libelle}}</option>
                                                            @else
                                                                <option value="{{$so->id}}">{{$so->libelle}}</option>
                                                            @endif

                                                        @endforeach
                                                    </select>
                                                    <select name="univer"
                                                            class="form-control pro-edt-select form-control-primary"
                                                            style="margin-top: 15px;">
                                                        <option value="">Select Univer</option>
                                                        @foreach($univer as $so)
                                                            @if($so->id == $produit->univer_id)
                                                                <option selected="selected"
                                                                        value="{{$so->id}}">{{$so->libelle}}</option>
                                                            @else
                                                                <option value="{{$so->id}}">{{$so->libelle}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <select name="remi_id"
                                                            class="form-control pro-edt-select form-control-primary"
                                                            style="margin-top: 15px;">
                                                        <option value="">Select Remis</option>
                                                        @foreach($remi as $so)
                                                            @if($so->id == $produit->remi_id)
                                                                <option selected="selected"
                                                                        value="{{$so->id}}">{{$so->taux}}</option>
                                                            @else
                                                                <option value="{{$so->id}}">{{$so->taux}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <select name="color"
                                                            class="form-control pro-edt-select form-control-primary"
                                                            style="margin-top: 15px;">
                                                        <option value="">Select Color</option>
                                                        @foreach($color as $so)
                                                            @if($so->id == $produit->color_metal_id)
                                                                <option selected="selected"
                                                                        value="{{$so->id}}">{{$so->libelle}}</option>
                                                            @else
                                                                <option value="{{$so->id}}">{{$so->libelle}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-pro-review-area">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="review-tab-pro-inner">
                                                            <ul id="myTab3" class="tab-review-design">
                                                                <li><a href="#reviews100"><i
                                                                                class="fa fa-file-image-o"
                                                                                aria-hidden="true"></i> image</a></li>
                                                            </ul>
                                                            <div id="myTabContent"
                                                                 class="tab-content custom-product-edit">
                                                                <div class="product-tab-list tab-pane fade active in"
                                                                     id="description1">
                                                                    @if($produit->type == "bijoux")
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <select name="scat"
                                                                                        class="form-control pro-edt-select form-control-primary"
                                                                                        style="margin-top: 15px;">
                                                                                    <option selected="selected"
                                                                                            value="">
                                                                                        Select
                                                                                        Categorie de
                                                                                        Bijoux
                                                                                    </option>
                                                                                    @foreach($scat as $so)
                                                                                        @if($produit->sous_cat_id == $so->id)
                                                                                            <option selected="selected"
                                                                                                    value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                        @else
                                                                                            <option value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <div class="row">

                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="review-content-section">
                                                                                    <select name="typesn"
                                                                                            class="form-control pro-edt-select form-control-primary"
                                                                                            style="margin-top: 15px;">
                                                                                        <option value="">Select TypeSN
                                                                                        </option>
                                                                                        @foreach($typesn as $so)
                                                                                            @if($produit->typesn_id == $so->id)
                                                                                                <option value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                            @else
                                                                                                <option selected="selected"
                                                                                                        value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                    <select name="move"
                                                                                            class="form-control pro-edt-select form-control-primary"
                                                                                            style="margin-top: 15px;">
                                                                                        <option value="">Select
                                                                                            Mouvement
                                                                                        </option>
                                                                                        @foreach($mouv as $so)
                                                                                            @if($produit->mouvement_id == $so->id)
                                                                                                <option selected="selected"
                                                                                                        value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                            @else
                                                                                                <option value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="review-content-section">
                                                                                    <select name="type_affich"
                                                                                            class="form-control pro-edt-select form-control-primary"
                                                                                            style="margin-top: 15px;">
                                                                                        <option value="">Select Type
                                                                                            d'affichage
                                                                                        </option>
                                                                                        @foreach($type_aff as $so)
                                                                                            @if($produit->type_affichage_id == $so->id)
                                                                                                <option selected="selected"
                                                                                                        value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                            @else
                                                                                                <option value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                    <select name="forma_boi"
                                                                                            class="form-control pro-edt-select form-control-primary"
                                                                                            style="margin-top: 15px;">
                                                                                        <option value="">Select Forma
                                                                                            Boitier
                                                                                        </option>
                                                                                        @foreach($forma as $so)
                                                                                            @if($produit->forma_boitier_id == $so->id)
                                                                                                <option selected="selected"
                                                                                                        value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                            @else
                                                                                                <option value="{{$so->id}}">{{$so->libelle}}</option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>


                                                                <div class="product-tab-list tab-pane fade"
                                                                     id="reviews100">
                                                                    <!-- submit *************************** -->
                                                                    <div class="row">
                                                                        <div class="dual-list-box-area mg-tb-15">
                                                                            <div class="container-fluid">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="sparkline10-list shadow-reset">
                                                                                            <div class="sparkline10-hd">
                                                                                                <div class="main-sparkline10-hd">
                                                                                                    <h1>Images
                                                                                                        Cropper</h1>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="sparkline10-graph">
                                                                                                <div class="basic-login-form-ad">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="dual-list-box-inner">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                                                                                        <div class="image-crop">
                                                                                                                            <img src=""
                                                                                                                                 alt="">
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                                                                                        <div class="preview-img-pro-ad">
                                                                                                                            <!-- <h4>Preview image</h4>
                                                                                                                            <div class="img-preview img-preview-custom"></div> -->
                                                                                                                            <h4 class="comon-method">
                                                                                                                                Comon
                                                                                                                                method</h4>
                                                                                                                            <p>
                                                                                                                                You
                                                                                                                                can
                                                                                                                                upload
                                                                                                                                new
                                                                                                                                image
                                                                                                                                to
                                                                                                                                crop.
                                                                                                                            </p>
                                                                                                                            <div class="btn-group images-cropper-pro">
                                                                                                                                <!-- <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                                                                                                                        <input type="file" accept="image/*" name="photo" id="inputImage" class="hide"> Upload new image
                                                                                                                                </label> -->
                                                                                                                                <input type="file"
                                                                                                                                       accept="image/*"
                                                                                                                                       name="photo">
                                                                                                                            </div>

                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- submit *************************** -->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                 style="margin-top: 15px;">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit"
                                                            class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                    </button>
                                                    <button type="reset"
                                                            class="btn btn-warning waves-effect waves-light">Discard
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        /* var champ = document.getElementById('champ');
         champ.value = "montre";

         function btn1Choisir() {
             var champ = document.getElementById('champ');
             champ.value = "montre";
         }

         function btn2Choisir() {
             var champ = document.getElementById('champ');
             champ.value = "bijoux";
         }*/
    </script>
@endsection

