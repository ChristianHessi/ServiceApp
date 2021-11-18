@extends('template_back_office')

@section('title', 'Modify prestation')
@section('fail_chanel')
    <a href="{{route('all_prestations')}}"><b> @lang('lang.prestations') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('modify_user_page', ['id' => $prestation->id])}}"> <b> @lang('lang.modify_prestation') : {{strtoupper($prestation->code)}}</b>  </a>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.modify_prestation') :  {{strtoupper($prestation->code)}} </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" action="{{route('modify_prestation')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.custumer")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select required class="form-control" name="custumer">
                                    @foreach ($all_custumers as $custumer)
                                         @if ($custumer->id == $prestation->custumer_id)
                                             <option value="{{$custumer->id}}" selected> {{$custumer->name}} {{$custumer->surname}}</option>
                                         @else
                                             <option value="{{$custumer->id}}"> {{$custumer->name}} {{$custumer->surname}}</option>
                                         @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{$prestation->id}}">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.service")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select onchange="getPrice(this)" required class="form-control" name="service">
                                    @foreach ($all_services as $service)
                                         @if ($service->id == $prestation->service_id)
                                             <option value="{{$service->id}}" selected> {{$service->name}} </option>
                                         @else
                                             <option value="{{$service->id}}"> {{$service->name}} </option>
                                         @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.technicien")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select required class="form-control" name="technicien">
                                    @foreach ($all_users as $user)
                                         @if ($user->id == $prestation->user_id)
                                             <option value="{{$user->id}}" selected> {{$user->name}} {{$user->surname}} </option>
                                         @else
                                             <option value="{{$user->id}}"> {{$user->name}} {{$user->surname}}</option>
                                         @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang("lang.price") <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" min="0" required name="price" id="price" value="{{$prestation->price}}"  class="form-control">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> @lang('lang.date_prestation')</label>
                            <div class="col-md-6 col-sm-6 ">
                                <!--<input type="date" max="{{date('Y-m-d')}}" value="{{$user->birthday}}" name="birthday" id="birthday" class="form-control" required readonly />-->
                                <input id="birthday" name="date_prestation" value="{{date(App\Http\Controllers\user_function::date_format_value(), strtotime($prestation->date_prestation))}}"  class="form-control" required  /> <br>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" value="@lang('lang.modify')" class="btn btn-sm btn-info"/>
                            </div>
                        </div>

                    </form>
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
        $('#birthday').datepicker({
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
        function getPrice(service){
            var idservice = service.value;
            @foreach ($all_services as $service)
                var idserv = "{{$service->id}}";
                var priceserv = "{{$service->price}}";
                if(idserv == idservice){
                    document.getElementById("price").value = priceserv;
                }
            @endforeach
        }
    </script>


@endsection
