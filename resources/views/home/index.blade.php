@extends('layouts.main')
@section('content')
<div id="page-loader">
    <div class="page-loader-body">
      <div class="cssload-spinner">
        <div class="cssload-cube cssload-cube0"></div>
        <div class="cssload-cube cssload-cube1"></div>
        <div class="cssload-cube cssload-cube2"></div>
        <div class="cssload-cube cssload-cube3"></div>
        <div class="cssload-cube cssload-cube4"></div>
        <div class="cssload-cube cssload-cube5"></div>
        <div class="cssload-cube cssload-cube6"></div>
        <div class="cssload-cube cssload-cube7"></div>
        <div class="cssload-cube cssload-cube8"></div>
        <div class="cssload-cube cssload-cube9"></div>
        <div class="cssload-cube cssload-cube10"></div>
        <div class="cssload-cube cssload-cube11"></div>
        <div class="cssload-cube cssload-cube12"></div>
        <div class="cssload-cube cssload-cube13"></div>
        <div class="cssload-cube cssload-cube14"></div>
        <div class="cssload-cube cssload-cube15"></div>
      </div>
    </div>
</div>
  <!-- Page-->
<div class="page">
    
    <!-- Page header-->
    @include('includes.header')

    <!-- My Best Photos-->
    <section class="section bg-white text-center">
      <!-- Slick Carousel-->
      <div class="slick-wrap">
        <div class="slick-slider slick-style-1" data-arrows="true" data-autoplay="false" data-loop="true" data-dots="true" data-swipe="true" data-xs-swipe="true" data-sm-swipe="false" data-items="1" data-sm-items="3" data-md-items="3" data-lg-items="3" data-center-mode="true" data-lightgallery="group-slick">
          <div class="item">
            <div class="slick-slide-inner">
              <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" 
                href="{{asset('assets/images/rendu3D-maison-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ann__image" src="{{asset('assets/images/rendu3D-maison-961x664.svg')}}" alt="" width="961" height="664"/>
                  <div class="thumb-ann__caption"> 
                    <p class="thumb-ann__title heading-3">Rendu3D &amp; Maison</p>
                    <p class="thumb-ann__text">Avec plus de 5 ans d'expérience, je suis ravi de mettre à votre disposition une vaste gamme de services de rendu 3D à des tarifs accessibles.</p>
                  </div></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slick-slide-inner">
              <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" 
                href="{{asset('assets/images/rendu3d-restauran-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ann__image" src="{{asset('assets/images/rendu3d-restauran-961x644.svg')}}" alt="" width="961" height="664"/>
                  <div class="thumb-ann__caption"> 
                    <p class="thumb-ann__title heading-3">Rendu3D &amp; Restaurant</p>
                    <p class="thumb-ann__text">Avec plus de 5 ans d'expérience, je suis ravi de mettre à votre disposition une vaste gamme de services de rendu 3D à des tarifs accessibles.</p>
                  </div></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slick-slide-inner">
              <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" 
                href="{{asset('/assets/images/rendu3d-couloir-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ann__image" src="{{asset('assets/images/rendu3d-couloir-961x644.svg')}}" alt="" width="961" height="664"/>
                  <div class="thumb-ann__caption"> 
                    <p class="thumb-ann__title heading-3">Rendu3D &amp; couloire</p>
                    <p class="thumb-ann__text">Avec plus de 5 ans d'expérience, je suis ravi de mettre à votre disposition une vaste gamme de services de rendu 3D à des tarifs accessibles.</p>
                  </div></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slick-slide-inner">
              <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" 
                href="{{asset('assets/images/rendu3d-salon-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ann__image" 
                src="{{asset('assets/images/rendu3d-salon-961x644.svg')}}" alt="" width="961" height="664"/>
                  <div class="thumb-ann__caption"> 
                    <p class="thumb-ann__title heading-3">Rendu3D &amp; salon</p>
                    <p class="thumb-ann__text">Avec plus de 5 ans d'expérience, je suis ravi de mettre à votre disposition une vaste gamme de services de rendu 3D à des tarifs accessibles.</p>
                  </div></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-md bg-white text-center">
      <div class="shell-fluid">
        <p class="heading-1">Portfolio</p>
        <div class="isotope thumb-ruby-wrap wow fadeIn" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" 
                href="{{asset('assets/images/caban-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ruby__image" src="{{asset('assets/images/caban-440x327.svg')}}" alt="" width="440" height="327"/>
                      <div class="thumb-ruby__caption">
                        <p class="thumb-ruby__title heading-3">Rendu3D &amp; Cabane</p>
                        <p class="thumb-ruby__text">Si vous êtes à la recherche de rendus 3D de haute qualité, je serais enchanté de vous apporter mon assistance.
                          <!-- Portfolio-->
                        </p>
                      </div></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" 
                href="{{asset('assets/images/maison-garage-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ruby__image" 
                src="{{asset('assets/images/maison-garage-444x683.svg')}}" alt="" width="444" height="683"/>
                      <div class="thumb-ruby__caption">
                        <p class="thumb-ruby__title heading-3">Rendu3D &amp; Garage</p>
                        <p class="thumb-ruby__text">Si vous êtes à la recherche de rendus 3D de haute qualité, je serais enchanté de vous apporter mon assistance.
                          <!-- Portfolio-->
                        </p>
                      </div></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" 
                href="{{asset('assets/images/caban-foret-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ruby__image" src="{{asset('assets/images/caban-foret-440x327.svg')}}" alt="" width="440" height="327"/>
                      <div class="thumb-ruby__caption">
                        <p class="thumb-ruby__title heading-3">Cabane forêt</p>
                        <p class="thumb-ruby__text">Si vous êtes à la recherche de rendus 3D de haute qualité, je serais enchanté de vous apporter mon assistance.
                          <!-- Portfolio-->
                        </p>
                      </div></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" 
                href="{{asset('assets/images/salon-feutill-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ruby__image" src="{{asset('assets/images/salon-feutill-444x683.svg')}}" alt="" width="444" height="683"/>
                      <div class="thumb-ruby__caption">
                        <p class="thumb-ruby__title heading-3">Salon</p>
                        <p class="thumb-ruby__text">Si vous êtes à la recherche de rendus 3D de haute qualité, je serais enchanté de vous apporter mon assistance.
                          <!-- Portfolio-->
                        </p>
                      </div></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" 
                href="{{asset('assets/images/salon-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ruby__image" src="{{asset('assets/images/salon-440x327.svg')}}" alt="" width="440" height="327"/>
                      <div class="thumb-ruby__caption">
                        <p class="thumb-ruby__title heading-3">salon élégant</p>
                        <p class="thumb-ruby__text">Si vous êtes à la recherche de rendus 3D de haute qualité, je serais enchanté de vous apporter mon assistance.
                          <!-- Portfolio-->
                        </p>
                      </div></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href="{{asset('assets/images/salon-noir-1200x800.svg')}}" data-lightgallery="item"><img class="thumb-ruby__image" src="{{asset('assets/images/salon-noir-440x327.svg')}}" alt="" width="440" height="327"/>
                      <div class="thumb-ruby__caption">
                        <p class="thumb-ruby__title heading-3">Salon noir</p>
                        <p class="thumb-ruby__text">Si vous êtes à la recherche de rendus 3D de haute qualité, je serais enchanté de vous apporter mon assistance.
                          <!-- Portfolio-->
                        </p>
                      </div></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Awards-->
          <section class="section parallax-container bg-image-dark" data-parallax-img="{{asset('assets/images/banner-1919x1244.svg')}}">
            <div class="parallax-content">
              <div class="section-md text-center">
                <div class="shell">
                  <div class="range range-50 range-lg-bottom">
                    <div class="cell-xs-6 cell-md-3 wow fadeIn">
                      <!-- Box award-->
                      <article class="box-award">
                        <h3 class="box-award__title"></h3>
                        <div class="box-award__divider"></div>
                        <time class="box-award__time" datetime="2010"></time>
                      </article>
                    </div>
                    <div class="cell-xs-6 cell-md-3 wow fadeIn" data-wow-delay=".1s">
                      <!-- Box award-->
                      <article class="box-award">
                        <h3 class="box-award__title"></h3>
                        <div class="box-award__divider"></div>
                        <time class="box-award__time" datetime="2014"></time>
                      </article>
                    </div>
                    <div class="cell-xs-6 cell-md-3 wow fadeIn" data-wow-delay=".2s">
                      <!-- Box award-->
                      <article class="box-award">
                        <h3 class="box-award__title"></h3>
                        <div class="box-award__divider"></div>
                        <time class="box-award__time" datetime="2015"></time>
                      </article>
                    </div>
                    <div class="cell-xs-6 cell-md-3 wow fadeIn" data-wow-delay=".3s">
                      <!-- Box award-->
                      <article class="box-award">
                        <h3 class="box-award__title"></h3>
                        <div class="box-award__divider"></div>
                        <time class="box-award__time" datetime="2016"></time>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


    <!-- Blog-->
    <section class="section section-md bg-gray-lighter text-center">
      <div class="shell">
        <p class="heading-1">Blog</p>
        <div class="range range-30">
          <div class="cell-sm-6 cell-md-4 wow fadeInLeftSmall">
            <!-- Post boxed-->
            <article class="post-boxed">
              <ul class="post-boxed__meta">
                <li>
                  <time datetime="2019">Jul 20, 2022</time>
                </li>
                <li><a href="#">3 comments</a></li>
              </ul>
              <div class="post-boxed__main">
                <h3 class="post-boxed__title"><a href="#">Une véritable expertise</a></h3>
                <p>Le formateur expérimenté démontre une véritable expertise dans son domaine. Ses connaissances approfondies et son approche pédagogique font de chaque session un apprentissage enrichissant.Je tiens à exprimer ma sincère gratitude envers notre formateur</p>
              </div>
              <div class="post-boxed__aside">
                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                  <div class="unit__left"><img class="post-boxed__avatar" src="{{asset('assets/images/user-6-46x46.jpg')}}" alt="" width="46" height="46"/>
                  </div>
                  <div class="unit__body">
                    <h6 class="text-uppercase">par Abel.</h6>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="cell-sm-6 cell-md-4 wow fadeInLeftSmall" data-wow-delay=".15s">
            <!-- Post boxed-->
            <article class="post-boxed">
              <ul class="post-boxed__meta">
                <li>
                  <time datetime="2019">Jul 15, 2022</time>
                </li>
                <li><a href="#">3 comments</a></li>
              </ul>
              <div class="post-boxed__main">
                <h3 class="post-boxed__title"><a href="#">Un guide exceptionnel</a></h3>
                <p>En tant qu'apprenant, j'ai eu la chance de bénéficier des enseignements de ce formateur expérimenté. Sa capacité à expliquer des concepts complexes de manière simple et à guider à travers des situations pratiques en font un guide exceptionnel</p>
              </div>
              <div class="post-boxed__aside">
                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                  <div class="unit__left"><img class="post-boxed__avatar" src="{{asset('assets/images/user-6-46x46.jpg')}}" alt="" width="46" height="46"/>
                  </div>
                  <div class="unit__body">
                    <h6 class="text-uppercase">par Catherine</h6>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="cell-sm-6 cell-md-4 wow fadeInLeftSmall" data-wow-delay=".3s">
            <!-- Post boxed-->
            <article class="post-boxed">
              <ul class="post-boxed__meta">
                <li>
                  <time datetime="2019">Jul 5, 2023</time>
                </li>
                <li><a href="#">3 comments</a></li>
              </ul>
              <div class="post-boxed__main">
                <h3 class="post-boxed__title"><a href="#">Une valeur ajoutée indéniable</a></h3>
                <p>Travailler avec un formateur aussi expérimenté a été une expérience extrêmement enrichissante. Sa passion pour le sujet, sa patience et son engagement en font une valeur ajoutée indéniable pour quiconque cherche à approfondir ses compétences.</p>
              </div>
              <div class="post-boxed__aside">
                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                  <div class="unit__left"><img class="post-boxed__avatar" src="{{asset('assets/images/user-6-46x46.jpg')}}" alt="" width="46" height="46"/>
                  </div>
                  <div class="unit__body">
                    <h6 class="text-uppercase">par Samuel</h6>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Book Your Photo Shoot-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-50 range-sm-center range-md-left range-md-reverse range-md-middle">
          <div class="cell-sm-10 cell-md-6 wow fadeInRight">
            <div class="box-width-4 box-centered">
              <p class="heading-1">Réservez votre <br> Séance gratuitement</p>
              
              <p>N'hésitez pas à me faire savoir vos questions, ou si vous avez d'autres suggestions, je suis flexible. Je suis impatient(e) de discuter avec vous.
            </p>
            </div>
          </div>
          <div class="cell-sm-10 cell-md-6 wow fadeInLeft">
            <article class="box-line"><span></span><span></span><span></span><span></span>
              <div class="box-line__main">
                <!-- RD Mailform-->
                @if (! empty(session('success')))
                    <div class='alert alert-success'>{{session('success')}}</div>
                @endif
                <form   method="post" 
                action="{{route('admin.notification')}}">
                  @csrf
                  <div class="form-wrap">
                    <input class="form-input" id="contact-date" type="text" data-time-picker="date" name="date" required>
                    <label class="form-label" for="contact-date">Date</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-name" type="text" name="name" required>
                    <label class="form-label" for="contact-name">Votre nom</label>
                  </div>
                 
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email" type="email" name="email" required>
                    <label class="form-label" for="contact-email">E-mail</label>
                  </div>
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message">Votre Message</label>
                    <textarea class="form-input" id="contact-message" name="message" required></textarea>
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

   @include('includes.footer')
</div>
@endsection