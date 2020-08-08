@extends("layout1.master")
@section("content")
	@if(\Illuminate\Support\Facades\Session::has("id"))
	<div class="container">
		<h1>Edit Profile</h1>
		<hr>
		<div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="{{asset('storage/'.$so->photo)}}" class="avatar img-circle" height="200px" width="200px" alt="avatar">
                    <h6>Photo de profile.</h6>
                </div>
            </div>
            <!-- edit form column -->
			<div class="col-md-9 personal-info">

				<h3>Personal info</h3>

				<form  method="post" enctype="multipart/form-data" action="{{url('profile/update')}}" class="form-horizontal" role="form">

                    <input type="hidden" name="_method" value="PUT">
					{{csrf_field()}}

					<div class="form-group">
						<label class="col-lg-3 control-label">Nom  :</label>
						<div class="col-lg-8">
							<input class="form-control"  type="text" name="nom" value="{{$so->nom}}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Prenom  :</label>
						<div class="col-lg-8">
							<input class="form-control"   type="text"  name="prenom" value="{{$so->prenom}}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Email  :</label>
						<div class="col-lg-8">
							<input class="form-control" required type="text"  name="email" value="{{$so->email}}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Password  :</label>
						<div class="col-lg-8">
							<input class="form-control" required type="text" name="password" value="{{$so->password}}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Civilite   :</label>
						<div class="col-lg-8">
							<input class="form-control" required type="text" name="civilite" value="{{$so->civilite }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Adresse    :</label>
						<div class="col-lg-8">
							<input class="form-control" required type="text" name="adresse" value="{{$so->adresse }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Date Naissance     :</label>
						<div class="col-lg-8">
							<input class="form-control"  required type="text" name="dateNaissance" value="{{$so->dateNaissance   }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Tel     :</label>
						<div class="col-lg-8">
							<input class="form-control" required type="text" name="tel" value="{{$so->tel   }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Ville     :</label>
						<div class="col-lg-8">
							<input class="form-control" required type="text" name="ville" value="{{$so->ville   }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Code Postal     :</label>
						<div class="col-lg-8">
							<input class="form-control" required type="text" name="codePostale" value="{{$so->codePostale   }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Pays     :</label>
						<div class="col-lg-8">
							<input class="form-control" required type="text" name="pays" value="{{$so->pays   }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Prenom  :</label>
						<div class="col-lg-8">
							<input class="form-control"   type="file"  name="photo" value="{{$so->photo}}">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-8">
							<input class="form-control btn-danger btn-block"  type="submit" value="changer">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<hr>
	@else
		<span>
			page introuvable !!
		</span>
	@endif
@endsection