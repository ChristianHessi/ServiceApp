@extends('template_back_office')

@section('title', 'All role')
@section('fail_chanel')
    <a href="{{route('all_role')}}"> <b> @lang('lang.roles_onglet') </b></a>
@endsection

@section('content')
    <div class="row">
        @can('add_role')
            <div class="offset-md-11">
                <a class="btn btn-info" href="{{route('add_role_page')}}"> <i class="glyphicon glyphicon-plus"></i> @lang('lang.add') </a>
            </div> <br>
        @endcan

        <div class="col-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>@lang('lang.roles_onglet')</small></h2>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class=""> @lang('lang.roles_onglet') </th>
                                    <th class="col-7"> @lang('lang.permissions_onglet')</th>
                                    <th class=""> @lang('lang.actions_onglet')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($all_role)
                                @foreach ($all_role as $role)
                                    <tr class="">
                                        <td class=""> <b> {{strtoupper($role->name)}} </b> </td>
                                        <td class="row">
                                            @foreach ($role->getAllPermissions() as $permission)
                                                <div class="col-md-4 col-lg-4 col-sm-12">
                                                    <input type="radio"  checked> @lang('lang.'.$permission->name)
                                                </div>
                                            @endforeach
                                        </td>
                                        <td class="">
                                            <!--<a href="#" onclick="return valide_delete('{{$role->name}}', '{{$role->id}}');" class="btn btn-danger btn-sm">  <i class="glyphicon glyphicon-trash"></i> <b class="d-none d-sm-block"> @lang('lang.delete') </b></a>-->
                                            @can('delete_role')
                                                <a href="#" onclick="return valide_delete('{{$role->name}}', '{{$role->id}}');" class="btn btn-danger btn-sm" title="@lang('lang.delete')">  <i class="glyphicon glyphicon-trash"></i></a>
                                            @endcan
                                            @can('modify_role')
                                                <a href="{{route('modify_role_page', ['id' => $role->id])}}" class="btn btn-warning btn-sm" title="@lang('lang.modify')">  <i class="glyphicon glyphicon-pencil"></i></a>
                                            @endcan


                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <div>
                            @lang('lang.display') {!! $all_role->firstItem() !!} - {!! $all_role->lastItem() !!} @lang('lang.of') {!! $all_role->total() !!} items <br>
                        </div> <br>

                        <div class="btn-group mr-2">
                            <a href="{!! $all_role->url($all_role->onFirstPage()) !!}"
                                @if ($all_role->currentPage() ==  $all_role->onFirstPage())
                                    style="opacity: 0.5;
                                        pointer-events: none;
                                        cursor: default;"
                                @endif
                                 class="btn border btn-sm btn-default">
                                <i class="fa fa-angle-double-left"> </i>
                            </a>
                            <a href="{!! $all_role->previousPageUrl()!!}"
                                @if ($all_role->currentPage() ==  $all_role->onFirstPage())
                                    style="opacity: 0.5;
                                        pointer-events: none;
                                        cursor: default;"
                                @endif
                                class="btn border btn-sm btn-default">
                                <i class="fa fa-angle-left"> </i>
                            </a>
                            <a href="{!! $all_role->url($all_role->currentPage()) !!}"  class="btn border btn-sm btn-primary">{!! $all_role->currentPage() !!}</a>

                            <a href="{!! $all_role->nextPageUrl()!!}"
                                @if ($all_role->currentPage() ==  $all_role->lastPage())
                                    style="opacity: 0.5;
                                        pointer-events: none;
                                        cursor: default;"
                                @endif
                                class="btn btn-sm border btn-default">
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="{!! $all_role->url($all_role->lastPage()) !!}"
                                @if ($all_role->currentPage() ==  $all_role->lastPage())
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


        function valide_delete(role, id){


            var msg = '{{ __('lang.delete_user_dialog')}}' + "<b>" + role + "</b> ?";
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
                        window.location.href =  '{{ route("delete_role", ["id" =>  '' ])}}'+id;
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
