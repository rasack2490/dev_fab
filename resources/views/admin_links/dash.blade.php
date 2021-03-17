@extends('layout.template')
@section('nav_side')
    @include('include.nav_left')
@endsection
@section('top_side')
    @include('include.nav_top')
@endsection
@section('content')
<div class="container-fluid">
<div class="tab-pane active bg-light" id="dashboard">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Gestion de compte et de place</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <h4 class="stat">Statut des comptes</h4>
                    <p class="statt">{{$places}} disponibles</p>
                </div>
                <div class="col-lg-6 col-md-6">
                <h4 class="stat">Statut des places</h4>
                <table class="table table-striped w-50 ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Jours</th>
                            <th scope="col">Places</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($days as $days)
                            <tr>
                                <td>{{$days->jours}}</td>
                                <td>{{$days->places}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection
