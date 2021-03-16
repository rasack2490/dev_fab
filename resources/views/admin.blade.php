@extends('layout.template')
@section('nav_side')
<div class="sidebar-wrapper liste">
        <ul class="nav nav-pills flex-column ">
          <li class="nav-item   ">
            <a class="nav-item nav-link active" href="#dashboard" data-toggle="tab">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link" href="#developpeur" data-toggle="tab">
              <i class="material-icons">content_paste</i>
              <p>Liste developpeurs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-item nav-link" href="#reservation" data-toggle="tab">
              <i class="material-icons">content_paste</i>
              <p>Liste reservations</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-item nav-link" href="#inscription" data-toggle="tab">
              <i class="material-icons">content_paste</i>
              <p>Liste inscriptions</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-item nav-link" href="#parametre" data-toggle="tab">
            <i class="bi bi-gear"></i>
              <p>Parametres</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-item nav-link" href="#profile" data-toggle="tab">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>


        </ul>
      </div>
@endsection
@section('top_side')
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
@endsection
@section('content')
<div class="tab-content">
    <div class="tab-pane active" id="dashboard">Texte d'accueil</div>
    <div class="tab-pane" id="developpeur">Tous les livres</div>
    <div class="tab-pane" id="reservation">Tous les témoignages</div>
</div>
@endsection
