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
            <th>Nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>status</th>
            <th>Souscription</th>
            <th>status</th>
            <th>Souscription</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Trident</td>
            <td>Internet
                 Explorer 4.0</td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
            <td> 4</td>
            <td>X</td>
        </tr>

        <tr>
            <td>KHTML</td>
            <td>Konqureror 3.5</td>
            <td>KDE 3.5</td>
            <td>3.5</td>
            <td>A</td>
            <td> 4</td>
            <td>X</td>
        </tr>
        <tr>
            <td>Tasman</td>
            <td>Internet Explorer 4.5</td>
            <td>Mac OS 8-9</td>
            <td>-</td>
            <td>X</td>
            <td> 4</td>
            <td>X</td>
        </tr>
        <tr>
            <td>Tasman</td>
            <td>Internet Explorer 5.1</td>
            <td>Mac OS 7.6-9</td>
            <td>1</td>
            <td>C</td>
            <td> 4</td>
            <td>X</td>
        </tr>

        <tr>
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td>-</td>
            <td>X</td>
            <td> 4</td>
            <td>X</td>
        </tr>

    </tbody>
</table>
    </div>





</div>
@endsection
