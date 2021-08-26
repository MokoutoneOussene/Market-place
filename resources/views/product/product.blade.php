@extends('layouts.mainlayout')

@section('maincontent')

<!-- SELECT2 EXAMPLE -->
<form action="{{ route ('gestion_product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class=" card card-default">
        <div class="card-header bg-warning">
            <h3 class="card-title" style="color: #002a54;font-weight:bold">Formulaire des produits</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nom du produit</label>
                        <input name="name" class="form-control select2" style="width: 100%;" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Prix de vente</label>
                        <input type="number" name="price" class="form-control select2" style="width: 100%;" required>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Quantité</label>
                        <input type="number" name="qte" class="form-control select2" style="width: 100%;" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Categorie du produit</label>
                        <select name="categorie_id" class="form-control select2" style="width: 100%;" required>
                            @foreach($category as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-dark" type="submit">Envoyer le formulaire</button>
        <!-- /.card-body -->
    </div>
</form>
<!-- /.card -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="card-title" style="color: #002a54;font-weight:bold">Liste des produits ({{$products->count()}})</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Nom du produit</th>
                            <th>Prix de vente</th>
                            <th>Quantité</th>
                            <th>Categorie</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $prods)
                        <tr>
                            <td>{{$prods->id}}</td>
                            <td>{{$prods->name}}</td>
                            <td>{{$prods->price}}</td>
                            <td>{{$prods->qte}}</td>
                            <td>{{$prods->category->name}}</td>
                            <td>
                                <a href="#"><i class="fa fa-eye text-warning" aria-hidden="true"></i></a>
                            </td>
                            <td>
                                <a href="#"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
