<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5 " href="{{route('dashboard')}}" style="padding-left: 5px">Dashboard</a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="ti-layout-grid2"></span>
      </button>
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a href="{{route('home')}}" target="_blank" rel="noopener noreferrer" class="btn btn-success">Site</a>
        </li>
        <li class="nav-item nav-profile dropdown">
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Deconnexion</button>
          </form>
        </li>
        
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="ti-layout-grid2"></span>
      </button>
    </div>
  </nav>