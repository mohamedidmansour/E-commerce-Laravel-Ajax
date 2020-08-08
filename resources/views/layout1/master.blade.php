<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coza Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{{ csrf_token() }}}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/client/images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/client/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/client/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/vendor/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/client/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    shipping for every order $30 not <del>$100</del>
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Help & FAQs
                    </a>
                    @if(\Illuminate\Support\Facades\Session::has("id"))
                    <a href="{{url("/profile/edit")}}" class="flex-c-m trans-04 p-lr-25">
                        Mon Compte
                    </a>
                        <a href="{{url("/profile/destorySession")}}" class="flex-c-m trans-04 p-lr-25">
                            Déconnexion
                        </a>
                    @else
                        <a href="#" class="flex-c-m trans-04 p-lr-25" data-toggle="modal"
                           data-target="#exampleModalCenter">
                            INSCRIPTION
                        </a>
                        <a href="{{url("/profile/login")}}" class="flex-c-m trans-04 p-lr-25"
                           data-target="#">
                            Login
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" style="margin-top: 140px !important;color: #000;" id="exampleModalCenter"
                             tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Création Compte</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data" action="{{url('profile')}}" class="form-horizontal" role="form">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Nom :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" type="text" name="nom">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Prenom :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" type="text" name="prenom"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Email :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="email" name="email"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Password :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Civilite :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="text" name="civilite">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Adresse :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="text" name="adresse">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Date Naissance :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="date" name="dateNaissance">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Tel :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="text" name="tel"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Ville :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="text" name="ville">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Code Postal :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="text" name="codePostale"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Pays :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="text" name="pays">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Photo :</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" required type="file" name="photo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <input class="form-control btn-success btn-block" type="submit"
                                                           value="Enregistrer">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <img src="{{asset('assets/client/images/icons/logo-01.png')}}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="{{asset('all_pr')}}">Home</a>
                            <!-- <ul class="sub-menu"> -->
                                <!-- <li><a href="{{asset('assets/client/index.html')}}">Homepage 1</a></li>
                                <li><a href="{{asset('assets/client/home-02.html')}}">Homepage 2</a></li>
                                <li><a href="{{asset('assets/client/home-03.html')}}">Homepage 3</a></li> -->
                            <!-- </ul> -->
                        </li>
                        <!-- <li class="active-menu"> -->
                        <li>
                            <a href="{{asset('pro_sans')}}">Shop</a>
                        </li>

                        <li class="label1" data-label1="hot">
                            <a href="{{asset('shop/create')}}">Orders</a>
                        </li>

                        <li>
                            <a href="{{asset('shop/create/val')}}">Orders Valide</a>
                        </li>

                        <li>
                            <a href="{{asset('compte/create')}}">Compte</a>
                        </li>

                        <li>
                            <a href="{{asset('assets/client/contact.html')}}">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div> -->

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                        id="cartNbr" data-notify="0">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                       data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{asset('assets/client/index.html')}}"><img
                        src="{{asset('assets/client/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                 data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
               data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    shipping for every order $30 not <del>$100</del>
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        USD
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="{{asset('assets/client/index.html')}}">Home</a>
                <ul class="sub-menu-m">
                    <!-- <li><a href="{{asset('assets/client/index.html')}}">Homepage 1</a></li>
                    <li><a href="{{asset('assets/client/home-02.html')}}">Homepage 2</a></li>
                    <li><a href="{{asset('assets/client/home-03.html')}}">Homepage 3</a></li> -->
                </ul>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="{{asset('assets/client/product.html')}}">Shop</a>
            </li>

            <li>
                <a href="{{asset('assets/client/shoping-cart.html')}}" class="label1 rs1" data-label1="hot">Features</a>
            </li>

            <li>
                <a href="{{asset('assets/client/about.html')}}">About</a>
            </li>

            <li>
                <a href="{{asset('assets/client/contact.html')}}">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{asset('assets/client/images/icons/icon-close2.png')}}" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>

<!-- Cart -->
@if(\Illuminate\Support\Facades\Session::has("id"))
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full" id="listArticle">


        </div>
    </div>
</div>
@endif

@yield("content")
<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Categories
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Women
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Men
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shoes
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Watches
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Returns
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shipping
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    GET IN TOUCH
                </h4>

                <p class="stext-107 cl7 size-201">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on
                    (+1) 96 716 6879
                </p>

                <div class="p-t-27">
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                               placeholder="email@example.com">
                        <div class="focus-input1 trans-04"></div>
                    </div>

                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-t-40">
            <div class="flex-c-m flex-w p-b-18">
                <a href="#" class="m-all-1">
                    <img src="{{asset('assets/client/images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="{{asset('assets/client/images/icons/icon-pay-02.png')}}" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="{{asset('assets/client/images/icons/icon-pay-03.png')}}" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="{{asset('assets/client/images/icons/icon-pay-04.png')}}" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="{{asset('assets/client/images/icons/icon-pay-05.png')}}" alt="ICON-PAY">
                </a>
            </div>

            <p class="stext-107 cl6 txt-center">

            </p>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>

<!-- Modal1 -->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>


</div>

<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('assets/client/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/client/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/client/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/parallax100/parallax100.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/sweetalert/sweetalert.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/client/js/main.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){

        getcouncart();
        getproduits();
    })

    function getcouncart() {
        let dta = 0;
       
        $.ajax({
            url: '/cartcounter',
            type : 'GET',
            async: false,
            success: function(data) {
               dta = data;
            }
        })

        $('#cartNbr').attr("data-notify",dta);
    }
    function getproduits() {
        let data ;
        $.ajax({
            url: '/getproduits',
            type : 'GET',
            async: false,
            success: function(data2) {
               console.log(data2);
               data = data2
            }
        })
        let lis = "";
        var total=0;
        var limite=1;
        data.forEach(function(el) {
            total+=el.qte*el.prix_vent;
        })
        data.forEach(function(el) {
            if(limite <= 3){
                lis += ` <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="http://localhost:8000/storage/`+el.url_p+`" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                `+el.libelle+`
                            </a>

                            <span class="header-cart-item-info">
                                    `+el.qte+` x $`+el.prix_vent+`
                                </span>
                        </div>
                    </li>`;
            }
            limite++;
            
        })
        lis+=`
        </ul>
        <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Total: $`+total+`
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="{{asset('shop/create')}}"
                       class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="{{asset('assets/client/shoping-cart.html')}}"
                       class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>`

        $('#listArticle').append(lis);
    }   
    function addproduit(idspro) {
        swal("is added to wishlist !", "success");
         $.ajax({
            url: '/cmd',
            type : 'POST',
            headers: {'X-CSRF-Token' : $('meta[name=_token]').attr('content')},
            data : {
                produit_id : idspro
            },
            success: function() {
               
               getcouncart();
            }
        })
    }
</script>

<script>
    $('.js-addwish-b2').on('click', function (e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function () {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

</script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function () {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function () {
            ps.update();
        })
    });
</script>

</body>
</html>