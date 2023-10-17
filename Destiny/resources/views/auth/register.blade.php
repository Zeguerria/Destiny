{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="prenom" value="{{ __('Prenom') }}" />
                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="Prenom" />
            </div>

            <div>
                <x-label for="pseudo" value="{{ __('Pseudo') }}" />
                <x-input id="pseudo" class="block mt-1 w-full" type="text" name="pseudo" :value="old('pseudo')" required autofocus autocomplete="Pseudo" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            photo est en commentaire
             <div>
                <x-label for="profile_photo_path" value="{{ __('photo') }}" />
                <x-input id="profile_photo_path" class="block mt-1 w-full" type="file" name="profile_photo_path" :value="old('profile_photo_path')" required autofocus autocomplete="Photo" />
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

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
    <title>Register</title>
    <style>
        .section {
                height: 100vh;
            }
            .rounded-t-5 {
              border-top-left-radius: 0.5rem;
              border-top-right-radius: 0.5rem;
            }

            @media (min-width: 992px) {
              .rounded-tr-lg-0 {
                border-top-right-radius: 0;
              }

              .rounded-bl-lg-5 {
                border-bottom-left-radius: 0.5rem;
              }
            }
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
    {{-- <section class="vh-100">



    <div class="card mb-3">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-5 d-none d-lg-flex" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ; background-position: center; background-size: cover; background-repeat: no-repeat;">
                <img src="{{asset('mesImages/theme/t1.jpg')}}" alt="Trendy Pants and Shoes"
                  class="img-fluid" height="100"/>
              </div>
              <div class="col-lg-7">
                <div class="card-body py-5 px-md-5">

                  <h3 class="pb-5">Creer un Utilisateur</h3>

                  <form   method="POST" action="{{ route('register') }}">
                      @csrf
                    <div class="form-outline mb-4 ">
                      <div class="container-fluid">
                          <div class="row ">
                              <div class="form-outline mb-4  col-md-6">
                                  <label class="form-label d-flex" for="form2Example1">Nom</label>
                                  <input type="text" id="name" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                              </div>
                              <div class="form-outline mb-4  col-md-6">
                                  <label class="form-label d-flex" for="form2Example1">Prenom</label>
                                  <input type="text" id="prenom" class="form-control" name="prenom" :value="old('prenom')" required autofocus autocomplete="Prenom"/>
                              </div>
                              <div class="form-outline mb-4  col-md-6">
                                  <label class="form-label d-flex" for="form2Example1">Pseudo</label>
                                  <input type="text" id="pseudo" class="form-control"  name="pseudo" :value="old('pseudo')" required autofocus autocomplete="Pseudo"/>
                              </div><div class="form-outline mb-4  col-6">
                                  <label class="form-label d-flex" for="form2Example1">Email</label>
                                  <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autocomplete="username" />
                              </div><div class="form-outline mb-4  col-6">
                                  <label class="form-label d-flex" for="form2Example1">Password</label>
                                  <input type="password" id="password" class="form-control" name="password" required autocomplete="new-password"/>
                              </div>
                              <div class="form-outline mb-4  col-6">
                                  <label class="form-label d-flex" for="form2Example1">Confirm Password</label>
                                  <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                              </div>

                          </div>
                          <div class="col">
                              @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                  <div class="mt-4">
                                      <label for="terms">
                                          <div class="flex items-center">
                                              <x-checkbox name="terms" id="terms" required />

                                              <div class="ml-2">
                                                  {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                          'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                          'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                  ]) !!}
                                              </div>
                                          </div>
                                      </label>
                                  </div>
                              @endif

                          </div>

                      </div>
                      <div class="container-fluid">
                      </div>
                      <div class="row  justify-content-center">
                          <div class="btn-group">
                              <div class="d-flex">
                                  <p>
                                      J'ai deja un Compte, Me&ensp;
                                      <a href="./login">Connecter</a>
                                  </p>
                              </div>

                              &ensp;
                              <div class="col-4 ">
                                  <button type="submit" class="btn btn-primary btn-block mb-4">{{ __('Register') }}</button>
                              </div>


                          </div>

                      </div>



                    </div>

                    <!-- Submit button -->


                  </form>
                </div>

              </div>
        </div>
    </div>

    </section> --}}



    <section class="vh-100" style="background-color: #90674C;">
        <div class="container  h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10" >
              <div class="card " style="border-radius: 1rem; " >
                <div class="row g-0">
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-3 p-lg-5 text-black">
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <img class="" src="{{asset('mesImages/Jym.png')}}" alt="" height="80" width="80">&ensp;

                              </div>
                              <div class="section-title">
                                  <span>Register</span>
                                  <h4 class="">Register</h4>
                              </div>
                            <form   method="POST" action="{{ route('register') }}">
                                @csrf
                              <div class="form-outline mb-4 ">
                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="form-outline mb-4  col-md-6">
                                            <input type="text" id="name" class="form-control input" placeholder="Entrez votre Nom" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                                        </div>
                                        <div class="form-outline mb-4  col-md-6">
                                            <input type="text" id="prenom" class="form-control input" placeholder="Entrez votre Prenom" name="prenom" :value="old('prenom')" required autofocus autocomplete="Prenom"/>
                                        </div>
                                        <div class="form-outline mb-4  col-md-6">
                                            <input type="text" id="pseudo" class="form-control input" placeholder="Entrez votre Pseudo"  name="pseudo" :value="old('pseudo')" required autofocus autocomplete="Pseudo"/>
                                        </div><div class="form-outline mb-4  col-6">
                                            <input type="email" id="email" class="form-control input" placeholder="Entrez votre Email" name="email" :value="old('email')" required autocomplete="username" />
                                        </div><div class="form-outline mb-4  col-6">
                                            <input type="password" id="password" class="form-control input" placeholder="Entrez votre Password" name="password" required autocomplete="new-password"/>
                                        </div>
                                        <div class="form-outline mb-4  col-6">
                                            <input type="password" id="password_confirmation" class="form-control input" placeholder="Confirmez votre Password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>

                                    </div>
                                    <div class="col">
                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                            <div class="mt-4">
                                                <label for="terms">
                                                    <div class="flex items-center">
                                                        <x-checkbox name="terms" id="terms" required />

                                                        <div class="ml-2">
                                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                            ]) !!}
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        @endif

                                    </div>

                                </div>
                                <div class="container-fluid">
                                </div>
                                <div class="row  justify-content-center">
                                    <div class="btn-group">
                                        &ensp;
                                        <div class="col-12 ">
                                            <button type="submit" class="btn btn-primary btn-block mb-4">{{ __('Register') }}</button>
                                        </div>
                                    </div>



                                </div>

                                <div class="">
                                    <p>
                                        J'ai deja un Compte, Me&ensp;
                                        <a href="./login">Connecter</a>
                                    </p>
                                </div>



                              </div>

                              <!-- Submit button -->


                            </form>

                        </div>
                      </div>

                  <div class="col-md-6 col-lg-5 d-none d-md-block" >

                    <img src="{{asset('mesImages/theme/t1.jpg')}}"
                      alt="login form" class="img img-fluid rounded" style="border-radius: 1rem 0 0 1rem;" />
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
    </section>








    {{-- <section class=" vh-100 text-center text-lg-start">
        <style>
          .rounded-t-5 {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
          }

          @media (min-width: 992px) {
            .rounded-tr-lg-0 {
              border-top-right-radius: 0;
            }

            .rounded-bl-lg-5 {
              border-bottom-left-radius: 0.5rem;
            }
          }
        </style>
        <div class="card mb-3">
          <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-5 d-none d-lg-flex">
              <img src="{{asset('mesImages/theme/t1.jpg')}}" alt="Trendy Pants and Shoes"
                class="w-80 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5 img-fluid" />
            </div>
            <div class="col-lg-7">
              <div class="card-body py-5 px-md-5">

                <h3 class="pb-5">Creer un Utilisateur</h3>

                <form   method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="form-outline mb-4 ">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="form-outline mb-4  col-md-6">
                                <label class="form-label d-flex" for="form2Example1">Nom</label>
                                <input type="text" id="name" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                            </div>
                            <div class="form-outline mb-4  col-md-6">
                                <label class="form-label d-flex" for="form2Example1">Prenom</label>
                                <input type="text" id="prenom" class="form-control" name="prenom" :value="old('prenom')" required autofocus autocomplete="Prenom"/>
                            </div>
                            <div class="form-outline mb-4  col-md-6">
                                <label class="form-label d-flex" for="form2Example1">Pseudo</label>
                                <input type="text" id="pseudo" class="form-control"  name="pseudo" :value="old('pseudo')" required autofocus autocomplete="Pseudo"/>
                            </div><div class="form-outline mb-4  col-6">
                                <label class="form-label d-flex" for="form2Example1">Email</label>
                                <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autocomplete="username" />
                            </div><div class="form-outline mb-4  col-6">
                                <label class="form-label d-flex" for="form2Example1">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required autocomplete="new-password"/>
                            </div>
                            <div class="form-outline mb-4  col-6">
                                <label class="form-label d-flex" for="form2Example1">Confirm Password</label>
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                        </div>
                        <div class="col">
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox name="terms" id="terms" required />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            @endif

                        </div>

                    </div>
                    <div class="container-fluid">
                    </div>
                    <div class="row  justify-content-center">
                        <div class="btn-group">
                            <div class="d-flex">
                                <p>
                                    J'ai deja un Compte, Me&ensp;
                                    <a href="./login">Connecter</a>
                                </p>
                            </div>

                            &ensp;
                            <div class="col-4 ">
                                <button type="submit" class="btn btn-primary btn-block mb-4">{{ __('Register') }}</button>
                            </div>


                        </div>

                    </div>



                  </div>

                  <!-- Submit button -->


                </form>
              </div>

            </div>
            </div>
          </div>
        </div>
    </section> --}}
      <!-- Section: Design Block -->











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
