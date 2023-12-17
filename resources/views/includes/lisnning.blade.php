@extends('layouts.admin-main')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      

      @if (! empty(session('success')))
          <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ajouter rendu interieur</h4>
              <form class="cmxform" id="commentForm" method="POST" action="{{route('store.rendu',[$rendu->id])}}" enctype="multipart/form-data">
                @csrf
                <fieldset>
                  <div class="form-group">
                    <label for="cname">Titre</label>
                    <input id="cname" class="form-control" name="title" minlength="2" placeholder="Rendu&Resto" value="{{old('title',$rendu->title)}}" type="text" required  >
                    @error('title')
                        <div  style="color: red">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cname">Image</label>
                    <input id="cname" class="form-control" name="image" minlength="2" type="file" required>
                    @error('image')
                    <div  style="color: red">{{$message}}</div>
                    @enderror
                  </div>
                  
                  <input class="btn btn-primary" type="submit" value="Modifier">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>

      
    
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection