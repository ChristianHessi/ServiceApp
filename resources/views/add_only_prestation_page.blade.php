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

                        <div class="item form-group" id="service-group1" >
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.service")<span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">

                                <input list="serviceList1" required id="1serviceChoice" class="form-control inputelmt col-sm-10" placeholder="  "/>
                                <datalist id="serviceList1">
                                    <option value="" disabled selected>  </option>
                                    @foreach ($all_services as $service)
                                        @if (old('service'))
                                            @if (old('service') == $service->id)
                                                <option selected data-value="{{$service->id}}" > {{$service->name}} </option>
                                            @else
                                                <option data-value="{{$service->id}}" >{{$service->name}}</option>
                                            @endif
                                        @else
                                            <option data-value="{{$service->id}}" > {{$service->name}} </option>
                                        @endif
                                    @endforeach
                                </datalist>
                                <input type="hidden" name="service1" id="1serviceChoice-hidden" class="hidden_input">
                                <a class=" btn btn-info ajouter offset-sm-1" href="#" > <i class="glyphicon glyphicon-plus"></i></a>
                            </div>
                        </div>

                        <input type="hidden" name="nb_services" id="nb_services" value=1>

                        <div class="item form-group" id="technicien_container">
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
        function datalist_value_load(e){
            //chargement des données du datalist dans le hidden input qu'on va soumettre au controlleur
            var input = e.target,
                list = input.getAttribute('list'),
                options = document.querySelectorAll('#' + list + ' option'),
                hiddenInput = document.getElementById(input.getAttribute('id') + '-hidden'),
                inputValue = input.value;


            hiddenInput.value = inputValue;

            for(var i = 0; i < options.length; i++) {
                var option = options[i];

                if($.trim(options[i].innerText) === inputValue) {
                    console.log(option.getAttribute('data-value'));
                    hiddenInput.value = option.getAttribute('data-value');
                    break;
                }
            }
        }

        function change_on_select(e) {
            console.log("in");
            datalist_value_load(e);
            // chargement du prix total du service
            var selected = [];
            price = 0

            setTimeout(() => {
                nb_services = document.getElementById("nb_services").value
                for(j=1; j <= nb_services; j++){
                    selected.push($("#"+j+"serviceChoice-hidden").val())
                }

                @foreach ($all_services as $service)
                    var idserv = "{{$service->id}}";
                    var priceserv = "{{$service->price}}";

                    for(id of selected){
                        (id == idserv) ? price = price + parseInt(priceserv) : ""
                    }
                    $("#price").val(price);
                @endforeach
            }, 100);
        }

        $("#technicienChoice").on("change", datalist_value_load)
        $("#custumerChoice").on("change", datalist_value_load)
        // ajout de nouveaux services

        $("#1serviceChoice").on("change", change_on_select);
        var elem = $('#service-group1').clone();
        var i = 1;
        $('.ajouter').click(function(e){
            console.log("premier",i);
            e.preventDefault();
            var clone = elem;
            i++;
            console.log("suivant",i);
            clone.attr('id','service-group' + i);
            clone.find('.inputelmt').attr('list', 'serviceList'+1).val('');
            clone.find('.inputelmt').attr('id', i+'serviceChoice').val('');
            clone.find('.inputelmt').attr('list', 'serviceList'+i).val('');
            clone.find('a').remove();
            clone.find('datalist').attr('id', 'serviceList'+i).val('');
            clone.find('.hidden_input').attr('name', 'service'+i).val('');
            clone.find('.hidden_input').attr('id', i+'serviceChoice-hidden').val('');

            clone.insertBefore('#technicien_container')
            $("#"+ i +"serviceChoice").on("change", change_on_select);
            elem = clone.clone()
            $("#nb_services").val(i)
        })

    });
    </script>




@endsection
