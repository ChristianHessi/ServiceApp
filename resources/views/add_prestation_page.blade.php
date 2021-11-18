@extends('template_back_office')

@section('title', 'Add Prestation')
@section('fail_chanel')
    <a href="{{route('all_prestations')}}"><b> @lang('lang.prestations') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('add_prestation_page')}}"> <b> @lang('lang.add_prestation') </b>  </a>
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
                    <form id="demo-form2" name="myform" action="{{route('register_prestation')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.custumer")<span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input list="custumerList" required id="custumerChoice" name="custumer" class="form-control col-sm-10" />
                                <datalist  id="custumerList">
                                    <option value="" disabled selected>  </option>
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
                               
                                @can('add_custumer')
                                    <a class=" btn btn-info  offset-sm-1" href="{{route('add_custumer_by_admin_page')}}"> <i class="glyphicon glyphicon-plus"></i></a>
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
                                <input list="serviceList" onchange="getPrice(this)" required id="serviceChoice" name="service" class="form-control col-sm-10" />
                                <datalist id="serviceList">
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
                            </div>
                        </div>


                       
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.technicien")<span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input list="technicienList" required id="technicienChoice" name="technicien" class="form-control col-sm-10" />
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
                                <input type="submit" onclick="DoSubmit()" value="@lang('lang.save')" class="btn btn-sm btn-info"/>

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
            //var idservice = service.value;
            var val = $('#serviceChoice').val()
            var idservice = $('#serviceList option').filter(function() {
                return this.value == val;
            }).data('value');

            //alert(idservice);

            @foreach ($all_services as $service)
                var idserv = "{{$service->id}}";
                var priceserv = "{{$service->price}}";
                if(idserv == idservice){
                    document.getElementById("price").value = priceserv;
                }
            @endforeach
        }

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

    </script>




@endsection
