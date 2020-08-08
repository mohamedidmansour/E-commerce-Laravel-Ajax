@extends("layout2.master")

@section("content")

    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Admin List</h4>
                        <div class="add-product">
                            <a href="{{url('admin/create')}}">Add Admin</a>
                        </div>
                        <table>
                            <tr>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>dateNaissance</th>
                                <th>Tel</th>
                                <th>ville</th>
                                <th>codepostale</th>
                                <th>pays</th>
                                <th>&nbsp;</th>
                            </tr>
                            @foreach($admin as $so)
                                <tr>
                                    <td><img src="{{asset('storage/'.$so->photo)}}" alt="aucun"/></td>
                                    <td>{{$so->nom}}</td>
                                    <td>{{$so->prenom}}</td>
                                    <td>{{$so->email}}</td>
                                    <td>{{$so->password}}</td>
                                    <td>{{$so->dateNaissance}}</td>
                                    <td>{{$so->tel}}</td>
                                    <td>{{$so->ville}}</td>
                                    <td>{{$so->codePostale}}</td>
                                    <td>{{$so->pays}}</td>
                                    <td>
                                        <a href="{{url('admin/'.$so->id.'/edit')}}" data-toggle="tooltip"
                                           title="Modifier" class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                                                     aria-hidden="true"></i></a>
                                            <a href="{{url('admin/'.$so->id.'/delete')}}" data-toggle="tooltip"
                                               title="Supprimer" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection