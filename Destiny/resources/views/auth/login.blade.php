

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <title>Login</title>
    <style>
        .input {
            border: none;
            outline: none;
            border-radius: 20px;
            padding: 1em;
            background-color: #102ef3;
            box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
            transition: 300ms ease-in-out;
        }
        .input:focus {
            background-color: white;
            transform: scale(1.05);
            box-shadow: 13px 13px 100px #969696,-13px -13px 100px #ffffff;
        }
        .btn{
            border-radius: 20px;
        }

        .section-title {
            text-align: center;
            padding: 30px 0;
            /* position: relative; */
            position: relative;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);



        }
        .section-title h4 {
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 0;
            color: #070707;
            position: relative;
            z-index: 2;
        }

        .section-title span{
            position: absolute;
                top: 30px;
                color: #f3f5f5;
                left: 0;
                right: 0;
                z-index: 1;
                font-weight: 600;
                font-size: 52px;
                text-transform: uppercase;
                line-height: 0;
            }
    </style>
</head>
<body>

    <section class="vh-100" style="background-color: #90674C;">
        <div class="container  h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10" >
              <div class="card " style="border-radius: 1rem; " >
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block" >

                    <img src="{{asset('mesImages/theme/t1.jpg')}}"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="d-flex align-items-center mb-3 pb-1">
                            <img class="" src="{{asset('mesImages/Jym.png')}}" alt="" height="80" width="80">&ensp;
                        </div>




                        <div class="section-title">
                            <span>Longin</span>
                            <h4 class="">Longin</h4>
                        </div>

                        <div class="mb-4">
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                        </div>

                        <div class="form-outline mb-4">
                            {{-- <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> --}}

                          <input type="email" id="email" class=" input form-control form-control-lg"  for="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Entrez votre @ Email"/>
                          {{-- <label class="form-label"  for="email" value="{{ __('Email') }}">Email address</label> --}}
                        </div>

                        <div class="form-outline ">
                          <input type="password"  id="password" name="password" required autocomplete="current-password" class=" input form-control form-control-lg" placeholder="Entrez votre Password ****" />
                          {{-- <label class="form-label" for="form2Example27">Password</label> --}}
                        </div>
                        <div class="form-outline pl-5 mb-3 pt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ __('Remember me') }}
                            </label>
                        </div>



                        <div class="pt-1 mb-3">

                            <div class="col-md-3 m-auto pb-2">
                                <button class="btn btn-dark btn-lg btn-block " type="submit">{{ __('Log in') }}</button>
                            </div>

                             @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>

                            @endif
                            <p class=" pt-2 mb-5 pb-lg-2" style="color: #393f81;">Don't have an account ?&ensp;<a href="./register"
                                style="color: #393f81;">Creer un Compte</a></p>
                        </div>


                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>










    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
</body>
</html>
