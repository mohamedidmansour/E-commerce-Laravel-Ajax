@extends("layout2.master")

@section("content")
<form action="{{url('img_produit')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start--> 
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li ><a href="#reviews100"><i class="fa fa-file-image-o" aria-hidden="true"></i> Images</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade" id="reviews100">
                                <!-- submit *************************** -->
                                <div class="row">
                                    <div class="dual-list-box-area mg-tb-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline10-list shadow-reset">
                                                        <div class="sparkline10-hd">
                                                            <div class="main-sparkline10-hd">
                                                                <h1>Images Cropper</h1>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" value="{{$so->id}}" name="produit_id">
                                                        <div class="sparkline10-graph">
                                                            <div class="basic-login-form-ad">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="dual-list-box-inner">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="image-crop">
                                                                                        <img src="" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="preview-img-pro-ad">
                                                                                        <!-- <h4>Preview image</h4>
                                                                                        <div class="img-preview img-preview-custom"></div> -->
                                                                                        <h4 class="comon-method">Comon method</h4>
                                                                                        <p>
                                                                                            You can upload new image to crop.
                                                                                        </p>
                                                                                        <div class="btn-group images-cropper-pro">
                                                                                            <!-- <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                                                                                    <input type="file" accept="image/*" name="photo" id="inputImage" class="hide"> Upload new image
                                                                                            </label> -->
                                                                                            <input type="file" accept="image/*" name="photo">
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                            						</button>
                                                <button type="reset" class="btn btn-warning waves-effect waves-light">Discard
                            						</button>
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
</form>

@endsection

