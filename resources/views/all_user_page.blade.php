@extends('template_back_office')

@section('title', 'All User')
@section('fail_chanel')
    <a href="{{route('all_users')}}"> <b> @lang('lang.users') </b></a>
@endsection

@section('content')
    

    <div class="row">
        @can('add_user')
            <div class="offset-md-11">
                <a class=" btn btn-info" href="{{route('add_user_page')}}"> <i class="glyphicon glyphicon-plus"></i> @lang('lang.add') </a>
            </div> <br>
        @endcan


        <div class="col-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>@lang('lang.users')</small></h2>
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
                            <form id="form" action="{{route('all_users_search')}}" class="row col-md-5 col-lg-5 col-12" method="GET">
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

                                                @if ($categorie == "last_sur")
                                                    <input type="radio" value="last_sur"
                                                    class="eltnav" checked onchange="return submit_categories(event);"
                                                    name="categorie">   @lang('lang.last_sur')
                                                @else
                                                    <input type="radio" value="last_sur"
                                                    class="eltnav" onchange="return submit_categories(event);"
                                                    name="categorie">   @lang('lang.last_sur')
                                                @endif

                                        </a>
                                        <a class="dropdown-item" href="#">
                                            @if ($categorie == "email")
                                                <input type="radio" value="email" checked class="eltnav" onchange="return submit_categories(event);" name="categorie">  @lang('lang.email_list')
                                            @else
                                                <input type="radio" value="email"  class="eltnav" onchange="return submit_categories(event);" name="categorie">  @lang('lang.email_list')
                                            @endif

                                        </a>
                                        <a class="dropdown-item" href="#">
                                            @if ($categorie == "role")
                                                <input type="radio" checked value="role" class="eltnav" onchange="return submit_categories(event);" name="categorie">   @lang('lang.roles_onglet')
                                            @else
                                                <input type="radio" value="role" class="eltnav" onchange="return submit_categories(event);" name="categorie">   @lang('lang.roles_onglet')
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
                                    <th>@lang('lang.last_sur')</th>
                                    <th> @lang('lang.roles_onglet')</th>
                                    <th> @lang('lang.email_list')</th>
                                    <th> @lang('lang.phone_onglet')</th>
                                    <th> @lang('lang.actions_onglet')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($all_users)
                                    @foreach ($all_users as $user)
                                        <tr>
                                            {{--{{$user->roles[0]->id}}--}}
                                            <td> <b>  {{strtoupper($user->name)}}  {{ucfirst($user->surname)}} </b></td>
                                            <td>
                                                @foreach ($user->getRoleNames() as $role)
                                                    {{$role}}
                                                @endforeach
                                            </td>
                                            <td> {{$user->email}}</td>
                                            <td> {{$user->phone_number}}</td>
                                            <td>

                                                <!--<a  href="{{route('view_user_page', ['id' => $user->id])}}" class="btn btn-primary btn-sm">  <i class="fa fa-info-circle"></i> <b class="d-none d-sm-block">   @lang('lang.view') </b> </a>-->
                                                @can('view_user')
                                                    <a  href="{{route('view_user_page', ['id' => $user->id])}}" class="btn btn-primary btn-sm" title="@lang('lang.view')">  <i class="fa fa-info-circle"></i></a>
                                                @endcan

                                                @can('modify_user')
                                                    <a  href="{{route('modify_user_page', ['id' => $user->id])}}" class="btn btn-warning btn-sm" title="@lang('lang.modify')">  <i class="fa fa-pencil"></i> </a>
                                                @endcan

                                                @can('change_user_password')
                                                    <a href="{{route('change_password_page', ['id' => $user->id])}}" class="btn btn-info btn-sm" title="@lang('lang.chpassword')">  <i class="fa fa-lock"></i></a>
                                                @endcan

                                                @if ($user->is_active == 1)
                                                    @can('deactive_user')
                                                        <a href="#" onclick=" return valide_deactive('{{$user->name}}', '{{$user->surname}}', '{{$user->id}}');" class="btn btn-danger btn-sm" title="@lang('lang.deactive')">  <i class="fa fa-eye-slash"></i></a>
                                                    @endcan

                                                @else
                                                    @can('active_user')
                                                        <a href="#" onclick=" return valide_active('{{$user->name}}', '{{$user->surname}}', '{{$user->id}}');" class="btn btn-primary btn-sm" title=" @lang('lang.active')"> <i class="fa fa-eye"></i></a>
                                                    @endcan

                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div id="pagination" class="text-center">

                            <div class="text-center">
                                <div>
                                    @lang('lang.display') {!! $all_users->firstItem() !!} - {!! $all_users->lastItem() !!} @lang('lang.of') {!! $all_users->total() !!} items <br>
                                </div> <br>

                                <div class="btn-group mr-2">
                                    <a href="{!! $all_users->url($all_users->onFirstPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"
                                        @if ($all_users->currentPage() ==  $all_users->onFirstPage())
                                            style="opacity: 0.5;
                                                pointer-events: none;
                                                cursor: default;"
                                        @endif
                                         class="btn border btn-sm btn-default">
                                        <i class="fa fa-angle-double-left"> </i>
                                    </a>
                                    <a href="{!! $all_users->previousPageUrl()."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder!!}"
                                        @if ($all_users->currentPage() ==  $all_users->onFirstPage())
                                            style="opacity: 0.5;
                                                pointer-events: none;
                                                cursor: default;"
                                        @endif
                                        class="btn border btn-sm btn-default">
                                        <i class="fa fa-angle-left"> </i>
                                    </a>
                                    <a href="{!! $all_users->url($all_users->currentPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"  class="btn border btn-sm btn-primary">{!! $all_users->currentPage() !!}</a>

                                    <a href="{!! $all_users->nextPageUrl()."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"
                                        @if ($all_users->currentPage() ==  $all_users->lastPage())
                                            style="opacity: 0.5;
                                                pointer-events: none;
                                                cursor: default;"
                                        @endif
                                        class="btn btn-sm border btn-default">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="{!! $all_users->url($all_users->lastPage())."&search=".$search."&categorie=".$categorie."&typeorder=".$typeorder !!}"
                                        @if ($all_users->currentPage() ==  $all_users->lastPage())
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


        function valide_deactive(name,surname, id){
            var msg = '{{ __('lang.deactive_user_dialog')}}' + " <b>" + name +" "+surname + "</b> ?";
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
                        window.location.href =  '{{ route("deactive_user", ["id" =>  '' ])}}'+id;
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

        function valide_active(name,surname, id){


            var msg = '{{ __('lang.active_user_dialog')}}' + " <b>" + name +" "+surname + "</b> ?";
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
                        window.location.href =  '{{ route("active_user", ["id" =>  '' ])}}'+id;
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
                url: "{{route('all_user_with_sort')}}",
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
                url: "{{route('all_user_with_sort')}}",
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
