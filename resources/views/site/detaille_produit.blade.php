@extends("layout1.master")

@section("content")

<form action="{{url('shop/mo')}}" method="post">
    {{csrf_field()}}
	<!-- Product Detail -->
	<input type="hidden" name="produit_id" value="{{$product->id}}">
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="{{asset('storage/'.$product->url_p)}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{asset('storage/'.$product->url_p)}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('storage/'.$product->url_p)}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								@foreach($imge as $sor)
								<div class="item-slick3" data-thumb="{{asset('storage/'.$sor->url)}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{asset('storage/'.$sor->url)}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('storage/'.$sor->url)}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								@endforeach 
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{$product->libelle}}
						</h4>

						<span class="mtext-106 cl2">
							${{$product->prix_vent}}
						</span>

						<p class="stext-102 cl3 p-t-23">
                        {{$product->description}}.
						</p>
						
						<!--  -->
						<div class="p-t-33">

                            <div class="flex-w flex-r-m p-b-10" style="margin-right: 200px;">
								<div class="size-203 flex-c-m respon6">
									Marque : 
								</div>
								<div class="size-203 flex-c-m respon6">
									{{$product->marque->libelle}}
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10" style="margin-right: 200px;">
								<div class="size-203 flex-c-m respon6">
									Size :
								</div>
								<div class="size-203 flex-c-m respon6">
									{{$product->taille}}
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10" style="margin-right: 200px;">
								<div class="size-203 flex-c-m respon6">
									Color : 
								</div>
								<div class="size-203 flex-c-m respon6">
									{{$product->color_metal->libelle}}
								</div>
								<div class="size-203 flex-c-m respon6">
									<input type="color" value="{{$product->color_metal->code_color}}">
								</div>
							</div>
							@if(\Illuminate\Support\Facades\Session::has("id"))
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

									<input class="mtext-104 cl3 txt-center num-product" type="number" name="num_qte" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

									<button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>	
							@endif
						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
								{{$product->description}}.
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Type
											</span>

											<span class="stext-102 cl6 size-206">
                                                {{$product->type}}
											</span>
										</li>
									<?php
										if($product->type=="montre")
										{?>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
                                                Forma Boitier
											</span>

											<span class="stext-102 cl6 size-206">
                                                {{$product->forma_boitier->libelle}}
											</span>
										</li>

                                        <li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
                                                Type Affichage
											</span>

											<span class="stext-102 cl6 size-206">
                                                {{$product->type_affichage->libelle}}
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
                                                Mouvement
											</span>
											
											<span class="stext-102 cl6 size-206">
											{{$product->mouvement->libelle}}
											</span>
										</li>

                                        <li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
                                                Type SN
											</span>

											<span class="stext-102 cl6 size-206">
                                                {{$product->typesn->libelle}}
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
                                                Univer
											</span>

											<span class="stext-102 cl6 size-206">
												{{$product->univer->libelle}}
											</span>
										</li>
										<?php 
									}?>
									<?php
									if($product->type=="bijoux")
										{?>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Categorie
											</span>
											<span class="stext-102 cl6 size-206">
                                                {{$product->sous_cat_id}}
											</span>
										</li>
										<?php 
									}?>
									</ul>
								</div>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->
										<div class="flex-w flex-t p-b-68">
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="{{asset('assets/client/images/avatar-01.jpg')}}" alt="AVATAR">
											</div>

											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														Ariana Grande
													</span>

													<span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
												</div>

												<p class="stext-102 cl6">
													Quod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
												</p>
											</div>
										</div>
										
										<!-- Add review -->
										<form class="w-full">
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span> 
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: {{$product->type}}-{{$product->id}}
			</span>

			<span class="stext-107 cl6 p-lr-25">
				Tage: {{$product->type}}, {{$product->univer->libelle}}
			</span>
		</div>
	</section>
</form>
@endsection