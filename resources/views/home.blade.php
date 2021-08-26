@extends('layouts.mainlayout')

@section('maincontent')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3>{{$products->count()}}</h3>
                        <h3>Produits</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <a href=" {{ route ('gestion_product.index') }}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$category->count()}}</h3>
                        <h3>Categories</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-folder-open"></i>
                    </div>
                    <a href="{{ route ('gestion_category.index') }}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>{{$clients->count()}}</h3>
                        <h3>Clients</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <a href="{{ route ('gestion_client.index') }}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$fournisseurs->count()}}</h3>
                        <h3>Fournisseurs</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="{{ route ('gestion_fournisseur.index') }}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$ventes->count()}}</h3>
                        <h3>Ventes</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-basket"></i>
                    </div>
                    <a href="{{ route ('gestion_product.index') }}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$achats->count()}}</h3>
                        <h3>Achats</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route ('gestion_category.index') }}" class="small-box-footer">Voir plus <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

@endsection
