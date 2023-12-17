@extends('layouts.main')
@section('content')
<div class="page">
  @include('includes.header')
     <!-- Breadcrumbs-->
     <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image.jpg);">
        <div class="shell">
          <h1 class="breadcrumbs-custom__title">Contact moi</h1>
          <ul class="breadcrumbs-custom__path">
            <li class="active">Je repond aux messages des la reception</li>
          </ul>
        </div>
      </section>

      <!-- Get in Touch-->
      <section class="section section-md bg-white text-center">
        <div class="shell">
          <div class="range range-md-center">
            <div class="cell-md-11 cell-lg-10">
              <h2 class="text-bold">Entrer en contact</h2>
              <p><span class="box-width-2">Je suis disponible 24/7 par telephone, e-mail . Vous pouvez également utiliser un formulaire de contact rapide pour poser une question sur mes services.</span></p>
              <div class="layout-columns">
                <div class="layout-columns__main">
                  <div class="layout-columns__main-inner">
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
                </div>
                <div class="layout-columns__aside">
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Socials</p>
                    <div class="divider-modern"></div>
                    <ul class="list-inline" >
                      <li><a class="icon icon-md icon-gray-7 fa fa-facebook" href="{{config('app.facebook')}}"></a></li>
                      <li><a class="fa-brands fa-tiktok fa-lg" style="color: #828282;" href="{{config('app.tiktok')}}"></a></li>
                      <li><a class="icon icon-md icon-gray-7 fa fa-instagram" href="{{config('app.instagram')}}"></a></li>
                      <li><a class="icon icon-md icon-gray-7 fa fa-youtube" href="{{config('app.youtube')}}"></a></li>
                    </ul>  
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Phone</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary material-icons-local_phone"></span></div>
                      <div class="unit__body"><a href="tel:{{config('app.contact')}}">{{config('app.contact')}}</a></div>
                    </div>
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Address</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary material-icons-location_on"></span></div>
                      <div class="unit__body"><a href="mailto:{{config('app.emailadmin')}}">{{config('app.emailadmin')}}</a></div>
                    </div>
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Horaires d'ouvertures</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary mdi mdi-clock"></span></div>
                      <div class="unit__body"><span>je travaille tous les jours 24h/24</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </section>
@endsection