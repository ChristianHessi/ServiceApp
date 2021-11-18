@extends('template_back_office')

@section('title', 'All Prestations')
@section('fail_chanel')
    <a href="{{route('only_prestations')}}"> <b> @lang('lang.my_prestation') </b></a>
@endsection

@section('content')
    <div class="row">
        @can('add_prestation')
            <div class="offset-md-11">
                <a class=" btn btn-info" href="{{route('add_only_prestation_page')}}"> <i class="glyphicon glyphicon-plus"></i> @lang('lang.add') </a>
            </div> <br>
       @endcan

        <div class="col-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small> @lang('lang.prestations') </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="card-box table-responsive">
                        <div class="search-container ">

                            <form id="demo-form2" action="{{route('only_prestation_search')}}" method="POST" data-parsley-validate class="form-horizontal form-label-left">

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
                                    <th>@lang('lang.date_prestation_ongl') </th>
                                    <th>@lang('lang.code_ongl')</th>
                                    <th>@lang('lang.technicien_ongl')</th>
                                    <th>@lang('lang.custumer_ongl')</th>
                                    <th>@lang('lang.service_ongl')</th>
                                    <th>@lang('lang.price_ongl')</th>
                                    <th> @lang('lang.actions_onglet')</th>
                                    <th>
                                        <button id="btnGroupDrop1" type="button" class="btn btn-info"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-sort"> @lang('lang.group_by') </i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                            <a class="dropdown-item" href="#">
                                                <input type="radio" value="name"
                                                class="eltnav" name="group_by"  onchange="return group_by_custumer();">
                                                @lang('lang.custumers')

                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <input type="radio" value="price" class="eltnav"
                                                onchange="return  group_by_service();" name="group_by">
                                                @lang('lang.services')
                                            </a>



                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tablebody">
                                @if ($all_prestations)
                                    @foreach ($all_prestations as $prestation)
                                        <tr>
                                            <td> {{date(App\Http\Controllers\user_function::date_format_value(), strtotime($prestation->date_prestation))}} </td>
                                            <td> {{$prestation->code}} </td>
                                            <td> {{$prestation->Technicien->name}} {{$prestation->Technicien->surname}} </td>
                                            <td> {{$prestation->Custumer->name}} {{$prestation->Custumer->surname}} </td>
                                            <td> {{$prestation->Service->name}} </td>
                                            <td> {{$prestation->price}} </td>
                                            <td>
                                                @can('modify_prestation')
                                                    <a  href="{{route('modify_only_prestation_page', ['id' => $prestation->id])}}" class="btn btn-warning btn-sm" title="@lang('lang.modify')">  <i class="fa fa-pencil"></i> </a>
                                                @endcan

                                                @can('delete_prestation')
                                                    <a href="#" onclick=" return valide_delete('{{$prestation->code}}', '{{$prestation->id}}');" class="btn btn-danger btn-sm" title="@lang('lang.delete')">  <i class="fa fa-trash"></i> </a>
                                                @endcan
                                            </td>
                                            <td>
                                            </td>
                                        </tr>

                                    @endforeach
                                    <tr>
                                        <td> <b> TOTAL </b> </td>
                                        <td>  </td>
                                        <td>  </td>
                                        <td> </td>
                                        <td>  </td>
                                        <td>
                                             {{$montant}}
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>

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
            var msg = '{{ __('lang.delete_prestation')}}' + " <b>" + name + "</b> ?";
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
                        window.location.href =  '{{ route("delete_prestation", ["id" =>  '' ])}}'+id;
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

    <script>
        function group_by_custumer(){

            var ids_custumers = [];
             @foreach ($all_prestations as $prestation)
                var present_amount = Number("{{$prestation->price}}");
                if (present_amount > 0) {
                    //alert("OK");
                    var present_custumer = Number("{{$prestation->Custumer->id}}");
                    ids_custumers.push(present_custumer);
                    //alert(present_custumer);
                }

             @endforeach
            /*ids_custumers.push("laurie");
            ids_custumers.push("franklin");*/

            //alert(ids_custumers);

            var table = "";
            @foreach ($all_custumers as $custumer)
                var table_perso = " ";
                var montant = 0;
                var idcustumer = "{{$custumer->id}}";
                var idcust = Number("{{$custumer->id}}");

                if(ids_custumers.includes(idcust)){ 

                    table_perso += "<tr> <td>  <em style=\"font-style: italic;\">@lang('lang.custumer_ongl') </em> <b class='col-form-label'> {{strtoupper($custumer->name)}}  {{ucfirst($custumer->surname)}} </b> </td> <td>  </td> <td>  </td> <td> </td> <td>  </td> <td> </td> <td> </td> <td> </td> </tr>";

                    @foreach ($all_prestations as $prestation)
                        var idcustumerPres = "{{$prestation->custumer_id}}";
                        if(idcustumer == idcustumerPres){
                            table_perso += "<tr> <td> {{date(App\Http\Controllers\user_function::date_format_value(), strtotime($prestation->date_prestation))}} </td> <td> {{$prestation->code}} </td> <td> {{$prestation->Technicien->name}} {{$prestation->Technicien->surname}} </td> <td> {{$prestation->Custumer->name}} {{$prestation->Custumer->surname}} </td> <td> {{$prestation->Service->name}} </td> <td> {{$prestation->price}} </td> <td> @can('modify_prestation') <a  href=\"{{route('modify_prestation_page', ['id' => $prestation->id])}}\" class=\"btn btn-warning btn-sm\" title=\"@lang('lang.modify')\">  <i class=\"fa fa-pencil\"></i> </a> @endcan @can('delete_prestation') <a href=\"#\" onclick=\" return valide_delete('{{$prestation->code}}', '{{$prestation->id}}');\" class=\"btn btn-danger btn-sm\" title=\"@lang('lang.delete')\">  <i class=\"fa fa-trash\"></i> </a> @endcan </td> <td> </td> </tr>" ;
                            montant += Number("{{$prestation->price}}") ;

                        }
                    @endforeach
                    table_perso += "<tr> <td> <b style='font-style: italic;'> TOTAL </b> </td> <td>  </td> <td>  </td> <td> </td> <td>  </td> <td> <b> "+ montant  + " </b> </td> <td> </td> <td> </td></tr>";

                    table += table_perso;
                }

            @endforeach
            table += "<tr> <td> <b> TOTAL </b> </td> <td>  </td> <td>  </td> <td> </td> <td>  </td> <td> <b>"+ {{$montant}}  + " </b></td> <td> </td> <td> </td> </tr>";

            document.getElementById("tablebody").innerHTML = table;
        }
    </script>

    <script>
        function group_by_service(){


            var ids_services = [];
            @foreach ($all_prestations as $prestation)
                var present_amount = Number("{{$prestation->price}}");
                if (present_amount > 0) {
                    //alert("OK");
                    var present_service = Number("{{$prestation->Service->id}}");
                    ids_services.push(present_service);
                    //alert(present_service);

                }

             @endforeach
            /*ids_custumers.push("laurie");
            ids_custumers.push("franklin");*/

            //alert(ids_services);


            var table = "";
            @foreach ($all_services as $service)
                var table_perso = " ";
                var montant = 0;
                var idservice = "{{$service->id}}";
                var idserv = Number("{{$service->id}}");

                if(ids_services.includes(idserv)){ 

                    table_perso += "<tr> <td>  <em style=\"font-style: italic;\">@lang('lang.service_ongl') </em> <b class='col-form-label'> {{strtoupper($service->name)}}  </b> </td> <td>  </td> <td>  </td> <td> </td> <td>  </td> <td> </td> <td> </td><td> </td> </tr>";

                    @foreach ($all_prestations as $prestation)
                        var idcustumerPres = "{{$prestation->service_id}}";
                        if(idservice == idcustumerPres){
                            table_perso += "<tr> <td> {{date(App\Http\Controllers\user_function::date_format_value(), strtotime($prestation->date_prestation))}} </td> <td> {{$prestation->code}} </td> <td> {{$prestation->Technicien->name}} {{$prestation->Technicien->surname}} </td> <td> {{$prestation->Custumer->name}} {{$prestation->Custumer->surname}} </td> <td> {{$prestation->Service->name}} </td> <td> {{$prestation->price}} </td> <td> @can('modify_prestation') <a  href=\"{{route('modify_prestation_page', ['id' => $prestation->id])}}\" class=\"btn btn-warning btn-sm\" title=\"@lang('lang.modify')\">  <i class=\"fa fa-pencil\"></i> </a> @endcan @can('delete_prestation') <a href=\"#\" onclick=\" return valide_delete('{{$prestation->code}}', '{{$prestation->id}}');\" class=\"btn btn-danger btn-sm\" title=\"@lang('lang.delete')\">  <i class=\"fa fa-trash\"></i> </a> @endcan </td> <td> </td> </tr>" ;
                            montant += Number("{{$prestation->price}}") ;

                        }
                    @endforeach
                    table_perso += "<tr> <td> <b style='font-style: italic;'> TOTAL </b> </td> <td>  </td> <td>  </td> <td> </td> <td>  </td> <td> <b>"+ montant  + " </b></td> <td> </td> <td> </td> </tr>";

                    table += table_perso;
                }

            @endforeach
            table += "<tr> <td> <b> TOTAL </b> </td> <td>  </td> <td>  </td> <td> </td> <td>  </td> <td> <b>"+ {{$montant}}  + " </b></td> <td> </td> <td> </td> </tr>";

            document.getElementById("tablebody").innerHTML = table;
        }
    </script>






@endsection
