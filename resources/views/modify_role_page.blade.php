@extends('template_back_office')

@section('title', 'Modify role')
@section('fail_chanel')
    <a href="{{route('all_role')}}"><b> @lang('lang.roles_onglet') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('modify_role_page', ['id' => $role->id])}}"> <b> @lang('lang.modify_role') : {{ucfirst($role->name)}}</b>  </a>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.modify_role') : {{ucfirst($role->name)}} </small></h2>
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
                    <form id="demo-form2" action="{{route('modify_role')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">@lang('lang.name') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name" id="name" value="{{$role->name}}" required class="form-control"> <br>
                                <input type="hidden" name="id" value="{{$role->id}}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('lang.permissions') <span class="required"></span>
                            </label>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                @foreach ($all_permissions as $permission)
                                    @if (in_array($permission->id, $id_permission_role))
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type="checkbox" name="permission[]" value="{{$permission->id}}" checked class="" readonly> @lang('lang.'.$permission->name)
                                            </label>
                                        </div>
                                    @else
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type="checkbox" name="permission[]" value="{{$permission->id}}" class="" readonly> @lang('lang.'.$permission->name)
                                            </label>
                                        </div>
                                    @endif
                            @endforeach
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" onclick="return validate_form()" value="@lang('lang.modify')" class="btn btn-info btn-sm submitlink" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
