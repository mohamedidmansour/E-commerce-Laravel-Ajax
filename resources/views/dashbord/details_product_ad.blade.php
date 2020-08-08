@extends("layout2.master")

@section("content")

<!-- Single pro tab start-->
<form action="{{url('produit/'.$so->id)}}" method="post">
<input type="hidden" name="_method" value="PUT">
{{csrf_field()}}
<div class="single-product-tab-area mg-t-15 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div id="myTabContent1" class="tab-content">
                            <div class="product-tab-list tab-pane fade active in" id="single-tab1">
                                <img src="{{asset('storage/'.$so->url_p)}}" alt="" />
                            </div>
                            @foreach($imgs as $sor)
                            <div class="product-tab-list tab-pane fade" id="{{$sor->id}}">
                                <img src="{{asset('storage/'.$sor->url)}}" alt="" />
                            </div>
                            @endforeach 
                        </div>
                        <ul id="single-product-tab">
                            <li class="active">
                                <a href="#single-tab1"><img src="{{asset('storage/'.$so->url_p)}}" alt="" /></a>
                            </li>
                            @foreach($imgs as $sor)
                            <li>
                                <a href="#{{$sor->id}}"><img src="{{asset('storage/'.$sor->url)}}" alt="" /></a>
                            </li>
                            @endforeach 
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="single-product-details res-pro-tb">
                            <h1>{{$so->libelle}}</h1>
                            <span class="single-pro-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                            <div class="single-pro-price">
                                <span class="single-regular">{{$so->prix_vent-(($rrr->taux/100)*$so->prix_vent)}} DH</span><span class="single-old"><del>{{$so->prix_vent}} DH</del></span>
                            </div>
                            <div class="single-pro-size">
                                <h6>Taille</h6>
                                <span>{{$so->taille}}</span>
                            </div>
                            <div class="color-quality-pro">
                                <div class="color-quality-details">
                                    <h5>Color</h5>
                                    <!-- <span class="{{$so->color_metal_id}}"></span> -->
                                    <input type="color" value="{{$so->color_metal->code_color}}" disabled style="border: none;"/>
                                    
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                                <div class="single-social-area">
                                    <h3>share this on</h3>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-feed"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="single-pro-cn">
                                <h3>Description</h3>
                                <p>{{$so->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab End-->
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="myTab" class="tab-review-design">
                            <li class="active"><a href="#description">Autre Information</a></li>
                            <li><a href="#reviews"><span><i class="fa fa-star"></i><i class="fa fa-star"></i></span> reviews (1) <span><i class="fa fa-star"></i><i class="fa fa-star"></i></span></a></li>
                            <li><a href="#INFORMATION">INFORMATION</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="product-tab-list product-details-ect tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                <div class="text-center custom-login">
                    <h3>Type produit est {{$so->type}}</h3>
                    <p>Admin template with very clean and aesthetic style prepared for your next app. </p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="#" id="loginForm">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Marque</label>
                                    <input type="text" class="form-control" disabled value="{{$so->marque->libelle}}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Univer</label>
                                    <input type="text" class="form-control" disabled value="{{$so->univer->libelle}}"> 
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Seuil</label>
                                    <input class="form-control" disabled value="{{$so->seuil}}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Qte Stock</label>
                                    <input class="form-control" disabled value="{{$so->qte_stock}}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Prix D'achat</label>
                                    <input class="form-control" disabled value="{{$so->prix_achat}}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="review-content-section">
                                                <div class="card-block">
                                                    <div class="text-muted f-w-400">
                                                        <p>No reviews yet.</p>
                                                    </div>
                                                    <div class="m-t-10">
                                                        <div class="txt-primary f-18 f-w-600">
                                                            <p>Your Rating</p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                                beatae vitae dicta sunt explicabo.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labo nisi ut aliquip ex
                                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut labore et dolore magna aliqua. Ut enim ad , quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></form>
@endsection
