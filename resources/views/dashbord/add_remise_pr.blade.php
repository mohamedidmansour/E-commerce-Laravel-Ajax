@extends("layout2.master")

@section("content")


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Ajouter Remise</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    <form action="{{url('remis_produite')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right pull-right-pro">Désignation: </label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" disabled name="designation" value="{{$produit->libelle}}"/>
                                                <input type="hidden" value="{{$produit->id}}" name="produit_id">
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right pull-right-pro">Remise: </label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <select name="remi_id" class="form-control pro-edt-select form-control-primary" style="margin-top: 15px;">
                                                        <option disabled>Select Remis</option>
                                                        @foreach($remises as $so)
                                                            <option value="{{$so->id}}">{{$so->taux}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right pull-right-pro">Date Début: </label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <input type="date" class="form-control" name="date_debut"
                                                    />
                                                </div>
                                                 <br>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right pull-right-pro">Date Fin: </label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <input type="date" class="form-control" name="date_fin"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                  <label class="login2 pull-right pull-right-pro">Désignation: </label>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <input type="text" class="form-control" disabled name="designation" value="{{$produit->libelle}}"/>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                  <label class="login2 pull-right pull-right-pro">Remise: </label>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <select name="remi_id"
                                                            class="form-control pro-edt-select form-control-primary"
                                                            style="margin-top: 15px;">
                                                        <option value="">Select Remis</option>
                                                        @foreach($remises as $so)
                                                            <option value="{{$so->id}}">{{$so->taux}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                  <label class="login2 pull-right pull-right-pro">Date Début: </label>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <input type="date" class="form-control" name="dateDebut"
                                                    />
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                  <label class="login2 pull-right pull-right-pro">Date Fine: </label>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <input type="date" class="form-control" name="dateFin"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        </div> -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <button type="submit" class="btn btn-custon-two btn-success"
                                                            style="position: relative;left: 35%;"><i
                                                                class="fa fa-check adminpro-checked-pro"
                                                                aria-hidden="true"></i> Ajouter
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection