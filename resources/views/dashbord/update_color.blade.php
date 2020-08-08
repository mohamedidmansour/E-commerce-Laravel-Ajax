@extends("layout2.master")

@section("content")
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkling12-list">
                <div class="sparkling12-hd">
                    <div class="main-sparkling12-hd">
                        <h1>Modifier Color</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    <form action="{{url('color/'.$so->id)}}" method="post">
                                        <input type="hidden" name="_method" value="PUT">
                                        {{csrf_field()}}
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right pull-right-pro">Libelle
                                                        : </label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" name="libelle"
                                                           value="{{$so->libelle}}"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right pull-right-pro">#color
                                                        : </label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <input type="color" class="form-control" name="code_color"
                                                        value="{{$so->code_color}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right pull-right-pro">Description
                                                        : </label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <textarea class="form-control" rows="7" name="description"
                                                    >{{$so->description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <button type="submit" class="btn btn-custon-two btn-warning"
                                                            style="position: relative;left: 35%;"><i
                                                                class="fa fa-exclamation-triangle adminpro-warning-danger"
                                                                aria-hidden="true"></i> Modifier
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