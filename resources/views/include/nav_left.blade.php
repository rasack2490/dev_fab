<div class="sidebar-wrapper liste">
        <ul class="nav nav-pills flex-column ">
          <li class="nav-item  active ">
            <a class="nav-item nav-link active" href="{{URL::route('dash')}}" >
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link" href="{{URL::route('dev')}}" >
              <i class="material-icons">content_paste</i>
              <p>Liste developpeurs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-item nav-link" href="{{URL::route('reservation')}}" >
              <i class="material-icons">content_paste</i>
              <p>Liste reservations</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-item nav-link" href="{{URL::route('devAccept')}}">
              <i class="material-icons">content_paste</i>
              <p>Liste inscriptions</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-item nav-link" href="{{URL::route('parametre')}}">
            <i class="bi bi-gear"></i>
              <p>Parametres</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-item nav-link" href="{{URL::route('profile')}}" >
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>


        </ul>
      </div>
