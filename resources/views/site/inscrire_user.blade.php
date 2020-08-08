@extends("layout1.master")

@section("content")
    <div class="container" style="margin: 100px;">
        <div class="row">
            <!-- left column -->
            <!-- edit form column -->
            <div class="col-md-3 personal-info"></div>
            <div class="col-md-9 personal-info">


                <form  method="post" action="{{url('profile/login')}}" class="form-horizontal" role="form">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email  :</label>
                        <div class="col-lg-8">
                            <input class="form-control" required type="text"  name="email" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Password  :</label>
                        <div class="col-lg-8">
                            <input class="form-control" required type="text" name="password" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <input class="form-control btn-success btn-block"  type="submit" value="Identifier-vous">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>








@endsection
