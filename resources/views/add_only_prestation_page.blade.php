@extends('template_back_office')

@section('title', 'Add Prestation')
@section('fail_chanel')
    <a href="{{route('only_prestations')}}"><b> @lang('lang.my_prestation') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('add_prestation_page')}}"> <b> @lang('lang.add_prestation') </b>  </a>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.add_prestation') </small></h2>
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
                    <form id="demo-form2" name="myform" action="{{route('register_only_prestation')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.custumer")<span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input list="custumerList" required id="custumerChoice" class="form-control col-sm-10" placeholder="  "/>
                                <datalist id="custumerList">

                                    @foreach ($all_custumers as $custumer)
                                        @if (old('custumer'))
                                            @if (old('custumer') == $custumer->id)
                                                <option selected data-value="{{$custumer->id}}"> {{$custumer->name}}  {{$custumer->surname}}</option>
                                            @else
                                                <option data-value="{{$custumer->id}}"> {{$custumer->name}} {{$custumer->surname}}</option>
                                            @endif
                                        @else
                                            <option data-value="{{$custumer->id}}"> {{$custumer->name}} {{$custumer->surname}}</option>
                                        @endif

                                    @endforeach
                                </datalist>
                                <input type="hidden" name="custumer" id="custumerChoice-hidden">
                                @can('add_custumer')
                                    <a class=" btn btn-info  offset-sm-1" href="{{route('add_custumer_by_technician_page')}}"> <i class="glyphicon glyphicon-plus"></i></a>
                                @endcan
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.service")<span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                                <!--<select onchange="getPrice(this)" required class="form-control col-sm-10" name="service">
                                    <option value="" disabled selected>  </option>
                                    @foreach ($all_services as $service)
                                        @if (old('service'))
                                            @if (old('service') == $service->id)
                                                <option selected value="{{$service->id}}"> {{$service->name}}</option>
                                            @else
                                                <option value="{{$service->id}}"> {{$service->name}}</option>
                                            @endif
                                        @else
                                            <option value="{{$service->id}}"> {{$service->name}} </option>
                                        @endif
                                    @endforeach
                                </select>-->
                                <select required id="serviceChoice" multiple name="service[]" class="form-control col-sm-10" >
                                    <option value="" disabled selected>  </option>
                                    @foreach ($all_services as $service)
                                        @if (old('service'))
                                            @if (old('service') == $service->id)
                                                <option selected value="{{$service->id}}" > {{$service->name}} </option>
                                            @else
                                                <option value="{{$service->id}}" >{{$service->name}}</option>
                                            @endif
                                        @else
                                            <option value="{{$service->id}}" > {{$service->name}} </option>
                                        @endif
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.technicien")<span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input list="technicienList" required id="technicienChoice" class="form-control col-sm-10" />

                                <datalist  id="technicienList">
                                    <option value="" disabled selected>  </option>
                                    @foreach ($all_users as $user)
                                        @if (old('technicien'))
                                            @if (old('technicien') == $user->id)
                                                <option selected data-value="{{$user->id}}"> {{$user->name}} {{$user->surname}}</option>
                                            @else
                                                <option data-value="{{$user->id}}"> {{$user->name}} {{$user->surname}}</option>
                                            @endif
                                        @else
                                            <option data-value="{{$user->id}}"> {{$user->name}} {{$user->surname}} </option>
                                        @endif
                                    @endforeach
                                </datalist>
                                <input type="hidden" name="technicien" id="technicienChoice-hidden">

                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang("lang.price") <span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input type="number" min="0" required name="price" id="price" value="{{old('price')}}"  class="form-control col-sm-10">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> @lang("lang.date_prestation")</label>
                            <div class="col-md-8 col-sm-8 ">
                                <!--<input type="date" max="{{date('Y-m-d')}}" value="{{old('date_prestation')}}"  name="birthday" id="birthday" class="form-control" required/>-->
                                <input id="birthday" name="date_prestation" value="{{old('date_prestation')}}" placeholder="{{App\Http\Controllers\user_function::date_format()}}" style="background-color: white;" class="form-control col-sm-10" required  />
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit"  value="@lang('lang.save')" class="btn btn-sm btn-info"/>

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
    $(function(){

        $("#serviceChoice").change(function (){
            var selected = $('#serviceChoice').val()

            console.log(selected);
            price = 0
            @foreach ($all_services as $service)
                var idserv = "{{$service->id}}";
                // var idserv = "{{$service->name}}";
                var priceserv = "{{$service->price}}";

                for(id of selected){
                    (id == idserv) ? price = price + parseInt(priceserv) : ""
                }
                console.log(price)
                $("#price").val(price)
                // document.getElementById("price").value = price;
            @endforeach
        })

        function DoSubmit(){
            var val = $('#serviceChoice').val();
            var idservice = $('#serviceList option').filter(function() {
                return this.value == val;
            }).data('value');

            var val_custumer = $('#custumerChoice').val();
            var idcustumer = $('#custumerList option').filter(function() {
                return this.value == val_custumer;
            }).data('value');

             var val_technicien = $('#technicienChoice').val();
            var idtechnicien = $('#technicienList option').filter(function() {
                return this.value == val_technicien;
            }).data('value');

            //alert(idcustumer);
            //alert(idtechnicien);



          document.myform.service.value = idservice.toString();
          document.myform.custumer.value = idcustumer.toString();
          document.myform.technicien.value = idtechnicien.toString();
          document.getElementById("myform").submit();
        }

        // document.querySelector('input[list]').addEventListener('input', function(e) {
        //     var input = e.target,
        //         list = input.getAttribute('list'),
        //         options = document.querySelectorAll('#' + list + ' option'),
        //         hiddenInput = document.getElementById(input.getAttribute('id') + '-hidden'),
        //         inputValue = input.value;


        //     hiddenInput.value = inputValue;

        //     for(var i = 0; i < options.length; i++) {
        //         var option = options[i];

        //         if($.trim(options[i].innerText) === inputValue) {
        //             hiddenInput.value = option.getAttribute('data-value');
        //             break;
        //         }
        //     }

        // })  ;

        $("input[list]").change(function(e) {
            var input = e.target,
                list = input.getAttribute('list'),
                options = document.querySelectorAll('#' + list + ' option'),
                hiddenInput = document.getElementById(input.getAttribute('id') + '-hidden'),
                inputValue = input.value;


            hiddenInput.value = inputValue;

            for(var i = 0; i < options.length; i++) {
                var option = options[i];

                if($.trim(options[i].innerText) === inputValue) {
                    hiddenInput.value = option.getAttribute('data-value');
                    break;
                }
            }

        });

    });
    </script>




@endsection
