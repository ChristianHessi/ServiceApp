@extends('template_back_office')

@section('title', 'All Logs')
@section('fail_chanel')
    <a href="{{route('all_logs')}}"> <b> @lang('lang.log_ongl') </b></a>
@endsection



@section('content')
    <div class="row">
        <div class="col-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small> @lang('lang.log_ongl') </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="card-box table-responsive">
                        <div class="search-container ">

                            <form id="demo-form2" action="{{route('all_logs_search')}}" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                                @csrf
                                <div class="item ml-0">
                                    <label for="middle-name" class="col-form-label col-md-1 col-sm-1"> @lang('lang.date_start') : </label>

                                        @if (! empty($date_start))
                                            <!--<input type="date" max="{{date('Y-m-d')}}" value="{{$date_start}}" onchange="submit()"  class="form-control"    name="date_start">-->
                                            <input id="date_start" name="date_start"  value="{{date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_start))}}"  style="background-color: white;" class="form-control" required readonly />
                                        @else
                                            <!--<input type="date" max="{{date('Y-m-d')}}" value="<?php echo(date('Y-m-d')) ?>"   onchange="submit()"   class="form-control"    name="date_start">-->
                                            <input id="date_start" name="date_start"  value="{{date(App\Http\Controllers\user_function::date_format_value(), strtotime(<?php echo(date('Y-m-d')) ?>))}}"  style="background-color: white;" class="form-control" required readonly />
                                        @endif

                                    <label for="middle-name" class="col-form-label col-md-1 col-sm-1"> @lang('lang.date_end') : </label>

                                        @if (! empty($date_stop))
                                            <!--<input type="date" max="{{date('Y-m-d')}}" value="{{$date_stop}}"  onchange="submit()"  class="form-control"    name="date_stop">-->
                                            <input id="date_stop" name="date_stop"  value="{{date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_stop))}}"  style="background-color: white;" class="form-control" required readonly />

                                        @else
                                            <!--<input type="date" max="{{date('Y-m-d')}}" value="<?php echo(date('Y-m-d')) ?>"  onchange="submit()"  class="form-control"    name="date_stop">-->
                                            <input id="date_stop" name="date_stop"  value="{{date(App\Http\Controllers\user_function::date_format_value(), strtotime(<?php echo(date('Y-m-d')) ?>))}}"  style="background-color: white;" class="form-control" required readonly />
                                        @endif

                                    <input type="submit" value="@lang('lang.recherch')" class="form-control col-md-1 col-sm-1 btn btn-sm btn-info" />
                                </div>
                            </form>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('lang.datetime_ongl') </th>
                                    <th>@lang('lang.activity')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($all_logs)
                                    @foreach ($all_logs as $log)
                                        <tr>
                                            <td> {{$log->created_at->format('d-m-Y H:i:s')}} </td>
                                            <td> {{$log->description}} </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                        <div class="text-center">
                            <div>
                                @lang('lang.display') {!! $all_logs->firstItem() !!} - {!! $all_logs->lastItem() !!} @lang('lang.of') {!! $all_logs->total() !!} items <br>
                            </div> <br>

                            <div class="btn-group mr-2">
                                <a href="{!! $all_logs->url($all_logs->onFirstPage())."&date_start=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_start))."&date_stop=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_stop)) !!}"
                                    @if ($all_logs->currentPage() ==  $all_logs->onFirstPage())
                                        style="opacity: 0.5;
                                            pointer-events: none;
                                            cursor: default;"
                                    @endif
                                     class="btn border btn-sm btn-default">
                                    <i class="fa fa-angle-double-left"> </i>
                                </a>
                                <a href="{!! $all_logs->previousPageUrl()."&date_start=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_start))."&date_stop=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_stop)) !!}"
                                    @if ($all_logs->currentPage() ==  $all_logs->onFirstPage())
                                        style="opacity: 0.5;
                                            pointer-events: none;
                                            cursor: default;"
                                    @endif
                                    class="btn border btn-sm btn-default">
                                    <i class="fa fa-angle-left"> </i>
                                </a>
                                <a href="{!! $all_logs->url($all_logs->currentPage())."&date_start=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_start))."&date_stop=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_stop))  !!}"  class="btn border btn-sm btn-primary">{!! $all_logs->currentPage() !!}</a>

                                <a href="{!! $all_logs->nextPageUrl()."&date_start=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_start))."&date_stop=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_stop)) !!}"
                                    @if ($all_logs->currentPage() ==  $all_logs->lastPage())
                                        style="opacity: 0.5;
                                            pointer-events: none;
                                            cursor: default;"
                                    @endif
                                    class="btn btn-sm border btn-default">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="{!! $all_logs->url($all_logs->lastPage())."&date_start=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_start))."&date_stop=".date(App\Http\Controllers\user_function::date_format_value(), strtotime($date_stop))  !!}"
                                    @if ($all_logs->currentPage() ==  $all_logs->lastPage())
                                        style="opacity: 0.5;
                                            pointer-events: none;
                                            cursor: default;"
                                    @endif
                                    class="border btn btn-sm btn-default">
                                    <i class="fa fa-angle-double-right"> </i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
      </div>
    </div>


    @php
        $format_date = App\Http\Controllers\user_function::date_format();
    @endphp


    <script>
        format =  <?php echo json_encode($format_date); ?>;
         today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#date_start').datepicker({
            uiLibrary: 'bootstrap4',
            format: format,
            //format: 'mm/dd/yyyy',
            //maxDate: '27/01/2021',
            maxDate: today,
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });
        $('#date_stop').datepicker({
            uiLibrary: 'bootstrap4',
            format: format,
            //format: 'mm/dd/yyyy',
            //maxDate: '27/01/2021',
            maxDate: today,
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

    </script>


    <script>
        function valide_delete(name, id){
            var msg = '{{ __('lang.delete_email_type')}}' + " <b>" + name + "</b> ?";
            bootbox.confirm({
                message: msg,
                buttons: {
                    confirm: {
                        label: '{{ __('lang.yes') }}',
                        className: 'btn-info btn-sm',
                    },
                    cancel: {
                        label: '{{ __('lang.cancel') }}',
                        className: 'btn-danger btn-sm'
                    }
                },
                callback: function(result){
                    if(result){
                        //alert(id);
                        window.location.href =  '{{ route("delete_email_type", ["id" =>  '' ])}}'+id;
                        return true;
                    }
                    else{
                        //callback();
                        bootbox.hideAll();
                        return false;
                    }
                }

            });

            return false;

        }
    </script>





@endsection
