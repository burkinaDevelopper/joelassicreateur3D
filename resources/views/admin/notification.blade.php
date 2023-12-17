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
              <h4 class="card-title">Envoie de mail aux newspaper</h4>
              <form class="cmxform" id="commentForm" method="POST" action="{{route('marketingStore')}}" >
                @csrf
                <fieldset>
                  <div class="form-group">
                    <label for="cname">Sujet</label>
                    <input id="cname" class="form-control" name="sujet" minlength="2" placeholder="Rendu&Resto" type="text" required >
                    @error('sujet')
                        <div  style="color: red">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cname">salutation</label>
                    <input id="cname" class="form-control" name="salutation" minlength="2" type="text" required placeholder="Bienvemu par exemple">
                    @error('salutation')
                    <div  style="color: red">{{$message}}</div>
                    @enderror   
                  </div> 
                  <div class="form-group">
                    <label for="cname"  >Message</label>
                    <textarea name="message" id="cname" cols="30" rows="10" placeholder="20mots maximun" class="form-control"></textarea>
                    @error('message')
                    <div  style="color: red">{{$message}}</div>
                    @enderror   
                  </div> 
                  
                  <input class="btn btn-primary" type="submit" value="Envoyer">
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