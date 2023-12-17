<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backend/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/index.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <!-- endinject -->
 
  <link rel="shortcut icon" href="{{asset('backend/images/logo_2H_tech.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('includes.navbar1')
    <!-- partial -->
    

     <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       {{-- @include('includes.navbar2') --}}
        <!-- partial -->
        {{-- @yield('content') --}}
        <div class="main-panel">
            <div class="content-wrapper">
        
             
            {{----------------------- carossel -----------------}}
              <div class="card" style="margin-top: 20px">
                <div class="card-body">
                  <h4 class="card-title">Liste de Newspaper nombres({{$newspapers->count()}})</h4>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr>
                                <th>Order </th>
                                <th>Email </th>
                                
                            </tr>
                          </thead>
                          <tbody>
                            <li style="visibility: hidden">{{$increment=1}}</li>
                            @forelse ($newspapers as $newspaper)
                            <tr>
                                <td>{{$increment}}</td>
                                <td>{{$newspaper->email}}</td>
                                
                            </tr>
                            <li style="visibility: hidden">{{$increment+=1}}</li>
                            @empty
                               <tr>
                                <td>Pas encore d'inscript</td>
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
        
        <!-- main-panel ends -->
      </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('backend/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('backend/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/template.js')}}"></script>
  <script src="{{asset('backend/js/settings.js')}}"></script>
  <script src="{{asset('backend/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  <!-- Custom js for this page-->
  {{-- <script src="backend/js/form-validation.js"></script>
  <script src="backend/js/bt-maxLength.js"></script> --}}
  <!-- End custom js for this page-->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/data-table.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

