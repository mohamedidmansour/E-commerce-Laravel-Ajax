@extends("layout1.master")

@section("content")


	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url({{asset('assets/client/images/dica7.jpg')}});">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Collection 2019
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW Watch
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="{{url('pro_sans_categorie/menmontre/edit')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url({{asset('assets/client/images/dica6.jpg')}});">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Women New-Season
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Watch
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="{{url('pro_sans_categorie/womenmontre/edit')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url({{asset('assets/client/images/dica5.jpg')}});">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
										Women Collection 2019
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New jewelry
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="{{url('pro_sans_categorie/womenacces/edit')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{asset('assets/client/images/dica3.jpg')}}" alt="IMG-BANNER">
						<a href="{{url('pro_sans_categorie/women/edit')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Women
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2019
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{asset('assets/client/images/dica1.jpg')}}" alt="IMG-BANNER">

						<a href="{{url('pro_sans_categorie/men/edit')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Men
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2019
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{asset('assets/client/images/dica8.jpg')}}" alt="IMG-BANNER">

						<a href="{{url('pro_sans_categorie/accessoire/edit')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

								<span class="block1-info stext-102 trans-04">
									New Trend
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>
 
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bijoux">
						BIJOUX
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".montre">
						MONTRE
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						BRACELETS
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".2">
						BAGUES
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".3">
						BOUCLES D'OREILLES
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<form action="{{url('recherch')}}" method="post">
					{{csrf_field()}}
					<div class="dis-none panel-search w-full p-t-10 p-b-15">
						<div class="bor8 dis-flex p-l-15">
							<button type="submit" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>

							<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="sear" placeholder="Search">
						</div>	
					</div>
				</form>
				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Univer
							</div>

							<ul>
								@foreach($univer as $sona)
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".{{$sona->libelle}}">
											{{$sona->libelle}}
										</button>
									</div>
								</li>
								@endforeach
							</ul>
							<div class="mtext-102 cl2 p-b-15">
								Forma Boitier
							</div>

							<ul>
								@foreach($frma as $sona)
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".{{$sona->libelle}}">
											{{$sona->libelle}}
										</button>
									</div>
								</li>
								@endforeach
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter="*">
											All
										</button>
									</div>
								</li>
								<!-- @foreach($produit as $messi)
								<li class="p-b-6">
									@if($messi->prix_vent >0 && $messi->prix_vent <= 100)
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".{{$messi->prix_vent}}">
											$00.00 - $100.00
										</button>
									</div>
										
									@endif
								</li>
								@endforeach -->
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".65">
											$00.00 - $100.00
										</button>
									</div>
								</li>

								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".150">
											$101.00 - $200.00
										</button>
									</div>
								</li>
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".300">
											$201.00 - $300.00
										</button>
									</div>
								</li>
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".400">
											$301.00 - $400.00
										</button>
									</div>
								</li>
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".2000">
											$400.00+
										</button>
									</div>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								@foreach($color as $sona)
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<span class="fs-15 lh-12 m-r-6" style="color: {{$sona->code_color}};">
										<i class="zmdi zmdi-circle"></i>
										</span>
										<button class="filter-link stext-106 trans-04" data-filter=".{{$sona->libelle}}">
											{{$sona->libelle}}
										</button>
									</div>
								</li>
								@endforeach
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Marque
							</div>

							<ul>
								@foreach($marque as $sona)
								<li class="p-b-6">
									<div class="flex-w flex-l-m filter-tope-group m-tb-1">
										<button class="filter-link stext-106 trans-04" data-filter=".{{$sona->libelle}}">
											{{$sona->libelle}}
										</button>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
            @foreach($produit as $so)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$so->type}} {{$so->prix_vent}} {{$so->color_metal->libelle}} {{$so->marque->libelle}} {{$so->univer->libelle}} {{$so->sous_cat_id}}">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{asset('storage/'.$so->url_p)}}" alt="IMG-PRODUCT">
							<form action="{{url('produit/'.$so->id)}}" method="post">
                                  {{csrf_field()}}
									<a href="{{url('produit/'.$so->id.'/edit')}}"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
										Quick View
									</a>
							</form>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$so->libelle}}
								</a>

								<span class="stext-105 cl3">
									${{$so->prix_vent}}
								</span>
							</div>
							<div class="block2-txt-child2 flex-r p-t-3">
                                  {{csrf_field()}}
                                  @if(\Illuminate\Support\Facades\Session::has("id"))
								<input type="submit" class="inputval" value="       " id="{{$so->id}}" onclick="addproduit(this.id)"/>
								@endif
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{asset('assets/client/images/icons/icon-heart-01.png')}}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('assets/client/images/icons/icon-heart-02.png')}}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
            @endforeach
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="{{asset('pro_sans')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		</div>
	</section>
<style type="text/css">
	.inputval{
			width: 60px;
			background-image: url('{{asset("assets/client/images/icons/pa3.png")}}');
			background-repeat: no-repeat;
			background-color: white;
		}
</style>
<script>

		
    // $('.inputval').on('click', function (e) {
    //     e.preventDefault();
    // });

    // $('.inputval').each(function () {
    //     var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
    //     $(this).on('click', function () {
    //         swal(nameProduct, "is added to wishlist !", "success");

    //         $(this).addClass('inputval');
    //         $(this).off('click');
    //     });
    // });
</script>
	
@endsection
