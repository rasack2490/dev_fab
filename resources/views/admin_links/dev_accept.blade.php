@extends('layout.template')
@section('nav_side')
    @include('include.nav_left')
@endsection
@section('top_side')
    @include('include.nav_top')
@endsection
@section('content')
<div class="container-fluid">
<div class="tab-pane bg-light" id="inscription">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Liste des developpeurs</li>
            </ol>
        </nav>
        <div class="container-fluid">
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Matricule</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dev_accept as $dev_accept)
                            <tr>
                                <td>{{$dev_accept->nom}}</td>
                                <td>{{$dev_accept->prenom}}</td>
                                <td>{{$dev_accept->email}}</td>
                                <td>{{$dev_accept->matricule}}</td>
                                <td>{{$dev_accept->numero}}</td>
                                <form action="{{route('refuse')}}" method="post">
                                    @csrf
                                <td>
                                    <input type="hidden" name="refuse" value="{{$dev_accept->email}}">
                                    <button type="submit" class="btn btn-xs btn-warning" onclick="return confirm('Voulez vous refuser inscription?')">Refuser</button>
                                </td>
                                </form>
                                <form action="{{route('accept')}}" method="post">
                                    @csrf
                                <td>
                                    <input type="hidden" name="validate" value="{{$dev_accept->email}}">
                                    <button type="submit" class="btn btn-xs btn-success" onclick="return confirm('Voulez vous accepter inscription?')">Accepter</button>
                                </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>

    </div>
</div>
@endsection
