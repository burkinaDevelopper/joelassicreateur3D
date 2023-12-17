@extends('layouts.main')
@section('content')
<div class="page">
@include('includes.header')

<section class="breadcrumbs-custom bg-image" style="background-image: url({{asset('assets/images/special-banner.png')}});">
    <div class="shell">
      <h1 class="breadcrumbs-custom__title">Rendu special</h1>
      <ul class="breadcrumbs-custom__path">
        <li class="active">Professionel</li>
      </ul>
    </div>
</section>

  <!-- About Me-->
<section class="section section-md bg-white">
    <div class="shell">
      <div class="range range-50 range-sm-center range-md-left"> 
        <div class="cell-sm-6 cell-md-5">
          <div class="thumb-bordered"><img src="{{$rendu7->url}}" alt="" width="437" height="435"/>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-7">
          <div class="box-width-3 box-centered">
            <article class="quote-big">
              <p class="q">Expert en design special.</p>
            </article>
            <div class="divider"></div>
            <p class="text-spacing-05">Joel, formateur émérite en rendu intérieur 3D, incarne la fusion parfaite entre passion artistique et maîtrise technique.Rejoignez moi pour transcender vos compétences et donner vie à vos projets de design d'intérieur avec une créativité exceptionnelle</p>
            <div class="group-3-columns" data-lightgallery="group">
              <div class="column-item"><a class="thumb-light" href="{{$rendu7->url}}" data-lightgallery="item">
                <img src="{{$rendu7->url}}" alt="" width="120" height="171"/>
                  <div class="thumb-light__overlay"></div></a></div>
              <div class="column-item"><a class="thumb-light" href="{{$rendu8->url}}" data-lightgallery="item">
                <img src="{{$rendu8->url}}" alt="" width="120" height="171"/>
                  <div class="thumb-light__overlay"></div></a></div>
              <div class="column-item"><a class="thumb-light" href="{{$rendu9->url}}" data-lightgallery="item" >
                <img src="{{$rendu9->url}}" alt="" width="120" height="171"/>
                  <div class="thumb-light__overlay"></div></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

  <!-- My Best Photos-->
<section class="section section-sm bg-gray-lighter text-center">
    <div class="shell">
      <div class="range range-50 range-sm-center">
        <div class="cell-md-10 cell-lg-9">
          <h1>Mes Realisation</h1>
          <p>Vous rêvez de maîtriser l'art de la visualisation intérieure et de donner vie à des espaces époustouflants en trois dimensions ? Ne cherchez pas plus loin ! Notre Formation Avancée en Rendu Intérieur 3D, dirigée par des experts chevronnés, vous offre l'opportunité unique de perfectionner vos compétences dans le domaine du design d'intérieur virtuel.</p>
        </div>
      </div>
    </div>
    <!-- Owl Carousel-->
    <div class="owl-carousel-wrap owl-carousel_style-2">
       <div class="owl-carousel" data-items="1" data-autoplay="true" data-lg-items="3" data-dots="false" data-nav="true"     data-stage-padding="0" data-xs-stage-padding="90" data-sm-stage-padding="140" data-md-stage-padding="260"    data-lg-stage-padding="1" data-loop="true" data-margin="0" data-mouse-drag="false" data-nav-custom="#owl-carousel-nav" data-center-mode="true" data-speed="500" data-lightgallery="group">
        @forelse ($renduSpecials as $renduSpecial)   
        <a class="thumb-ruby thumb-mixed_large" href="{{$renduSpecial->url}}" data-lightgallery="item">
          <img class="thumb-ruby__image" src="{{$renduSpecial->url}}" alt="{{$renduSpecial->title}}" width="649" height="427"/>
          <div class="thumb-ruby__caption">
            <p class="thumb-ruby__title heading-3">{{$renduSpecial->title}}</p>
            <p class="thumb-ruby__text">{{$renduSpecial->description}}</p>
          </div>
        </a>
        @empty
        <a class="thumb-ruby thumb-mixed_large" href="images/group-image-1-1200x800-original.jpg" data-lightgallery="item">
          <img class="thumb-ruby__image" src="{{asset('assets/images/about-2-649x427.jpg')}}" alt="" width="649" height="427"/>
          <div class="thumb-ruby__caption">
            <p class="thumb-ruby__title heading-3">Jane &amp; James</p>
            <p class="thumb-ruby__text">If you are looking for high quality wedding photography, I will be glad to help you.</p>
          </div>
        </a>
        @endforelse
       
       
       </div>
      <div class="owl-outer-navigation" id="owl-carousel-nav">
        <button class="owl-arrow owl-arrow-prev">
          <svg x="0px" y="0px" viewbox="0 0 28.5 16" width="26" height="14">
            <line x1="27.5" y1="8" x2="1" y2="8" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></line>
            <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="8.8,15 1,8 8.8,1"></polyline>
          </svg>
        </button>
        <button class="owl-arrow owl-arrow-next">
          <svg x="0px" y="0px" viewbox="0 0 28.5 16" width="26" height="14">
            <line fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="8" x2="27.5" y2="8"></line>
            <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="19.7,15 27.5,8 19.7,1"></polyline>
          </svg>
        </button>
      </div>
    </div>
</section>

  <!-- What People Say-->
