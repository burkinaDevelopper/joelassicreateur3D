@extends('layouts.main')
@section('content')
<div class="page">
@include('includes.header')

<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image.jpg);">
    <div class="shell">
      <h1 class="breadcrumbs-custom__title">Formations</h1>
      <ul class="breadcrumbs-custom__path">
        <li class="active">Modules</li>
      </ul>
    </div>
  </section>

  <!-- Base typography-->
  <section class="section section-md bg-white">
    <div class="shell">
      <div class="range range-50">
        <div class="cell-md-10 cell-lg-8">
          <ul class="list-xl">
            <li>
              <h2>FORMATION V-RAY FOR SKETCHUP</h2>  
            </li>
            <li>
                <h2>Module1:V-RAY (6)</h2>
                <ol style="padding-top: 15px">
                    <h5 style="padding:8px 0">1.INTERFACE DE VRAY</h5> 
                    <h5 style="padding:8px 0">2.LE MENU DE V-RAY</h5> 
                    <h5 style="padding:8px 0">3.ASSET EDITOR</h5> 
                    <h5 style="padding:8px 0">4.FRAME BUFFER</h5> 
                    <h5 style="padding:8px 0">5.PARAMETRAGE AVANCEE DE V-RAY 6</h5> 
                    <h5 style="padding:8px 0">6.CHA0S COSMOS DE V-RAY 6 </h5> 
                </ol>
            </li>
            <li>
                <h2>MODULE 2 : l’EClAIRAGE DANS V-RAY (6)</h2>
                <ol style="padding-top: 15px">
                    <h5 style="padding:8px 0">7.CONFIGURATION DE l’EClAIRAGE INTERIEUR AVEC lE SOlEIl
                        ET CIEL </h5>  
                    <h5 style="padding:8px 0">8.CONFIGURATION DE l’EClAIRAGE AVEC LE RECTANGLE LIGHT</h5> 
                    <h5 style="padding:8px 0">9.CONFIGURATION DE l’EClAIRAGE INTERIEUR HDRI</h5> 
                    <h5 style="padding:8px 0">10.CONFIGURATION DE l’EClAIRAGE IES LIGHT,SPOT</h5> 
                    <h5 style="padding:8px 0">11.CONFIGURATION DE l’EClAIRAGE AVEC LE MESH LIGHT ET LA
                        TEXTURE EMISSIVE </h5> 
                        <h5 style="padding:8px 0">12.CONFIGURATION DE l’EClAIRAGE VOLUMETRIQUE</h5> 
                </ol>
            </li>
            <li>
                <h2>MODULE 3 : LES MATÉRIAUX DE V-RAY (6)</h2> 
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">13.LES MATERIAUX DE BASE DE V-RAY</h5> 
                    <h5 style="padding:8px 0">13.1.TISSUS / BOIS / GRANITE / METAUX / CARREAUX / CUIR /
                        BRIQUE / PLATRE OU STUCCO POUR LES MURS.
                        </h5> 
                    <h5 style="padding:8px 0">14.TEXTURE TOON OVERRIDE</h5> 
                </ol>
            </li>
            <li>
                <h2>MODULE 4 : LES MATÉRIAUX PBR</h2> 
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">15.LES MATERIAUX DE PIERRE</h5> 
                    <h5 style="padding:8px 0">16.LES MATERIAUX DE CONCRETE</h5> 
                    <h5 style="padding:8px 0">17.LES METAUX ET BOIS</h5> 
                    
                </ol>
            </li>
            <li>
                <h2>MODULE 5 : LES MATÉRIAUX SPECIAUX</h2> 
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">18.CONFIGURATION DE PISCINE</h5> 
                    <h5 style="padding:8px 0">19.CONFIGURATION DE FEU</h5> 
                    <h5 style="padding:8px 0">20.CONFIGURATION DU DECAL</h5> 
                    <h5 style="padding:8px 0">21.CONFIGURATION TRANSLUCENCY</h5> 
                    <h5 style="padding:8px 0">22.CONFIGURATION SUBSURFACE SCATTERING</h5> 
                    <h5 style="padding:8px 0">23.CONFIGURATION INFINITE PLANE </h5> 
                </ol>
            </li>
            <li>
                <h2>MODULE 6 : LA PALETTE DE COULEUR </h2>
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">24.ADOBE COLOR </h5> 
                    <h5 style="padding:8px 0">25.APPLICATION DE LA PALETTE DE COULEUR</h5> 
                    
                </ol>
            </li>
            <li>
                <h2>MODULE 7 : CONFIGURATION DE LA FOURRURE ET DE LA DISPERSION</h2>
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">26.CONFIGURATION DE V-RAY FUR</h5> 
                    <h5 style="padding:8px 0">27.CONFIGURATION DE V-RAY FUR AVEC TEXTURE</h5> 
                    <h5 style="padding:8px 0">28.CONFIGURATION DU SCATTER</h5> 
                    <h5 style="padding:8px 0">29.CONFIGURATION DU SCATTER AVEC GAZON</h5> 
                    <h5 style="padding:8px 0">30.CONFIGURATION DU SKATTER (EXTENSION)</h5> 
                </ol>
            </li>
            <li>
                <h2>MODULE 9 : CONFIGURATION DES PROXYS AVEC LE TRANSMUTR</h2>
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">31.CONFIGURATION DES FICHIERS FBX OBJ AVEC LE TRANSMUTR</h5> 
                    <h5 style="padding:8px 0">32.CONFIGURATION PROXY AVEC LE TRANSMUTR</h5> 
                    <h5 style="padding:8px 0">33.CONFIGURATION PROXY AVEC V-RAY</h5> 
                    <h5 style="padding:8px 0">34.CONFIGURATION FICHIER PROXY VRMAT</h5> 
                     
                </ol>
            </li>
            <li>
                <h2>MODULE 10 : CONFIGURATION SCENE EXTERIEURE</h2>
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">35.CAMERA DISTANCE FOCALE</h5> 
                    <h5 style="padding:8px 0">36.CONFIGURATION DE LA SCENE</h5> 
                    <h5 style="padding:8px 0">37.TECHNIQUE DE LA REGLE EN ARCHITECTURE</h5> 
                    <h5 style="padding:8px 0">38.CONFIGURATION DE l’EClAIRAGE EXTERIEURE</h5> 
                    <h5 style="padding:8px 0">39.CONFIGURATION DES MATERIAUX </h5> 
                    <h5 style="padding:8px 0">40.CONFIGURATION DISK CACHING</h5> 
                    <h5 style="padding:8px 0">41.CONFIGURATION DES ELEMENTS DE RENDU ET RENDU FINAL</h5> 
                </ol>
            </li>
            <li>
                <h2>MODULE 11 : CONFIGURATION SCENE EXTERIEURE</h2>
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">42.CONFIGURATION DE l’EClAIRAGE AVEC lE BACKGROUND</h5> 
                    <h5 style="padding:8px 0">43.CONFIGURATION DES MATERIAUX</h5> 
                    <h5 style="padding:8px 0">44.CONFIGURATION DES ELEMENT DE RENDU ET RENDU FINAL</h5> 
                    <h5 style="padding:8px 0">45.CONFIGURATION DE l’EClAIRAGE AVEC lE DOME lIGHT</h5> 
                     
                </ol>
            </li>
            
            <li>
                <h2>MODULE 13 : CONFIGURATION RENDU DE NUIT</h2>
                <ol style="padding-top: 15px">
                </ol>
            </li>
            <li>
                <h2>MODULE 14 : POST – PRODUCTION (PS)</h2>
                <ol style="padding-top: 15px">
                    
                    <h5 style="padding:8px 0">46.POST PRODUCTION AVEC LE FRAME BUFFER DE V-RAY</h5> 
                    <h5 style="padding:8px 0">47.POST PRODUCTION AVEC LES ÉLÉMENTS DE RENDU</h5> 
                    <h5 style="padding:8px 0">48.POST PRODUCTION AVEC LE FILTRE CAMERA RAW</h5> 
                    <h5 style="padding:8px 0">49.POST PRODUCTION CRYPTOMATTE</h5> 
                    <h5 style="padding:8px 0">50.AJOUTER DES FILTRES DANS PHOTOSHOP</h5> 
                    <h5 style="padding:8px 0">51.CONFIGURATION DE L’ÉCLAIRAGE VOLUMÉTRIQUE AVEC PS</h5> 
                    <h5 style="padding:8px 0">52.CONFIGURATION DE L’ÉCLAIRAGE VOLUMÉTRIQUE AVEC RAY 2 .0</h5>  
                    
                </ol>
            </li>
            <li>
                <h2>MODULE 15 : ANIMATION VIDEO AVEC LE CHAOS VANTAGE </h2>
                {{-- <ol style="padding-top: 15px">
                    <h5 style="padding:8px 0">55.INTERFACE DU CHAOS VANTAGE</h5> 
                    <h5 style="padding:8px 0">56.ANIMATION VIDEO AVEC CHAOS VANTAGE</h5>        
                </ol> --}}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Blockquote-->
  <section class="section section-md bg-white">
    <div class="shell">
      <div class="range range-50">
        <div class="cell-md-10 cell-lg-8">
          <h2>Besion de plus de formation ?</h2>
          <article class="quote-primary">
            <div class="quote-primary__body">
             
              <div class="quote-primary__text">
                <p class="q"><a href="{{route('contact')}}">Contactez-moi</a> pour posez vos questions</p>
              </div>
            </div>
            <div class="quote-primary__footer">
              <p class="heading-4 quote-primary__cite">{{config('app.name')}}</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- HTML Text Elements-->
 

  <!-- Unordered List-->
 

  <!-- Ordered List-->
 

  <!-- Icon List-->
 

  <!-- Image Centered-->


  <!-- Image Left-->


  <!-- Image Right-->
  @include('includes.footer')
</div>   
@endsection