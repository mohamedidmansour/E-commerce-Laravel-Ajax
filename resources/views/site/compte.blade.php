@extends("layout1.master")

@section("content")
<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
            <div class="col-md-6">
            <form action="{{url('compte')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="user_id" value="1">
                <div class="form-row ">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Card Credit : </label>
                    <select class="form-control" id="inputEmail4" name="libelle">
                        <option>--------Select Card--------</option>
                        <option>Visa</option>
                        <option>Master</option>
                        <option>American Express</option>
                        <option>Discover</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Carde Number</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="123456" name="numcopmte">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Month</label>
                    <select id="inputState" class="form-control" name="month">
                        <option selected>Select Month</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">Year</label>
                    <input type="number" min="1900" max="2099" step="1" value="2019" name="year" class="form-control"/>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputZip">Card Security Code</label>
                    <input type="number" min="100" max="999" step="1" class="form-control" name="cosesecurity">
                    </div>
                    <div class="form-group col-md-12">
                    <label for="inputAddress">Promotional code</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="side-menu">
                        <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Vous Carts
                            </h4>
                            <ul>
                                @foreach($cmpts as $so)
                                <li class="bor18">
                                    <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                       {{$so->libelle}} , N° compte : {{$so->numcopmte}}
                                       <form action="{{url('compte/'.$so->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                </div>
            </div>
            </div>
        </div>
</div>
@endsection