@extends('template_back_office')

@section('title', 'Dashboard')
@section('fail_chanel')
    <a href="{{route('view_dashboard')}}"> <b> @lang('lang.dashboard') </b></a>
@endsection

@section('content')
    <style>
            .dash{
                width: 270px;
                background-color: white;
                border: 9px;
                border-color: blueviolet;

            }
    </style>


        <div class="row">

            <div class="m-2 p-4 col-md-3 col-sm-4 dash shadow">
               <div style="font-size: 20px;">
                    <span class="count_top"><i class="fa fa-user"></i> @lang('lang.total_prestation')</span>
               </div>
                <h2 class="count">{{$total_prestations}}</h2>
            </div>

            <div class="m-2 p-4 col-md-4 col-sm-4 dash shadow">
                <div style="font-size: 20px;">
                     <span class="count_top"><i class="fa fa-user"></i> @lang('lang.total_custumer')</span>
                </div>
                <h2 class="count">{{$total_custumers}}</h2>
            </div>

            <div class="m-2 p-4 col-md-4 col-sm-4 dash shadow">
                <div style="font-size: 20px;">
                     <span class="count_top"><i class="fa fa-user"></i> @lang('lang.total_user_active')</span>
                </div>
                <h2 class="count">{{$total_users}}</h2>
            </div>

        </div> <br> <br>
    <!--</div>-->


    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2> @lang('lang.evol_record')</h2>
              <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
              </ul>
              <!--<div class="filter">
                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                </div>
              </div>-->
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_content">
                    <div class="demo-container" style="height:250px">
                        <div id="chart_plot_03" class="demo-placeholder"></div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>




    @section('script-content')


        <script>
            //$(document).ready(function () {

                //alert('ok1');

                function init_flot_chart() {

                    /*var arr_data3 = [
                        [0, 1],
                        [1, 9],
                        [2, 6],
                        [3, 10],
                        [4, 5],
                        [5, 17],
                        [6, 6],
                        [7, 10],
                        [8, 7],
                        [9, 11],
                        [10, 35],
                        [11, 9],
                        [12, 12],
                        [13, 5],
                        [14, 3],
                        [15, 4]
                        //[16, 9]
                    ];*/

                    /*var chart_plot_03_data = [
                        [0, 1],
                        [1, 9],
                        [2, 6],
                        [3, 10],
                        [4, 5],
                        [5, 17],
                        [6, 6],
                        [7, 10],
                        [8, 7],
                        [9, 11],
                        [10, 35],
                        [11, 9],
                        [12, 12],
                        [13, 5],
                        [14, 3]
                        //[15, 4]
                        //[16, 9]
                    ];*/

                    //var chart_plot_03_data = {!! json_encode($array_dashboard, JSON_HEX_TAG) !!};


                    /*var chart_plot_03_data = [
                        [gd(2012, 1, 1), 82],
                        [gd(2012, 1, 2), 23],
                        [gd(2012, 1, 3), 66],
                        [gd(2012, 1, 4), 9],
                        [gd(2012, 1, 5), 119],
                        [gd(2012, 1, 6), 6],
                        [gd(2012, 1, 7), 9]
                    ];*/

                    //$var = {!! json_encode($array_dashboard, JSON_HEX_TAG) !!};

                    var chart_plot_03_data = [
                        //1
                        [gd(
                            {!! json_encode($array_dashboard[0][0], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[0][1], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[0][2], JSON_HEX_TAG) !!}
                            ),
                              {!! json_encode($array_dashboard[0][3], JSON_HEX_TAG) !!}
                        ],

                        //2
                        [gd(
                            {!! json_encode($array_dashboard[1][0], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[1][1], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[1][2], JSON_HEX_TAG) !!}
                            ),
                              {!! json_encode($array_dashboard[1][3], JSON_HEX_TAG) !!}
                        ],

                        //3
                        [gd(
                            {!! json_encode($array_dashboard[2][0], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[2][1], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[2][2], JSON_HEX_TAG) !!}
                            ),
                              {!! json_encode($array_dashboard[2][3], JSON_HEX_TAG) !!}
                        ],

                        //4
                        [gd(
                            {!! json_encode($array_dashboard[3][0], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[3][1], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[3][2], JSON_HEX_TAG) !!}
                            ),
                              {!! json_encode($array_dashboard[3][3], JSON_HEX_TAG) !!}
                        ],

                        //5
                        [gd(
                            {!! json_encode($array_dashboard[4][0], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[4][1], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[4][2], JSON_HEX_TAG) !!}
                            ),
                              {!! json_encode($array_dashboard[4][3], JSON_HEX_TAG) !!}
                        ],

                        //6
                        [gd(
                            {!! json_encode($array_dashboard[5][0], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[5][1], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[5][2], JSON_HEX_TAG) !!}
                            ),
                              {!! json_encode($array_dashboard[5][3], JSON_HEX_TAG) !!}
                        ],

                        //7
                        [gd(
                            {!! json_encode($array_dashboard[6][0], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[6][1], JSON_HEX_TAG) !!},
                             {!! json_encode($array_dashboard[6][2], JSON_HEX_TAG) !!}
                            ),
                              {!! json_encode($array_dashboard[6][3], JSON_HEX_TAG) !!}
                        ],

                    ]

                    var chart_plot_03_settings = {
                        series: {
                            curvedLines: {
                                apply: true,
                                active: true,
                                monotonicFit: true
                            }
                        },
                        colors: ["#26B99A"],
                        grid: {
                            borderWidth: {
                                top: 0,
                                right: 0,
                                bottom: 1,
                                left: 1
                            },
                            borderColor: {
                                bottom: "#7F8790",
                                left: "#7F8790"
                            }
                        },
                        xaxis: {
                            mode: "time",
                            minTickSize: [1, "day"],
                            timeformat: "%d/%m/%y",
                            /*min: date('Y-m-d'),
                            max: date('Y-m-d')*/
                        }
                    };

                    if ($("#chart_plot_03").length) {
                        console.log('Plot3');


                        $.plot($("#chart_plot_03"), [{
                            label: '{{ __('lang.registration') }}',
                            data: chart_plot_03_data,
                            lines: {
                                fillColor: "rgba(150, 202, 89, 0.12)"
                            },
                            points: {
                                fillColor: "#fff"
                            }
                        }], chart_plot_03_settings);

                    };

                }
            //});
        </script>

        <script>
                //$(document).ready(function () {
                   /* alert('ok2');
                    init_sparklines();
                    init_flot_chart();
                    init_sidebar();
                    init_wysiwyg();
                    init_InputMask();
                    init_JQVmap();
                    init_cropper();
                    init_knob();
                    init_IonRangeSlider();
                    init_ColorPicker();
                    init_TagsInput();
                    init_parsley();
                    init_daterangepicker();
                    init_daterangepicker_right();
                    init_daterangepicker_single_call();
                    init_daterangepicker_reservation();
                    init_SmartWizard();
                    init_EasyPieChart();
                    init_charts();
                    init_echarts();
                    init_morris_charts();
                    init_skycons();
                    init_select2();
                    init_validator();
                    init_DataTables();
                    init_chart_doughnut();
                    init_gauge();
                    init_PNotify();
                    init_starrr();
                    init_calendar();
                    init_compose();
                    init_CustomNotification();
                    init_autosize();
                    init_autocomplete();*/

                //});
        </script>

    @endsection


@endsection
