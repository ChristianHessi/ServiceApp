<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', "ITGStore")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link rel="icon" type="image/png" href="{{asset('spectra.jpg')}}" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/mamba/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/mamba/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/mamba/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('template-user/mamba/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template-user/mamba/assets/css/style.css')}}" rel="stylesheet">


  <script src="{{asset('tinymce.min.js')}}"> </script>
  <script src="{{asset('intelphone/build/js/intlTelInput.js')}}"> </script>
  <link rel="stylesheet" href="{{asset('intelphone/build/css/intlTelInput.css')}}">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="{{asset('js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css')}}">
  <script src="{{asset('js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js')}}"> </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
  </script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<link href="{{asset('template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">


  <link rel="stylesheet" href="{{asset('css/template_base.css')}}">

  <!-- =======================================================
  * Template Name: Mamba - v2.5.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #F7F7F8;">

  <!-- ======= Top Bar ======= -->


  <!-- ====== Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light">
            <a href="{{route('change_your_parameters')}}">

                <img src="{{asset('spectra.jpg')}}" alt="logo SPECTRA" />
            </a>
        </h1>

      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
        <li class="drop-down">
            <a href="#">
                {{Auth::user()->surname}}
            </a>
            <ul>
                @can('change_profile')
                    <li><a href="{{route('change_your_parameters')}}" class="eltnav"> @lang('lang.profil') </a></li>
                @endcan
                @can('logout')
                    <li><a href="{{route('logout')}}">@lang('lang.logout')</a></li>
                @endcan
            </ul>
        </li>
        @can('change_language')
            <li class="drop-down">
                <a href="#">
                    <i class="fa fa-user-circle"></i>
                    @if (session("selected_language") == "en")
                        @lang('lang.en')
                    @else
                        @lang('lang.fr')
                    @endif
                </a>
                <ul>
                    <li><a tabindex="-1" href="{{route('change_language', ['lang' => 'en'])}}">@lang('lang.en')</a></li>
                    <li><a tabindex="-1" href="{{route('change_language', ['lang' => 'fr'])}}">@lang('lang.fr')</a></li>
                </ul>
            </li>
        @endcan
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main" style="background-color: #F7F7F7">

    <!--<section class="breadcrumbs" >-->
    <section class="section">
        <div class="">
            @yield('content')


        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('template-user/mamba/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template-user/mamba/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template-user/mamba/assets/js/main.js')}}"></script>

  @include('message_type')
</body>

</html>
