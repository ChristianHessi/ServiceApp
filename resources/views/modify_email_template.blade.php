@extends('template_back_office')

@section('title', 'Modify Email Template')
@section('fail_chanel')
    <a href="{{route('all_email_template_page')}}"> <b> @lang('lang.email_tmp_onglet') </b></a> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('modify_email_template_page', ['id' => $email_template->id])}}"> <b> @lang('lang.modify_notif_tmp') : {{ucfirst($email_template->object)}} </b>  </a>
@endsection

@section('content')

    <!--<div class="offset-md-1 offset-lg-1 col-md-10  col-lg-10 col-sm-12 offset-md-1 offset-lg-1">-->
    <!--<div class="col-12">
        <form action="{{route('change_email_template')}}" method="post" class="form-group" autocomplete="off">
            @csrf

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="type"> @lang('lang.code_name')</label> <br>
                    <select class="form-control" name="type" id="type">
                        @foreach ($all_email_type as $email_type)
                            @if ($email_type->id == $email_template->email_type_id)
                                <option selected value="{{$email_type->id}}"> {{$email_type->name}}</option>
                            @else
                                <option value="{{$email_type->id}}"> {{$email_type->name}}</option>
                            @endif

                        @endforeach
                    </select>
                    <br>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="language"> @lang('lang.lang')</label> <br>
                    <select class="form-control" name="language" id="language">
                        @if ($email_template->language == "en")
                            <option value="fr"> @lang('lang.fr')</option>
                            <option selected value="en"> @lang('lang.en')</option>
                        @else
                            <option selected value="fr"> @lang('lang.fr')</option>
                            <option value="en"> @lang('lang.en')</option>
                        @endif

                    </select>
                    <br>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <label for="email_title"> @lang("lang.email_title")</label><br>
                    <input type="text" class="form-control"   id="email_title" name="email_title" value="{{$email_template->object}}">  <br>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="email_description"> @lang("lang.email_description")</label><br>
                    <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="email_description" name="email_description"> {{$email_template->description}}  </textarea> <br>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="link_name"> @lang("lang.link_name")</label><br>
                    <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="link_name" name="link_name"> {{$email_template->link_name}} </textarea> <br>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="email_signature"> @lang("lang.email_signature")</label><br>
                    <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="email_signature" name="email_signature"> {{$email_template->signature}} </textarea> <br>
                    <input type="hidden" name="id" value="{{$email_template->id}}">
                </div>
            </div>

            <div class="row">
                <div class="offset-10">
                    <input type="submit" onclick="return validate_form()" value="@lang('lang.save')" class="btn btn-info  submitlink" />
                </div>
            </div>
        </form> <br>

    </div>-->


    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.modify_notif_tmp') : {{ucfirst($email_template->object)}} </small></h2>
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
                    <form id="demo-form2" action="{{route('change_email_template')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 ">
                                <label for="type"> @lang('lang.code_name')</label> <br>
                                <select class="form-control" name="type" id="type">
                                    @foreach ($all_email_type as $email_type)
                                        @if ($email_type->id == $email_template->email_type_id)
                                            <option selected value="{{$email_type->id}}"> {{$email_type->name}}</option>
                                        @else
                                            <option value="{{$email_type->id}}"> {{$email_type->name}}</option>
                                        @endif

                                    @endforeach
                                </select> <br>
                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                <label for="language"> @lang('lang.lang')</label> <br>
                                <select class="form-control" name="language" id="language">
                                    @if ($email_template->language == "en")
                                        <option value="fr"> @lang('lang.fr')</option>
                                        <option selected value="en"> @lang('lang.en')</option>
                                    @else
                                        <option selected value="fr"> @lang('lang.fr')</option>
                                        <option value="en"> @lang('lang.en')</option>
                                    @endif

                                </select> <br>
                            </div>
                        </div>

                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 ">
                                <label for="email_title"> @lang("lang.email_title")</label>
                                <input type="text" class="form-control"   id="email_title" name="email_title" value="{{$email_template->object}}">  <br>
                            </div>
                        </div>

                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 ">
                                <label for="email_description"> @lang("lang.email_description")</label>
                                <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="email_description" name="email_description"> {{$email_template->description}}  </textarea> <br>

                            </div>
                        </div>

                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 ">
                                <label for="link_name"> @lang("lang.link_name")</label><br>
                                <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="link_name" name="link_name"> {{$email_template->link_name}} </textarea> <br>
                            </div>
                        </div>

                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 ">
                                <label for="email_signature"> @lang("lang.email_signature")</label><br>
                                <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="email_signature" name="email_signature"> {{$email_template->signature}} </textarea> <br>
                                <input type="hidden" name="id" value="{{$email_template->id}}">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" onclick="return validate_form()" value="@lang('lang.modify')" class="btn btn-sm btn-info"/>
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
