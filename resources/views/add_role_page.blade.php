@extends('template_back_office')

@section('title', 'Add role')
@section('fail_chanel')
    <a href="{{route('all_role')}}"><b> @lang('lang.roles_onglet') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('add_role_page')}}"> <b> @lang('lang.add_role') </b>  </a>
@endsection
@section('content')



    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.add_role') </small></h2>
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
                    <form id="demo-form2" action="{{route('register_role')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">@lang('lang.name') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="name" id="name" value="{{old('name')}}" required class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('lang.permissions') <span class="required"></span>
                            </label>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> <span class="required"></span>
                            </label> {{old('permission[]')}}
                            <div class="col-md-6 col-sm-6 ">
                                @foreach ($all_permissions as $permission)

                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type="checkbox" name="permission[]" value="{{$permission->id}}" class="" readonly> @lang('lang.'.$permission->name)
                                            </label>
                                        </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                 <input type="submit" onclick="return validate_form()" value="@lang('lang.save')" class="btn btn-sm btn-info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
