@extends("layout2.master")

@section("content")
    <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="{{url('product/create')}}">Add Product</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>Nom Produit</th>
                                    <th>Status de Stock</th>
                                    <th>Prix d'achat</th>
                                    <th>Prix de vent</th>
                                    <th>Qte Stock</th>
                                    <th>Taille</th>
                                    <th>Type</th>
                                    <th>Setting</th>
                                    <th></th> 
                                </tr>
                                @foreach($prod as $so)
                                <tr>
                                    <td><img src="{{asset('storage/'.$so->url_p)}}" alt="" /></td>
                                    <td>{{$so->libelle}}</td>
                                    <td>
                                       <?php
                                        if($so->qte_stock>$so->seuil)
                                        {?>
                                            <button type="button" class="btn btn-custon-rounded-four btn-success">Bon Status</button>
                                       <?php }
                                       elseif($so->qte_stock == $so->seuil)
                                       {?>
                                        <button type="button" class="btn btn-custon-rounded-four btn-warning">Status pas mal</button>
                                      <?php }
                                      elseif($so->qte_stock < $so->seuil)
                                      {?>
                                        <button type="button" class="btn btn-custon-rounded-four btn-danger">Mal Status</button>
                                      <?php 
                                        }
                                       ?>
                                    </td>
                                    <td>{{$so->prix_achat}} DH</td>
                                    <td>{{$so->prix_vent}} DH</td>
                                    <td>{{$so->qte_stock}}</td>
                                    <td>{{$so->taille}}</td>
                                    <td style="text-align: center;">{{$so->type}}</td>
                                    <td>
                                        <form action="{{url('product/'.$so->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <a href="{{url('product/'.$so->id.'/edit')}}" data-toggle="tooltip" title="Modifier" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a href="{{url('scat/'.$so->id.'/edit')}}">
                                            <button type="submit" data-toggle="tooltip" title="Supprimer" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{url('produit/'.$so->id)}}" method="post">
                                            {{csrf_field()}}
                                            <a href="{{url('produit/'.$so->id.'/edit_details')}}" data-toggle="tooltip" title="Details" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="{{url('img_produit/create/'.$so->id)}}" data-toggle="tooltip" title="Add Image" class="pd-setting-ed"><i class="fa fa-image" aria-hidden="true"></i></a>
                                            <a href="{{url('remis_produite/create/'.$so->id)}}" data-toggle="tooltip" title="Add Remis" class="pd-setting-ed"><i class="fa fa-tag" aria-hidden="true"></i></a>
                                        </form>
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