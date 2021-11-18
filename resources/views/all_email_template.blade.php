@extends('template_back_office')

@section('title', 'All Email Template')
@section('fail_chanel')
    <a href="{{route('all_email_template_page')}}"> <b> @lang('lang.email_tmp_onglet') </b></a>
@endsection

@section('content')


    <div class="row">
        @can('add_notification_template')
            <div class="offset-md-11">
                <a class="btn btn-info" href="{{route('add_email_template_page')}}"> <i class="fa fa-plus"></i> @lang('lang.add') </a> <br>
            </div> <br>
        @endcan


        <div class="col-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small> @lang('lang.email_tmp_onglet') </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="card-box table-responsive">
                        <div class="search-container ml-3">
                            <form id="form" action="{{route('all_email_template_search')}}" class="row col-md-5 col-lg-5 col-12" method="GET">
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
                                                @if ($categorie == "object")
                                                    <input type="radio" value="object"
                                                    class="eltnav" checked onchange="return submit_categories(event);"
                                                    name="categorie">   @lang('lang.object')
                                                @else
                                                    <input type="radio" value="object"
                                                    class="eltnav" onchange="return submit_categories(event);"
                                                    name="categorie">   @lang('lang.object')
                                                @endif
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            @if ($categorie == "email_type")
                                                <input type="radio" value="email_type" checked
                                                class="eltnav" onchange="return submit_categories(event);"
                                                name="categorie">  @lang('lang.email_type_onglet')
                                            @else
                                                <input type="radio" value="email_type"
                                                class="eltnav" onchange="return submit_categories(event);"
                                                name="categorie">  @lang('lang.email_type_onglet')
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
                                    <th>@lang('lang.object') </th>
                                    <th>@lang('lang.email_type_onglet') </th>
                                    <th> @lang('lang.lang_onlget') </th>
                                    <th> @lang('lang.actions_onglet')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($all_email_template)
                                    @foreach ($all_email_template as $email_template)
                                        <tr>
                                            <td> <b>  {!! $email_template->object !!}  </b> </td>
                                            <td> {{$email_template->get_email_type()}} </td>
                                            <td> {{$email_template->language}} </td>
                                            <td>
                                                <!--<a href="{{route('view_email_template_page', ['id' => $email_template->id])}}" class="btn btn-primary btn-sm">  <i class="	fa fa-info-circle"></i> <b class="d-none d-sm-block">  @lang('lang.view') </b> </a>-->
                                                @can('view_notification_template')
                                                    <a href="{{route('view_email_template_page', ['id' => $email_template->id])}}" class="btn btn-primary btn-sm" title="@lang('lang.view')">  <i class="	fa fa-info-circle"></i></a>
                                                @endcan
                                                @can('modify_notification_template')
                                                    <a href="{{route('modify_email_template_page', ['id' => $email_template->id])}}" class="btn btn-warning btn-sm" title="@lang('lang.modify')">  <i class="fa fa-pencil"></i></a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div id="pagination" class="text-center">
                        <div>
                            @lang('lang.display') {!! $all_email_template->firstItem() !!} - {!! $all_email_template->lastItem() !!} @lang('lang.of') {!! $all_email_template->total() !!} items <br>
                        </div> <br>

                        <div class="btn-group mr-2">
                            <a href="{!! $all_email_template->url($all_email_template->onFirstPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"
                                @if ($all_email_template->currentPage() ==  $all_email_template->onFirstPage())
                                    style="opacity: 0.5;
                                        pointer-events: none;
                                        cursor: default;"
                                @endif
                                 class="btn border btn-sm btn-default">
                                <i class="fa fa-angle-double-left"> </i>
                            </a>
                            <a href="{!! $all_email_template->previousPageUrl()."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder!!}"
                                @if ($all_email_template->currentPage() ==  $all_email_template->onFirstPage())
                                    style="opacity: 0.5;
                                        pointer-events: none;
                                        cursor: default;"
                                @endif
                                class="btn border btn-sm btn-default">
                                <i class="fa fa-angle-left"> </i>
                            </a>
                            <a href="{!! $all_email_template->url($all_email_template->currentPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"  class="btn border btn-sm btn-primary">{!! $all_email_template->currentPage() !!}</a>

                            <a href="{!! $all_email_template->nextPageUrl()."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder!!}"
                                @if ($all_email_template->currentPage() ==  $all_email_template->lastPage())
                                    style="opacity: 0.5;
                                        pointer-events: none;
                                        cursor: default;"
                                @endif
                                class="btn btn-sm border btn-default">
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="{!! $all_email_template->url($all_email_template->lastPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"
                                @if ($all_email_template->currentPage() ==  $all_email_template->lastPage())
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

    <script>

        function submit_categories($event){
               $event.preventDefault();

                var idoffre = "#table";
                var idurlpagination = "#pagination";

               $.ajax({
                    type : "GET",
                    url: "{{route('sort_email_template')}}",
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
                    url: "{{route('sort_email_template')}}",
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
