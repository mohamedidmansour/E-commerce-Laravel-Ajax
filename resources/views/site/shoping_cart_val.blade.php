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
                <div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Produit</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Prix</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                    <th class="column-6">Date Validation</th>
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
                                    <td class="column-3">$ {{$so->prix_vent}}</td>
                                    <td class="column-4">
                                        <!-- <div class="wrap-num-product flex-w m-l-auto m-r-0"> -->
                                            <!-- <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" onclick="fplus();">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div> -->

                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="numproduct1" min="1" value="{{$so->qte}}" disabled style="position: relative;left: 90px;">

                                            <!-- <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" onclick="fmoin();">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div> -->
                                        <!-- </div> -->
                                    </td>
                                    <td class="column-5">$ {{$so->prix_vent*$so->qte}}</td>
                                    <td class="column-6">{{$so->updated_at}}</td>
                                </tr>
                            </form>
                                @endforeach
                            </table>
                        </div>

                        <!-- <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                Ajouter Cart
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
@endsection