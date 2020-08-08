@extends("layout2.master")

@section("content")

<div class="static-table-area mg-t-15" style="margin-bottom: 20px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Marques</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Marque</th>
                                                <th>
                                                <a  href="{{url('marque/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($marque as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td>
                                                    <form action="{{url('marque/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('marque/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <?php $test=false; ?>
                                                        @foreach($pr as $p)
                                                            @if($p->marque_id == $so->id)
                                                                <?php $test=true; ?>
                                                            @endif
                                                        @endforeach
                                                        @if($test == false)
                                                        <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        @else
                                                            <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                        @endif

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Categorie</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Categorie</th>
                                                <th>
                                                <a  href="{{url('cat/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cat as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td>
                                                    <form action="{{url('cat/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('cat/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <!-- <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
                                                        <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Color_metals</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Color_metal</th>
                                                <th>#CodeColor</th>
                                                <th>
                                                <a  href="{{url('color/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($color as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td><input type="color" class="" name="code_color"
                                                        value="{{$so->code_color}}" disabled /></td>
                                                <td>
                                                    <form action="{{url('color/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('color/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <?php $test=false; ?>
                                                        @foreach($pr as $p)
                                                            @if($p->color_metal_id == $so->id)
                                                                <?php $test=true; ?>
                                                            @endif
                                                        @endforeach
                                                        @if($test == false)
                                                        <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        @else
                                                            <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Forma_boitiers</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Forma_boitier</th>
                                                <th>
                                                <a  href="{{url('forma/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($forma as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td>
                                                    <form action="{{url('forma/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('forma/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <?php $test=false; ?>
                                                        @foreach($pr as $p)
                                                            @if($p->forma_boitier_id == $so->id)
                                                                <?php $test=true; ?>
                                                            @endif
                                                        @endforeach
                                                        @if($test == false)
                                                        <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        @else
                                                            <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Mouvement</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Mouvement</th>
                                                <th>
                                                <a  href="{{url('mouv/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($mouv as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td>
                                                    <form action="{{url('mouv/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('mouv/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <?php $test=false; ?>
                                                        @foreach($pr as $p)
                                                            @if($p->mouvement_id == $so->id)
                                                                <?php $test=true; ?>
                                                            @endif
                                                        @endforeach
                                                        @if($test == false)
                                                        <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        @else
                                                            <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Sous_cat</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Sous_categorie</th>
                                                <th>Type Categorie</th>
                                                <th>
                                                <a  href="{{url('scat/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($scat as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td>{{$so->categorie->libelle}}</td>
                                                <td>
                                                    <form action="{{url('scat/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('scat/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <?php $test=false; ?>
                                                        @foreach($pr as $p)
                                                            @if($p->sous_cat_id == $so->id)
                                                                <?php $test=true; ?>
                                                            @endif
                                                        @endforeach
                                                        @if($test == false)
                                                        <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        @else
                                                            <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Type_affichage</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Type_affichage</th>
                                                <th>
                                                <a  href="{{url('type_aff/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($type_aff as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td>
                                                    <form action="{{url('type_aff/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('type_aff/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                         <?php $test=false; ?>
                                                        @foreach($pr as $p)
                                                            @if($p->type_affichage_id == $so->id)
                                                                <?php $test=true; ?>
                                                            @endif
                                                        @endforeach
                                                        @if($test == false)
                                                        <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        @else
                                                            <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Typesn</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Typesn</th>
                                                <th>
                                                <a  href="{{url('typesn/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($typesn as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td>
                                                    <form action="{{url('typesn/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('typesn/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <?php $test=false; ?>
                                                        @foreach($pr as $p)
                                                            @if($p->typesn_id == $so->id)
                                                                <?php $test=true; ?>
                                                            @endif
                                                        @endforeach
                                                        @if($test == false)
                                                        <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        @else
                                                            <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Les Univer</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libelle Univer</th>
                                                <th>
                                                <a  href="{{url('univer/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($univer as $so)
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->libelle}}</td>
                                                <td>
                                                    <form action="{{url('univer/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('univer/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <?php $test=false; ?>
                                                        @foreach($pr as $p)
                                                            @if($p->univer_id == $so->id)
                                                                <?php $test=true; ?>
                                                            @endif
                                                        @endforeach
                                                        @if($test == false)
                                                        <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        @else
                                                            <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Tous Remis</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Taux</th>
                                                <th>
                                                <a  href="{{url('remis/create')}}" class="btn btn-primary btn-sm">Ajouter</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($remi as $so) 
                                            <tr>
                                                <td>{{$so->id}}</td>
                                                <td>{{$so->taux}}</td>
                                                <td>
                                                    <form action="{{url('remis/'.$so->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}

                                                        <a style="border: none;" href="{{url('remis/'.$so->id.'/edit')}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <!-- <button type="submit" style="border: none;" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
                                                         <button style="border: none;" title="Trash" class="btn btn-danger btn-sm">Forbidden Deletions</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection