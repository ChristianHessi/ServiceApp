@extends('template_back_office')

@section('title', 'Modify custumer')
@section('fail_chanel')
    <a href="{{route('all_custumers')}}"><b> @lang('lang.custumers') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('modify_custumer_page', ['id' => $custumer->id])}}"> <b> @lang('lang.modify_custumer') : {{strtoupper($custumer->name)}} {{ucfirst($custumer->surname)}} </b>  </a>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.modify_custumer') :  {{strtoupper($custumer->name)}} {{ucfirst($custumer->surname)}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <!--<li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>-->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" action="{{route('modify_custumer')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> @lang('lang.name') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="name" value="{{$custumer->name}}"  name="name"  class="form-control"  required>
                                <input type="hidden" name="id" value="{{$custumer->id}}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('lang.surname') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="surname"  value="{{$custumer->surname}}" id="surname"  class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> @lang('lang.birthday')</label>
                            <div class="col-md-6 col-sm-6 ">
                                <!--<input type="date" max="{{date('Y-m-d')}}" value="{{$custumer->birthday}}" name="birthday" id="birthday" class="form-control" required readonly />-->
                                @if ($custumer->birthday)

                                    <input id="birthday" name="birthday" value="{{date(App\Http\Controllers\user_function::date_format_value(), strtotime($custumer->birthday))}}"  class="form-control"  /> <br>

                                @endif
                                <input id="birthday" name="birthday" value="{{old('birthday')}}" placeholder="{{App\Http\Controllers\user_function::date_format()}}" style="background-color: white;" class="form-control"/>

                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> @lang("lang.sex")</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select id="sexe" name="sexe" required class="form-control">
                                    @if ($custumer->sexe == 'f')
                                        <option value="m"> @lang("lang.boy") </option>
                                        <option value="f" selected> @lang("lang.girl")</option>
                                    @else
                                        <option selected value="m"> @lang("lang.boy") </option>
                                        <option value="f"> @lang("lang.girl") </option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.phone")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="phone_number" name="phone_number"  value="{{$custumer->phone_number}}" type="tel"  class="form-control">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.email")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="email" name="email" value="{{$custumer->email}}"  id="email"  class="form-control">
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
        var input = document.querySelector("#phone_number");
        input.class = "form-control col-12";
        window.intlTelInput(input, {
            initialCountry: "auto",
            localizedCountries: { 'de': 'Deutschland' },
            nationalMode: false,
            utilsScript: "build/js/utils.js",
        });
    </script>




@endsection