<section class="section section-md bg-white text-center">
    <div class="shell">
      <h1>Ce que disent les gens</h1>
      <p><span>Plus de datail ? </span><a href="#">Click Ici!</a></p>
      <div class="range range-50 range-sm-center">
        <div class="cell-sm-9 cell-md-6">
                <!-- Quote boxed-->
                <article class="quote-boxed"><span></span><span></span><span></span><span></span>
                  <p class="quote-boxed__title">Le meilleur pédagogie que je connaisse</p>
                  <div class="quote-boxed__text">
                    <svg class="quote-boxed__shape" version="1.1" x="0px" y="0px" viewbox="0 0 32.2 28" width="32.2" height="28">
                      <path d="M6.2,0C2.8,0,0,2.8,0,6.3s2.8,6.3,6.2,6.3c6.2,0,2.1,12.3-6.2,12.3v3C14.7,27.9,20.4,0,6.2,0L6.2,0z M23.9,0       c-3.4,0-6.2,2.8-6.2,6.3s2.8,6.3,6.2,6.3c6.2,0,2.1,12.3-6.2,12.3v3C32.4,27.9,38.2,0,23.9,0L23.9,0z M23.9,0"></path>
                    </svg>
                    <p>C'est un formateur exceptionnel qui inspire véritablement ses élèves à exceller dans le domaine du rendu d'intérieur 3D.Merci beaucoup pour tout vous avez ete un veritalbe guide</p>
                  </div>
                  <ul class="quote-boxed__meta">
                    <li>
                      <div class="unit unit-horizontal unit-middle">
                        <div class="unit__left"><img class="quote-boxed__avatar" src="{{asset('assets/images/user-1-46x46.jpg')}}" alt="" width="46" height="46"/>
                        </div>
                        <div class="unit__body">
                          <cite class="quote-boxed__cite">Rebecca </cite>
                        </div>
                      </div>
                    </li>
                    <li>
                      <time class="quote-boxed__time" datetime="2017">Jul 05, 2022</time>
                    </li>
                  </ul>
                </article>
        </div>
        <div class="cell-sm-9 cell-md-6">
                <!-- Quote boxed-->
                <article class="quote-boxed"><span></span><span></span><span></span><span></span>
                  <p class="quote-boxed__title">Vous dispense les meilleures formations !</p>
                  <div class="quote-boxed__text">
                    <svg class="quote-boxed__shape" version="1.1" x="0px" y="0px" viewbox="0 0 32.2 28" width="32.2" height="28">
                      <path d="M6.2,0C2.8,0,0,2.8,0,6.3s2.8,6.3,6.2,6.3c6.2,0,2.1,12.3-6.2,12.3v3C14.7,27.9,20.4,0,6.2,0L6.2,0z M23.9,0       c-3.4,0-6.2,2.8-6.2,6.3s2.8,6.3,6.2,6.3c6.2,0,2.1,12.3-6.2,12.3v3C32.4,27.9,38.2,0,23.9,0L23.9,0z M23.9,0"></path>
                    </svg>
                    <p>Grâce à ses conseils perspicaces et à sa manière pédagogique, j'ai acquis une compréhension approfondie des techniques de rendu, ce qui a considérablement amélioré la qualité de mes travaux."</p>
                  </div>
                  <ul class="quote-boxed__meta">
                    <li>
                      <div class="unit unit-horizontal unit-middle">
                        <div class="unit__left"><img class="quote-boxed__avatar" src="{{asset('assets/images/user-2-46x46.jpg')}}" alt="" width="46" height="46"/>
                        </div>
                        <div class="unit__body">
                          <cite class="quote-boxed__cite">Jane Bruno</cite>
                        </div>
                      </div>
                    </li>
                    <li>
                      <time class="quote-boxed__time" datetime="2017">Jan 10, 2023</time>
                    </li>
                  </ul>
                </article>
        </div>
      </div>
    </div>
</section>

<section class="section parallax-container bg-image-dark" data-parallax-img="{{asset('assets/images/special-contact.png')}}">
          <div class="parallax-content">
            <section class="section-lg text-center">
              <div class="shell">
                <div class="range range-50 range-sm-center range-md-reverse range-md-middle">
                  <div class="cell-md-6 cell-lg-5">
                    <div class="box-width-4 box-centered">
                      <p class="heading-1">Reserver <br> Une Seance </p>
                      <div class="divider-small"></div>
                      <p>Contactez moi 24h/24 et 7j/7 </p>
                    </div>
                  </div>
                  <div class="cell-sm-10 cell-md-6 cell-lg-7">
                    <article class="box-bordered">
                      <div class="box-bordered__main">
                        <!-- RD Mailform-->
                        @if (! empty(session('status')))
                           <div class='alert alert-success'>{{session('status')}}</div>
                        @endif
                        <form  data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('admin.notification')}}">
                          @csrf
                          <div class="form-wrap">
                            <input class="form-input" id="contact-date" type="text" data-time-picker="date" name="date" >
                            <label class="form-label" for="contact-date">Date</label>
                          </div>
                          <div class="form-wrap">
                            <input class="form-input" id="contact-name" type="text" name="name" >
                            <label class="form-label" for="contact-name">Nom</label>
                          </div>
                          <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email" >
                            <label class="form-label" for="contact-email">E-mail</label>
                          </div>
                          <div class="form-wrap">
                            <label class="form-label" for="contact-message">Message</label>
                            <textarea class="form-input" id="contact-message" name="message" ></textarea>
                          </div>
                          <div class="form-wrap form-button offset-1">
                            <button class="button button-block button-primary-outline button-ujarak" type="submit">Envoyer</button>
                          </div>
                        </form>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </section>
          </div>
</section>
@include('includes.footer')
</div>
@endsection