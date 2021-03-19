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
                <li class="breadcrumb-item active" aria-current="page">Programmation</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-light">
                <i class="bi bi-stopwatch"></i>Program des horaires
                </div>
                <div class="card-body">
                    <form action="{{route('horaire')}}" method="post">
                    @csrf
                        <fieldset class="mb-4">
                            <legend>Matinée</legend>
                            <div class="form-outline">
                                <label class="form-label" for="form1">09:00/13:00</label>
                                <input type="text" id="form1" class="form-control" name="matin" />

                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Soirée</legend>
                            <div class="form-outline">
                                <label class="form-label" for="form2">14:00/22:00</label>
                                <input type="text" id="form2" class="form-control" name="soir" />

                            </div>
                        </fieldset>
                        <div class="row mt-3">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4"><button type="submit" class="btn btn-xs btn-success end" >Valider</button></div>
                        </div>


                    </form>
                </div>
                <div class="card-footer bg-light">
                    2 days ago
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-light">
                <i class="bi bi-calendar-check"></i>Program des places
                </div>
                <div class="card-body">
                    <form action="{{route('place')}}" method="post">
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
                            <legend>Places</legend>
                            <div class="form-outline">
                                <label class="form-label" for="form2">Definissez le nombre de place</label>
                                <input type="text" id="form2" class="form-control" name="place" />

                            </div>
                        </fieldset>
                        <div class="row mt-3">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4"><button type="submit" class="btn btn-xs btn-success end" >Valider</button></div>
                        </div>


                    </form>
                </div>
                <div class="card-footer bg-light">
                    2 days ago
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
