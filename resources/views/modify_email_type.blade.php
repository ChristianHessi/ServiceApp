@extends('template_back_office')

@section('title', 'Add Email Template')
@section('fail_chanel')
    <a href="{{route('all_email_type_page')}}"> <b> @lang('lang.notif_types') </b></a> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('modify_email_type_page', ['id' => $email_type->id])}}"> <b> @lang('lang.modify_notif_type') : {{ucfirst($email_type->name)}}</b>  </a>
@endsection


@section('content')

    <!--<div class="offset-md-2 offset-lg-2 col-md-8  col-lg-8 col-sm-12 offset-md-2 offset-lg-2">
        <form action="{{route('change_email_type')}}" method="post" class="form-group" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <label for="name"> @lang('lang.name')</label> <br>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <input type="text" name="name" id="name" value="{{$email_type->name}}"  required class="form-control"> <br>
                    <input type="hidden" name="id" value="{{$email_type->id}}">
                </div>
            </div>

            <div class="row">
                <div class="offset-md-10 offset-sm-0">
                    <input type="submit" onclick="return validate_form()" value="@lang('lang.modify')" class="btn btn-info btn-sm  submitlink" />
                </div>
            </div>
        </form> <br>

    </div>-->

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small> @lang('lang.modify_notif_type') : {{ucfirst($email_type->name)}} </small></h2>
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
                    <form id="demo-form2" action="{{route('change_email_type')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">@lang('lang.name') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="name" id="name" value="{{$email_type->name}}"  required class="form-control"> <br>
                                <input type="hidden" name="id" value="{{$email_type->id}}">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" onclick="return validate_form()" value="@lang('lang.modify')" class="btn btn-sm btn-info" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        tinyMCE.init({
                mode : "specific_textareas",
                editor_selector : "mceEditor",
                setup: function(ed) {
                ed.on("keyup", function () {
                    onChangeHandler(ed);
                })
            }
        });
    </script>


@endsection
