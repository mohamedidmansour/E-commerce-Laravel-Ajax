@extends("layout1.master")

@section("content")

<!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Shoping Cart
            </span>
        </div>
    </div>
        

    <!-- Shoping Cart -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Produit</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Prix</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                    <th class="column-6"></th>
                                </tr>
                                @foreach($listpr as $so)
                                <form action="{{url('shop')}}" method="post">
                                        <input type="hidden" name="_method" value="PUT">
                                         {{csrf_field()}}
                                <tr class="table_row">
                                    <input type="hidden" name="hidden_pr" value="{{$so->produit_id}}">
                                    <input type="hidden" name="hidden_cmd" value="{{$so->cmd_id}}">
                                    <input type="hidden" name="hidden_tof" value="{{$so->id}}">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <img src="{{asset('storage/'.$so->url_p)}}" alt="IMG">
                                        </div>
                                    </td>
                                    <td class="column-2">{{$so->libelle}}</td>
                                    <td class="column-3">$<span class="class_{{$so->produit_id}}">{{$so->prix_vent}}</span> </td>
                                    <td class="column-4">
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div onclick="fmoins('class_{{$so->produit_id}}');"
                                                 class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product class_{{$so->produit_id}}"
                                                   type="number"
                                                   name="numproduct1" disabled min="1" value="{{$so->qte}}">

                                            <div onclick="fplus('class_{{$so->produit_id}}');"
                                                 class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m"
                                            >
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="column-5 class_{{$so->produit_id}}">
                                            $ <span class="class_Totale_Montant"> {{$so->prix_vent*$so->qte}} </span></td>
                                    <td class="column-6">
                                        <a href="{{url('shop/delete/'.$so->id.'/'.$so->cmd_id)}}" style="border: none;position: relative;right: 30px;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </td>


                                   <!--  <td class="column-6">
                                        <button type="submit" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" style="position: relative;left: 35%;">Valider</button>
                                    </td> -->
                                </tr>
                            </form>
                                @endforeach
                            </table>
                        </div>
                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <!-- <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                Ajouter Cart
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <form action="{{url('shop/validerTous')}}" method="post">
                                {{csrf_field()}}
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Cart Totals
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Subtotal:
                                </span>
                            </div>

                            <div class="size-209">
                                <span id="Totale_id_liv" class="mtext-110 cl2">
                                    $79.65
                                </span>
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208 w-full-ssm">
                                <span class="stext-110 cl2">
                                    Shipping:
                                </span>
                            </div>

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                    There are no shipping methods available. Please double check your address, or contact us if you need any help.
                                </p>
                                
                                <div class="p-t-15">
                                    <span class="stext-112 cl8">
                                        Calculate Shipping
                                    </span>

                                    <!-- <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                        <select class="js-select2" name="time">
                                                @foreach($cmpts as $soyo)
                                                <option value="{{$soyo->id}}">{{$soyo->libelle}}</option>
                                                @endforeach
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div> -->
                                    <div class="select">
                                      <select name="compt" id="slct">
                                        <option selected disabled>Choose Cart</option>
                                            @foreach($cmpts as $soyo)
                                                <option value="{{$soyo->id}}">{{$soyo->libelle}}</option>
                                            @endforeach
                                      </select>
                                    </div>
                                    <br>
                                    <br>
                                    
                                    <div class="flex-w">
                                        <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                                            <a href="{{url('compte/create')}}" class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">ADD AUTHER CART</a>
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Total:
                                </span>
                            </div>

                            <div class="size-209 p-t-1">
                                <span id="totale_with_livraison" class="mtext-110 cl2">
                                    $79.65
                                </span>
                            </div>
                        </div>
                        <!-- 
                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Proceed to Checkout
                        </button> -->
                        <input type="submit" value="Ajouter Cart" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                    </div>

                    </form>
                </div>
            </div>
        </div>
        <style type="text/css">
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #222222;
  background-image: none;
}

select::-ms-expand {
  display: none;
}

.select {
  position: relative;
  display: flex;
  height: 3em;
  line-height: 3;
  background: #222222;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}

.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #f7f7f7;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}

.select:hover::after {
  color: #f39c12;
}
</style>
   <script>
        function fplus(className) {
            listeProduct =  document.getElementsByClassName(className);
            listeProduct[2].innerHTML = "$ <span class=\" class_Totale_Montant\">"+ (parseInt(listeProduct[0].innerText) * (parseInt(listeProduct[1].value)+1))+ " </span>";
            class_Totale_Montant_update();
        }

        function fmoins(className) {
            listeProduct =  document.getElementsByClassName(className);
            if(parseInt(listeProduct[1].value)-1 > 0 ){
                listeProduct[2].innerHTML = "$ <span class=\" class_Totale_Montant\">"+ (parseInt(listeProduct[0].innerText) * (parseInt(listeProduct[1].value)-1))+ " </span>";
            }else {
                listeProduct[1].value = 1;
            }
            class_Totale_Montant_update();
        }
        function  class_Totale_Montant_update() {
            listePrix =  document.getElementsByClassName('class_Totale_Montant');
            var somme = 0;
            for (var i=0;i<listePrix.length;i++){
                somme+=parseInt(listePrix[i].innerText);
            }
            document.getElementById('Totale_id_liv').innerText = "$" + somme;
            document.getElementById('totale_with_livraison').innerText = "$" + (somme + 30);
            //alert(somme);
        }
        class_Totale_Montant_update();
    </script>
@endsection