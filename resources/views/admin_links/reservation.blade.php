@extends('layout.template')
@section('nav_side')
    @include('include.nav_left')
@endsection
@section('top_side')
    @include('include.nav_top')
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">


        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
      <script>
      $(document).ready(function() {
    $('#example').dataTable({"sPaginationType": "full_numbers"});
});
</script>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Liste des reservations</li>
        </ol>
    </nav>
    <div class="bg-light pb-4">
    <table cellpadding="0" cellspacing="0" border="0" class="dataTable " id="example">
    <thead>
        <tr>
            <th>Email</th>
            <th>Heure de reservation</th>
            <th>Jour de reservation</th>
            <th>Action</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($reserve as $reserve)
        <tr>

            <td>{{$reserve->reser_email}}</td>
            <td>{{$reserve->heur_reserve}}</td>
            <td>{{$reserve->jours}}</td>
            <td> <button type="submit" class="btn btn-xs btn-warning" onclick="return confirm('Voulez vous refuser inscription?')">Refuser</button></td>
            <td><button type="submit" class="btn btn-xs btn-success" onclick="return confirm('Voulez vous refuser inscription?')">Accepter</button></td>
        </tr>
        @endforeach


    </tbody>
</table>
    </div>





</div>
@endsection
