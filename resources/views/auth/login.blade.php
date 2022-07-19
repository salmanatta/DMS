<!DOCTYPE html>
<html lang="en">
<head>
    <title>PIC-DMS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/themes/semi-dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/responsive.bootstrap5.min.css') }}">    
    <link rel="stylesheet" type="text/css" href="{{ url('/resources/css/authentication.css') }}">

</head>
 <!-- BEGIN: Body-->
 <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-basic px-2">
  <div class="auth-inner my-2">
    <!-- Login basic -->
    <div class="card mb-0">
      <div class="card-body">        
          <h2 class="brand-text text-primary ms-1" style="text-align: center">PIC-DMS</h2>        

        <form class="auth-login-form mt-2" action="{{ route('login') }}" method="POST">
            @csrf
          <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control @error('email') is-invalid @enderror"
              id="email"
              value="{{ old('email') }}"
              name="email"
              placeholder="john@example.com"
              aria-describedby="email"
              tabindex="1"
              autofocus
              required
            />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
              <a href="auth-forgot-password-basic.html">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                id="password"
                name="password"
                tabindex="2"                
                aria-describedby="password"                
              />
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
               </span>
             @enderror
              
            </div>
          </div>
          <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
              <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>
        </form>
      </div>
    </div>
    <!-- /Login basic -->
  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->
    <script src="{{ url('/resources/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ url('/resources/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ url('/resources/vendors/js/extensions/toastr.min.js') }}"></script>    
    <script src="{{ url('/resources/js/core/app-menu.min.js') }}"></script>
    <script src="{{ url('/resources/js/core/app.min.js') }}"></script>
    <script src="{{ url('/resources/js/scripts/customizer.min.js') }}"></script>
    <script src="{{ url('/resources/js/custom-js.js')}}"></script>        
    <script src="{{ url('/resources/js/responsive.bootstrap5.js')}}"></script>
    <script src="{{ url('/resources/js/sweetalert2.all.min.js')}}"></script>
    <script src="{{ url('/resources/js/auth-login.js')}}"></script>
    
    
    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>
