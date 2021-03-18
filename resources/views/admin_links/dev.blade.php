@extends('layout.template')
@section('nav_side')
    @include('include.nav_left')
@endsection
@section('top_side')
    @include('include.nav_top')
@endsection
@section('content')
<div class="container-fluid">
<div class="tab-pane bg-light" id="developpeur">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Liste des developpeurs</li>
            </ol>
        </nav>
        <div class="container">
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Matricule</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($devs as $devs)
                            <tr>
                                <td>{{$devs->nom}}</td>
                                <td>{{$devs->prenom}}</td>
                                <td>{{$devs->email}}</td>
                                <td>{{$devs->matricule}}</td>
                                <td>{{$devs->numero}}</td>
                                <form action="{{ route('del') }}" method="post">
                                <td>
                                    <input type="hidden" name="email" value="{{$devs->email}}">
                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button></td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>

    </div>

</div>
@endsection
