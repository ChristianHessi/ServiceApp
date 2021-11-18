@extends('template_back_office')

@section('title', 'All Service')
@section('fail_chanel')
    <a href="{{route('all_services')}}"> <b> @lang('lang.services') </b></a>
@endsection

@section('content')


    <div class="row">
        @can('add_service')
            <div class="offset-md-11">
                <a class=" btn btn-info" href="{{route('add_service_page')}}"> <i class="glyphicon glyphicon-plus"></i> @lang('lang.add') </a>
            </div> <br>
        @endcan


        <div class="col-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>@lang('lang.services')</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <!--<li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>-->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="card-box table-responsive">
                        <div class="search-container ml-3">
                            <form id="form" action="{{route('all_service_search')}}" class="row col-md-5 col-lg-5 col-12" method="GET">
                               @csrf

                               @if (! empty($search))
                                    <input type="text" value="{{$search}}"  class="form-control col-9"    name="search">
                               @else
                                    <input type="text" placeholder="Search.."  class="form-control col-9"    name="search">
                               @endif
                                <button type="submit" class="btn btn-info"><i class="fa fa-search search-icon"></i></button>
                            </form>
                            <div class="offset-md-10 offset-4">
                                <div class="btn-group" role="group">
                                    <button  onclick="return submit_typeorder(event);" class="btn btn-info mr-3"> <i id="btnicon" class="fa fa-sort-amount-asc"> </i> </button>
                                    <button id="btnGroupDrop1" type="button" class="btn btn-info"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-sort"> @lang('lang.sort_by') </i>
                                    </button>
                                    <form method="GET" id="idform" class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        @csrf

                                        <a class="dropdown-item" href="#">
                                            @if ($categorie == "name")
                                                <input type="radio" value="name"
                                                class="eltnav" checked onchange="return submit_categories(event);"
                                                name="categorie">   @lang('lang.name_ong')
                                            @else
                                                <input type="radio" value="name"
                                                class="eltnav" onchange="return submit_categories(event);"
                                                name="categorie">   @lang('lang.name_ong')
                                            @endif
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            @if ($categorie == "price")
                                                <input type="radio" value="price" checked class="eltnav" onchange="return submit_categories(event);" name="categorie">  @lang('lang.price_ongl')
                                            @else
                                                <input type="radio" value="price"  class="eltnav" onchange="return submit_categories(event);" name="categorie">  @lang('lang.price_ongl')
                                            @endif
                                        </a>
                                        <input type="hidden" name="search" value="{{$search}}">
                                        <input type="hidden" id="typeorder" name="typeorder" value="asc">
                                    </form>
                                </div>
                            </div> <br>
                        </div>
                        <table id="table" class="table">
                            <thead>
                                <tr>
                                    <th>@lang('lang.name_ong')</th>
                                    <th>@lang('lang.price_ongl')</th>
                                    <th> @lang('lang.actions_onglet')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($all_services)
                                    @foreach ($all_services as $service)
                                        <tr>
                                            {{--{{$user->roles[0]->id}}--}}
                                            <td> <b>  {{strtoupper($service->name)}}  </b></td>

                                            <td> {{$service->price}}</td>
                                            <td>
                                                @can('modify_service')
                                                    <a  href="{{route('modify_service_page', ['id' => $service->id])}}" class="btn btn-warning btn-sm" title="@lang('lang.modify')">  <i class="fa fa-pencil"></i> </a>
                                                @endcan

                                                @can('delete_service')
                                                    <a href="#" onclick=" return valide_delete('{{$service->name}}', '{{$service->id}}');" class="btn btn-danger btn-sm" title="@lang('lang.delete')">  <i class="fa fa-trash"></i> </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div id="pagination" class="text-center">

                            <div class="text-center">
                                <div>
                                    @lang('lang.display') {!! $all_services->firstItem() !!} - {!! $all_services->lastItem() !!} @lang('lang.of') {!! $all_services->total() !!} items <br>
                                </div> <br>

                                <div class="btn-group mr-2">
                                    <a href="{!! $all_services->url($all_services->onFirstPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"
                                        @if ($all_services->currentPage() ==  $all_services->onFirstPage())
                                            style="opacity: 0.5;
                                                pointer-events: none;
                                                cursor: default;"
                                        @endif
                                         class="btn border btn-sm btn-default">
                                        <i class="fa fa-angle-double-left"> </i>
                                    </a>
                                    <a href="{!! $all_services->previousPageUrl()."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder!!}"
                                        @if ($all_services->currentPage() ==  $all_services->onFirstPage())
                                            style="opacity: 0.5;
                                                pointer-events: none;
                                                cursor: default;"
                                        @endif
                                        class="btn border btn-sm btn-default">
                                        <i class="fa fa-angle-left"> </i>
                                    </a>
                                    <a href="{!! $all_services->url($all_services->currentPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"  class="btn border btn-sm btn-primary">{!! $all_services->currentPage() !!}</a>

                                    <a href="{!! $all_services->nextPageUrl()."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"
                                        @if ($all_services->currentPage() ==  $all_services->lastPage())
                                            style="opacity: 0.5;
                                                pointer-events: none;
                                                cursor: default;"
                                        @endif
                                        class="btn btn-sm border btn-default">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="{!! $all_services->url($all_services->lastPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"
                                        @if ($all_services->currentPage() ==  $all_services->lastPage())
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
    </div>


    <script>
        function valide_delete(name, id){
            var msg = '{{ __('lang.delete_service')}}' + " <b>" + name + "</b> ?";
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
                        window.location.href =  '{{ route("delete_service", ["id" =>  '' ])}}'+id;
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

    function submit_categories($event){

           $event.preventDefault();

            var idoffre = "#table";
            var idurlpagination = "#pagination";

           $.ajax({
                type : "GET",
                url: "{{route('all_service_with_sort')}}",
                data: $("#idform").serialize(),

                success: function(data){
                    var formoffre = $(data).find(idoffre);
                    var formpagination = $(data).find(idurlpagination);
                    $(idoffre).html(formoffre);
                    $(idurlpagination).html(formpagination);
                },

                failure: function() {
                    //alert('echoue');
                    //alert('hello votre requête a mal tourné ');
                }
           });

    }

    function submit_typeorder($event){
           $event.preventDefault();

            var idoffre = "#table";
            var idurlpagination = "#pagination";

            var valueorder = $("#typeorder").val();
            //alert(valueorder);

            if(valueorder == "asc"){
                $("#typeorder").val("desc");
                $("#btnicon").attr("class","fa fa-sort-amount-desc");
            }
            else{
                $("#typeorder").val("asc");
                $("#btnicon").attr("class","fa fa-sort-amount-asc");
                //$("#btnicon").className = "fa fa-sort-amount-asc";
            }

           $.ajax({
                type : "GET",
                url: "{{route('all_service_with_sort')}}",
                data: $("#idform").serialize(),

                success: function(data){
                    //alert(data);

                    var formoffre = $(data).find(idoffre);
                    var formpagination = $(data).find(idurlpagination);

                    $(idoffre).html(formoffre);
                    $(idurlpagination).html(formpagination);

                },

                failure: function() {
                    //alert('echoue');
                    //alert('hello votre requête a mal tourné ');
                }
           });

    }

</script>



@endsection
