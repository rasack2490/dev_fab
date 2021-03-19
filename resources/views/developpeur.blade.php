@extends('layout.template')
@section('nav_side')
    @include('user_links.nav_left')
@endsection
@section('top_side')
    @include('user_links.nav_top')
@endsection
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Reservation de places</li>
            </ol>
        </nav>
        <div class="row bg-light">

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
            <div class="col-lg-6 col-md-6 mb-4">
            <div class="card">
                <div class="card-header ">
                    <h4><i class="bi bi-calendar-check"></i> Reserve maintenant</h4>
                </div>
                <div class="card-body">
                    <form action="{{URL::route('reserve')}}" method="post">
                    @csrf
                        <fieldset class="mb-4">
                            <legend>Jours</legend>
                            <label for="browser">Veuillez choisir le jour</label>
                            <input list="jours" name="jour"  class="form-control">
                            <datalist id="jours">
                                <option value="lundi">
                                <option value="mardi">
                                <option value="mercredi">
                                <option value="jeudi">
                                <option value="vendredi">
                                <option value="samedi">
                                <option value="dimanche">
                            </datalist>
                        </fieldset>

                        <fieldset>
                            <legend>Horaire</legend>
                            <div class="form-outline">
                                <label class="form-label" for="form2">choisissez l'heure</label>
                                <input list="horaires" name="heure"  class="form-control">
                                <datalist id="horaires">
                                    @foreach($horaire as $horaire)
                                        <option value="{{$horaire->heur_reserve}}">
                                    @endforeach

                                </datalist>

                            </div>
                        </fieldset>
                        <div class="row mt-3">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4"><button type="submit" class="btn btn-xs btn-success end" >Valider</button></div>
                        </div>


                    </form>
                </div>

            </div>

            </div>
        </div>
    </div>
@endsection
