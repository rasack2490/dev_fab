@extends('layout.template')
@section('nav_side')
    @include('include.nav_left')
@endsection
@section('top_side')
    @include('include.nav_top')
@endsection
@section('content')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Mon profile</li>
            </ol>
        </nav>
    <div class="container-fluid bg-light">

        <div class="row">
            <div class="col-lg-4 pro-left">
                <div class="pro mt-4">
                    <img src="assets/images/profile1.png" alt="" class="mb-4">
                    @foreach($info as $info)
                        <p class="ml-3">{{$info->prenom}}</p>
                        <p class="ml-5">{{$info->nom}}</p>

                    <button type="button" class="btn btn-warning  btn-block"><i class="bi bi-pen"></i>Modifier profile</button>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="alert maletre alert-dismissible fade show mt-4" role="alert">
                    <strong>ProTip!</strong>  La mise à jour de votre profil avec votre nom.
                    <button type="button" class="btn btn-outline-warning btn-sm"><i class="bi bi-pen"></i>Modifier profile</button>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-header bg-light">
                        <h4><i class="bi bi-person-lines-fill"></i> Mes informations</h4>
                    </div>
                    <div class="card-body">

                            <h5><strong>Nom:</strong> {{$info->nom}}</h5>
                            <h5><strong>Prenom:</strong> {{$info->prenom}}</h5>
                            <h5><strong>E-mail:</strong> {{$info->email}}</h5>
                            <h5><strong>Matricule:</strong> {{$info->matricule}}</h5>
                            <h5><strong>Numero:</strong> {{$info->numero}}</h5>
                    </div>
                    <div class="card-footer bg-light">

                        <p>Inscrit le {{$info->created_at}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
