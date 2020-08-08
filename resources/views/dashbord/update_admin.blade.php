@extends("layout2.master")

@section("content")

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="{{url("admin/list")}}" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Edite Admin</h3>
                    <p>Admin template with very clean and aesthetic style prepared for your next app. </p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{url('admin/'.$so->id)}}" enctype="multipart/form-data" method="post" id="">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Nom</label>
                                    <input class="form-control"   value="{{$so->nom}}" name="nom">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Prenom</label>
                                    <input class="form-control" value="{{$so->prenom}}" name="prenom">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" name="password" value="{{$so->password}}" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" name="password2" value="{{$so->password}}" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>civilite</label>
                                    <input type="text" name="civilite" value="{{$so->civilite}}" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>adresse</label>
                                    <input type="text" name="adresse" value="{{$so->adresse}}" class="form-control">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input class="form-control" value="{{$so->email}}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Email Address</label>
                                    <input class="form-control" name="email"  value="{{$so->email}}" type="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Date Naissance </label>
                                    <input class="form-control"   name="dateNaissance" type="date" value="{{$so->dateNaissance}}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tel </label>
                                    <input class="form-control"  value="{{$so->tel}}" name="tel" type="tel">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Ville </label>
                                    <input class="form-control" value="{{$so->ville}}" name="ville" type="text">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Code Postal </label>
                                    <input class="form-control"  value="{{$so->codePostale}}" name="codePostale" type="text">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Pays </label>
                                    <input class="form-control"  value="{{$so->pays}}" name="pays" type="text">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>selectionné photo </label>
                                    <input class="form-control" value="{{$so->photo}}" name="photo" type="file">
                                </div>
                            </div>
                            <div class="text-center">
                                <input class="btn btn-success btn-block loginbtn" type="submit">
                                <button class="btn btn-default btn-block loginbtn" type="reset">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
    </div>

@endsection