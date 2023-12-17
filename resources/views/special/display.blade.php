@extends('layouts.admin-main')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Rendu fix</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order </th>
                        <th>Titre</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <li style="visibility: hidden">{{$increment=1}}</li>
                    <tr>
                        <td>{{$increment}}</td>
                        <td>{{$rendu7->title}}</td>
                        <td><img src="{{$rendu7->url}}" alt=""></td>
                        <td>
                          <button class="btn btn-outline-primary" onclick="window.location='{{route('update.rendu',[$rendu7->id])}}'">Edite</button>
                        </td>
                    </tr>
                    <tr>
                        <td>{{$increment+1}}</td>
                        <td>{{$rendu8->title}}</td>
                        <td><img src="{{$rendu8->url}}" alt=""></td>
                        <td>
                          <button class="btn btn-outline-primary" onclick="window.location='{{route('update.rendu',[$rendu8->id])}}'">Edite</button>
                        </td>
                    </tr>
                    <tr>
                        <td>{{$increment+2}}</td>
                        <td>{{$rendu9->title}}</td>
                        <td><img src="{{$rendu9->url}}" alt=""></td>
                        <td>
                          <button class="btn btn-outline-primary" onclick="window.location='{{route('update.rendu',[$rendu9->id])}}'">Edite</button>
                        </td>
                    </tr>
                    <li style="visibility: hidden">{{$increment+=1}}</li>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    {{----------------------- carossel -----------------}}
      <div class="card" style="margin-top: 20px">
        <div class="card-body">
          <h4 class="card-title">Rendu deroulant(ajouter 3rendu minimum)</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order </th>
                        <th>Image</th>
                        <th>title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <li style="visibility: hidden">{{$increment=1}}</li>
                    @forelse ($specials as $special)
                    <tr>
                        <td>{{$increment}}</td>
                        <td><img src="{{$special->url}}" alt="{{$special->title}}"></td>
                        <td>{{$special->title}}</td>
                        <td ><span id="description">{{$special->description}}</span></td>
                        <td>
                          <button class="btn btn-outline-primary" onclick="window.location='{{route('edit.special',[$special->id])}}'">Edite</button>
                          <button class="btn btn-outline-danger"> <a href="{{route('delete.special',[$special->id])}}">Delete</a></button> 
                        </td>
                    </tr>
                    <li style="visibility: hidden">{{$increment+=1}}</li>
                    @empty
                       <tr>
                        <td>Pas de rendu</td>
                    </tr> 
                    @endforelse
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    @include('includes.footer-admin')
    <!-- partial -->
  </div>
@endsection