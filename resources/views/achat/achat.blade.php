@extends('layouts.mainlayout')

@section('maincontent')

<!-- SELECT2 EXAMPLE -->
<form action="{{ route ('gestion_achat.store') }}" method="POST">
    @csrf
    <div class="card card-default">
        <div class="card-header bg-warning">
            <h3 class="card-title" style="color: #002a54;font-weight:bold">Formulaire des achats</h3>

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
                        <select name="product_id" class="form-control select2" style="width: 100%;" required>
                            @foreach($products as $prod)
                            <option value="{{$prod->id}}">{{$prod->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nom du fournisseur</label>
                        <select name="fournisseur_id" class="form-control select2" style="width: 100%;" required>
                            @foreach($founisseurs as $frn)
                            <option value="{{$frn->id}}">{{$frn->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Quantité</label>
                        <input type="number" name="qte" class="form-control select2" style="width: 100%;" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Prix de vente</label>
                        <input type="number" name="price" class="form-control select2" style="width: 100%;" required>
                    </div>
                </div>
            </div>
            <input type="text" name="user_id" value="{{Auth::User()->id}}" hidden>
        </div>
        <button type="submit" class="btn btn-dark">Envoyer le formulaire</button>
        <!-- /.card-body -->
    </div>
</form>
<!-- /.card -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="card-title" style="color: #002a54;font-weight:bold">Liste des achats</h3>
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
                            <th>Nom du client</th>
                            <th>Nom du fournisseur</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Prix total</th>
                            <th>Detail</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($achats as $achat)
                        <tr>
                            <td>{{$achat->fournisseur->name}}</td>
                            <td>{{$achat->product->name}}</td>
                            <td>{{$achat->qte}}</td>
                            <td>{{$achat->price}}</td>
                            <td>{{$achat->total}}</td>
                            <td><a href="#"><i class="fa fa-eye text-success" aria-hidden="true"></i></a></td>
                            <td><a href="#"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                            <td><a href="#"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
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
