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
              <form class="cmxform" id="commentForm" method="POST" action="{{route('post.interieur')}}" enctype="multipart/form-data">
                @csrf
                <fieldset>
                  <div class="form-group">
                    <label for="cname">Titre</label>
                    <input id="cname" class="form-control" name="title" minlength="2" placeholder="Rendu&Resto" type="text" required >
                    @error('title')
                        <div  style="color: red">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cname">description</label>
                    <input id="cname" class="form-control" name="description" minlength="2" type="text" required placeholder="20mots maximun">
                    @error('description')
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
                  
                  <input class="btn btn-primary" type="submit" value="Ajouter">
                </fieldset>
              </form>
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