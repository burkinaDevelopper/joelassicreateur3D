 <!-- Page Footer--><a class="section section-banner" href="#" target="_blank" style="background-image: url({{asset('assets/images/background-01-1920x310.jpg')}}); background-image: -webkit-image-set( url(images/background-01-1920x310.jpg) 1x, url(images/background-01-3840x620.jpg) 2x )"><img src="{{asset('assets/images/baner-1600x310.png')}}" srcset="{{asset('assets/images/baner-1600x310.png')}} 1x, {{asset('assets/images/foreground-01-3200x620.png')}} 2x" alt="" width="1600" height="310"></a>
 <footer class="footer-centered section bg-gray-darker">
    <div class="shell">
      <div class="range range-sm-center">
        <div class="cell-sm-10 cell-md-8 cell-lg-6">
          <!-- Brand--><a class="brand" href="index.html">
            <div class="brand__name"><img src="{{asset('assets/images/Rendu-3D.svg')}}" alt="" width="243" height="57"/>
            </div></a>
                <!-- RD Mailform-->
                @if (! empty(session('success')))
                <div class='alert alert-success'>{{session('success')}}</div>
                @endif
                <form  data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{route('newspaper')}}">
                  @csrf
                  <div class="form__inner">
                    <div class="form-wrap">
                      <input class="form-input" id="subscribe-form-footer-email" type="email" name="email" required >
                      <label class="form-label" for="subscribe-form-footer-email">Votre E-mail...</label>
                    </div>
                    <div class="form-button">
                      <button class="button button-link" type="submit">newspaper</button>
                    </div>
                  </div>
                </form>
          <ul class="list-icons list-inline-sm">
            <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="{{config('app.instagram')}}"><span></span><span></span><span></span><span></span></a></li>
            <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="{{config('app.facebook')}}"><span></span><span></span><span></span><span></span></a></li>
            <li><a class="icon icon-sm fa fa-youtube icon-style-camera" href="{{config('app.youtube')}}"><span></span><span></span><span></span><span></span></a></li>
          </ul>
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved.</a></p>
        </div>
      </div>
    </div>
  </footer>