<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="ti-layout menu-icon"></i>
          <span class="menu-title">interieur</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="">Slide-437x435</a></li>
            <li class="nav-item"> <a class="nav-link" href="">1.Slider-120x171</a></li>
            <li class="nav-item"> <a class="nav-link" href="">2.Slider-120x171</a></li>
            <li class="nav-item"> <a class="nav-link" href="">3.Slider-120x171</a></li>
            
          </ul>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Creation</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('add.interieur')}}">Ajouter interieur</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('add.exterieur')}}">Ajouter Exterieur</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('add.special')}}">Ajouter special</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="ti-layout menu-icon"></i>
          <span class="menu-title">Affichages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('display-interieur')}}">interieur</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('display-exterieur')}}">Exterieur</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('display-special')}}">special</a></li>
          </ul>
        </div>
      </li>
      
    </ul>
</nav>