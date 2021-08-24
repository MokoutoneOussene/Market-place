@extends('layouts.mainlayout')

@section('maincontent')

<!-- SELECT2 EXAMPLE -->
<form action="{{ route ('gestion_client.store') }}" method="POST">
    @csrf
    <div class="card card-default">
        <div class="card-header bg-warning">
            <h3 class="card-title" style="color: #002a54;font-weight:bold">Formulaire d'ajout des clients</h3>

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
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nom du client</label>
                        <input type="text" name="name" class="form-control select2" style="width: 100%;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>contact du client</label>
                        <input type="number" name="contact" class="form-control select2" style="width: 100%;">
                    </div>
                </div>
            </div>
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
                <h3 class="card-title" style="color: #002a54;font-weight:bold">Liste des clients</h3>
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
                            <th>Nom du client</th>
                            <th>Contact</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $cli)
                        <tr>
                            <td>{{$cli->id}}</td>
                            <td>{{$cli->name}}</td>
                            <td>{{$cli->contact}}</td>
                            <td>Modifier</td>
                            <td>Supprimer</td>
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
