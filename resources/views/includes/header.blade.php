<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="5px" data-lg-stick-up-offset="5px" data-md-stick-up="true" data-lg-stick-up="true">
        <div class="rd-navbar-main-outer">
          <div class="rd-navbar-main" style="min-width: 100% "> 
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand"><a class="brand" href="{{route('home')}}">
                  <div class="brand__name"><img class="brand__logo-dark" src="{{asset('assets/images/Rendu-3D.svg')}}" alt="" width="243" height="57"/><img class="brand__logo-light" src="{{asset('assets/images/Rendu-3D-inverse.svg')}}" alt="" width="243" height="57"/>
                  </div></a></div>
            </div>
            <!-- RD Navbar Nav-->
            <div class="rd-navbar-nav-wrap" style="width: 100% ;justify-content: space-between;">
              <div class="rd-navbar-element">
                <ul class="list-icons list-inline-sm" style="width: 188px">
                  <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="{{config('app.instagram')}}"><span></span><span></span><span></span><span></span></a></li>
                  <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="{{config('app.facebook')}}"><span></span><span></span><span></span><span></span></a></li>
                  <li><a class="icon icon-sm fa fa-youtube icon-style-camera" href="{{config('app.youtube')}}"><span></span><span></span><span></span><span></span></a></li>
                </ul>
              </div>
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav" style="width: 100%; display:flex" id="navli">
                <li class="{{Request::is('/')? 'active':''}}"><a href="{{route('home')}}">ACCUEIL</a></li>  
                <li class="{{Request::is('rendu-interieur')? 'active':''}}"><a href="{{route('rendu.interieur')}}">INTERIEUR</a></li>
                
                <li class="{{Request::is('rendu-exterieur')? 'active':''}}"><a href="{{route('rendu.exterieur')}}">EXTERIEUR</a></li>
                <li class="{{Request::is('rendu-special')? 'active':''}}"><a href="{{route('rendu.special')}}">SPECIAL</a></li>
                <li class="{{Request::is('cours')? 'active':''}}"><a href="{{route('cours')}}">COURS</a></li>
                <li class="{{Request::is('contact')? 'active':''}}"><a href="{{route('contact')}}">CONTACT</a></li>
        
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>