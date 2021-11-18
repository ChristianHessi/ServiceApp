<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('logo1.png')}}" />

    <script src="{{asset('tinymce.min.js')}}"> </script>
    <script src="{{asset('intelphone/build/js/intlTelInput.js')}}"> </script>
    <link rel="stylesheet" href="{{asset('intelphone/build/css/intlTelInput.css')}}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title', " ITGStore Quality Application Base") </title>

    <!-- Bootstrap -->
    <link href="{{asset('template-admin/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('template-admin/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet')}}">
    <!-- iCheck -->
    <link href="{{asset('template-admin/gentelella-master/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('template-admin/gentelella-master/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('template-admin/gentelella-master/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('template-admin/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('template-admin/gentelella-master/build/css/custom.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/datatables.min.css"/>



    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css')}}">
    <script src="{{asset('js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js')}}"> </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
    </script>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />



    <link rel="stylesheet" href="{{asset('css/template_base.css')}}">
    <style type="text/css">
        .btn-info{
            background-color: #007BFF !important;
        }
        .text{
            color: white !important;
        }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" >
          <div class="left_col scroll-view" style="background-color: #8A2BE2 !important;">
            <div class="navbar nav_title" style="border: 0;">
              <!--<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>-->
              <a href="{{route('view_dashboard')}}" class="site_title text"> <!--<img src="{{asset('logo1.png')}}" style="height: 34px;" />-->  <span>SPECTRA BEAUTE</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('avatar-user/'.Auth::user()->url_avatar)}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span  class="text">Welcome,</span>
                <h2 class="text">{{ ucfirst(Auth::user()->surname)}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu"  class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!--<h3>General</h3>-->
                <ul class="nav side-menu" >
                    @if (Auth::user()->can('view_dashboard'))
                        <li><a href="{{route('view_dashboard')}}" class="text"><i class="fa fa-pie-chart"></i> @lang('lang.dashboard')</a>
                        </li>
                    @endif


                    @if (Auth::user()->can('view_notification_type') || Auth::user()->can('view_notification_template'))
                        <li><a><i class="glyphicon glyphicon-envelope"></i> @lang('lang.notif_manage') <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                @can('view_notification_type')
                                    <li><a href="{{route('all_email_type_page')}}">@lang('lang.email_type_onglet')</a></li>
                                @endcan
                                @can('view_notification_template')
                                <li><a href="{{route('all_email_template_page')}}">@lang('lang.email_tmp_onglet')</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endif

                    @if (Auth::user()->can('view_logging'))
                        <li><a href="{{route('all_logs')}}"><i class="fa fa-book"></i> @lang('lang.log_ongl')</a>
                        </li>
                    @endif

                    @if (Auth::user()->can('view_user') || Auth::user()->can('view_role'))
                        <li><a><i class="glyphicon glyphicon-cog"></i> @lang('lang.admin')<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                @can('view_user')
                                    <li><a href="{{route('all_users')}}">@lang('lang.users')</a></li>
                                @endcan

                                @can('view_role')
                                    <li><a href="{{route('all_role')}}">@lang('lang.roles_onglet')</a></li>
                                @endcan

                            </ul>
                        </li>
                    @endif

                    @if (Auth::user()->can('view_service') || Auth::user()->can('view_custumer') || Auth::user()->can('view_all_prestation') || Auth::user()->can('view_only_prestation'))
                        <li><a><i class="glyphicon glyphicon-gift"></i> @lang('lang.admin_service')<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                @can('view_custumer')
                                    <li><a href="{{route('all_custumers')}}">@lang('lang.custumers')</a></li>
                                @endcan

                                @can('view_service')
                                    <li><a href="{{route('all_services')}}">@lang('lang.services')</a></li>
                                @endcan

                                @can('view_all_prestation')
                                    <li><a href="{{route('all_prestations')}}">@lang('lang.prestations')</a></li>
                                @endcan

                                @can('view_only_prestation')
                                    <li><a href="{{route('only_prestations')}}">@lang('lang.my_prestation')</a></li>
                                @endcan

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer  hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="{{ __('lang.logout')}}" href="{{route('logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav" >
          <div class="nav_menu" style="background-color: blueviolet !important; color: white !important;">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>

              </div>
              <nav class="nav navbar-nav">
                <!--<div>
                    @yield('fail_chanel', "Dashboard")

                <div>-->
                <!--<ul class=" navbar-left">
                    <li> Hello </li>
                </ul>-->
              <ul class=" navbar-right">

                @can('change_language')
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false" style="color: white !important;">
                            <span class="glyphicon glyphicon-globe"> </span>
                            @if (session("selected_language") == "en")
                                @lang('lang.en')
                            @else
                                @lang('lang.fr')
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"   href="{{route('change_language', ['lang' => 'en'])}}"> @lang('lang.en')</a>
                        <a class="dropdown-item"   href="{{route('change_language', ['lang' => 'fr'])}}"> @lang('lang.fr')</a>
                        </div>
                    </li>
                @endcan


                @if (Auth::user()->can('change_profile')  || Auth::user()->can('logout'))
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false" style="color: white !important;">
                        <span class="glyphicon glyphicon-user"> </span>{{ucfirst(Auth::user()->surname)}}
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

                        @can('change_profile')
                            <a class="dropdown-item"  href="{{route('change_your_parameters')}}"> @lang('lang.profil')</a>
                        @endcan

                        @can('logout')
                            <a class="dropdown-item"  href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> @lang('lang.logout')</a>
                        @endcan
                        </div>
                    </li>
                @endif
              </ul>
            </nav>
            {{--@yield('fail_chanel', "Dashboard")--}}
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="ml-3  mr-3">
                <div class="row pt-2 pb-2" style="background-color: white;">
                    @yield('fail_chanel', "Dashboard")
                </div>
            </div> <br> <br>
            <!-- use the user function controller -->


          <!-- top tiles -->
            @yield('content')
          <!-- /top tiles -->


        </div>

        <div id="message">
            @include('message_type')
        </div>
      </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/datatables.min.js"></script>

    <!-- jQuery -->
    <script src="{{asset('template-admin/gentelella-master/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('template-admin/gentelella-master/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('template-admin/gentelella-master/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('template-admin/gentelella-master/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('template-admin/gentelella-master/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('template-admin/gentelella-master/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('template-admin/gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('template-admin/gentelella-master/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('template-admin/gentelella-master/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('template-admin/gentelella-master/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('template-admin/gentelella-master/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('template-admin/gentelella-master/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('template-admin/gentelella-master/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('template-admin/gentelella-master/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('template-admin/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('template-admin/gentelella-master/build/js/custom.min.js')}}"></script>




    @yield('script-content')


  </body>
</html>
