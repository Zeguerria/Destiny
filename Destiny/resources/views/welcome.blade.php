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
        .section{
            margin: 0;
            padding:0;

            width: 100%;
            height: 100vh;
        }
        .back-video{

            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;

        }
        .section-title {
            text-align: center;
            padding: 30px 0;
            /* position: relative; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);



        }
        .section-title h3{
             font-size: 80px;
            font-weight: 400;

            margin-bottom: 20px;
            padding-bottom: 0;
            color: #354144;
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
        /* .section-title h4 {
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 0;
            color: #354144;
            position: relative;
            z-index: 2;
        } */

        .section-title h2 {
            font-size: 100px;
            font-weight: 900;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 0;
            color: #070707;
            position: relative;
            z-index: 2;
        }
        /* .bienvenu{
            font-size: 50px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 0;
            color: #354144;
            position: relative;
            z-index: 2;

        } */



    </style>
</head>
<body>
    <section >
        <div class="container-fluid">
            <div class="row">
                <div class="">
                    <div class="banner">
                        <video autoplay muted loop plays-inline class="back-video "> <source src="{{asset('videos/v4.mp4')}}" type="video/mp4" >
                        </video>
                    </div>
                </div>
                <div>
                    <div class="section-title">

                       <h3>Bienvenu a </h3>
                        <h2 class="pb-5"><span><b>D</b><small>estiny</small></h2>
                            <br>
                        @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn bg-success text-black"><i class="fas fa-sign-in-alt"></i>&ensp;Connexion</a>

                                    {{-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn text-black"><i class="fas fa-user-plus"></i>&ensp;Register</a>
                                    @endif --}}
                                @endauth
                            </div>
                        @endif
                    </div>
                    {{-- <div>
                        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
                            @if (Route::has('login'))
                                <div class="">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn text-black"><i class="fas fa-sign-in-alt"></i>&ensp;Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn text-black"><i class="fas fa-user-plus"></i>&ensp;Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif





                        </div>

                    </div> --}}

                </div>





                {{-- <div class="col-8 slogan">
                    <div class="section-title">
                        <span>Stay Focus</span>
                        <h4 class="">Stay Focus,<br> Work Hard,<br>Stay humble !!</h4>
                        <span class="pt-4"> Work Hard</span>
                        <br>
                    </div>

                </div> --}}
                {{-- <div class="" >
                    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                              <a class="navbar-brand" href="#">
                                <img src="{{asset('mesImages/theme/t1.jpg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top img-circle">
                                &ensp;Nom de L'Application
                              </a>
                            </div>
                          </nav>
                        @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif





                    </div>
                </div> --}}
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

