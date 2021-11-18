@extends('template_back_office')

@section('title', 'Add Email Template')
@section('fail_chanel')
    <a href="{{route('all_email_template_page')}}"> <b> @lang('lang.email_tmp_onglet') </b></a> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('add_email_template_page')}}"> <b> @lang('lang.add_notif_tmp') </b>  </a>
@endsection

@section('content')

    <!--<div class="offset-md-1 offset-lg-1 col-md-10  col-lg-10 col-sm-12 offset-md-1 offset-lg-1">-->
    <!--<div class="col-12">
        <form action="{{route('register_email_template')}}" method="post" class="form-group" autocomplete="off">
            @csrf

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="type"> @lang('lang.code_name')</label> <br>
                    <select class="form-control" name="type" id="type">
                        @foreach ($all_email_type as $email_type)
                            <option value="{{$email_type->id}}"> {{$email_type->name}}</option>
                        @endforeach
                    </select>
                    <br>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="language"> @lang('lang.lang')</label> <br>
                    <select class="form-control" name="language" id="language">
                        <option value="fr"> @lang('lang.fr')</option>
                        <option value="en"> @lang('lang.en')</option>
                    </select>
                    <br>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-12">
                    <label for="email_title"> @lang("lang.email_title")</label><br>
                    <input type="text" class="form-control" id="email_title" name="email_title"> <br>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="email_description"> @lang("lang.email_description")</label><br>
                    <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="email_description" name="email_description"></textarea> <br>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="link_name"> @lang("lang.link_name")</label><br>
                    <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="link_name" name="link_name"></textarea> <br>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="email_signature"> @lang("lang.email_signature")</label><br>
                    <textarea class="form-control mceEditor"  maxlength="2" rows="5"  id="email_signature" name="email_signature"></textarea> <br>
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
                    <h2><small>  @lang('lang.add_notif_tmp') </small></h2>
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
                    <form id="demo-form2"action="{{route('register_email_template')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 ">
                                <label for="type"> @lang('lang.code_name')</label>
                                @if (old('type'))
                                    <select required class="form-control" name="type" id="type">
                                        @foreach ($all_email_type as $email_type)
                                            @if (old('type') == $email_type->id)
                                                <option selected value="{{$email_type->id}}"> {{$email_type->name}}</option>
                                            @else
                                                <option value="{{$email_type->id}}"> {{$email_type->name}}</option>
                                            @endif
                                        @endforeach
                                    </select> <br>
                                @else
                                    <select required class="form-control" name="type" id="type">
                                        @foreach ($all_email_type as $email_type)
                                            <option value="{{$email_type->id}}"> {{$email_type->name}}</option>
                                        @endforeach
                                    </select> <br>
                                @endif

                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                <label for="language"> @lang('lang.lang')</label>
                                @if (old('language'))
                                    @if (old('language') == "fr")
                                        <select required class="form-control" name="language" id="language">
                                            <option selected value="fr"> @lang('lang.fr')</option>
                                            <option value="en"> @lang('lang.en')</option>
                                        </select> <br>
                                    @else
                                        <select required class="form-control" name="language" id="language">
                                            <option value="fr"> @lang('lang.fr')</option>
                                            <option selected value="en"> @lang('lang.en')</option>
                                        </select> <br>
                                    @endif

                                @else
                                    <select required class="form-control" name="language" id="language">
                                        <option value="fr"> @lang('lang.fr')</option>
                                        <option value="en"> @lang('lang.en')</option>
                                    </select> <br>
                                @endif

                            </div>
                        </div>


                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 ">
                                <label for="email_title"> @lang("lang.email_title")</label>
                            <input type="text" value="{{old('email_title')}}" required class="form-control" id="email_title" name="email_title"> <br>
                            </div>
                        </div>

                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 ">
                                <label for="email_description"> @lang("lang.email_description")</label><br>
                                <textarea  class="form-control mceEditor"  maxlength="2" rows="5"  id="email_description" name="email_description"> {!! old('email_description') !!}</textarea> <br>
                            </div>
                        </div>

                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 ">
                                <label for="link_name"> @lang("lang.link_name")</label><br>
                                <textarea  class="form-control mceEditor"  maxlength="2" rows="5"  id="link_name" name="link_name"> {!! old('link_name') !!} </textarea> <br>
                            </div>
                        </div>

                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 ">
                                <label for="email_signature"> @lang("lang.email_signature")</label><br>
                                <textarea  class="form-control mceEditor"  maxlength="2" rows="5"  id="email_signature" name="email_signature"> {!! old('email_signature') !!} </textarea> <br>
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

<script>
    /*function validate_form(){
      var body = tinyMCE.get('myTextArea').getBody()
      var text = tinymce.trim(body.innerText || body.textContent);
      if(text.length >= 2000){
          toastr.info("La taille maximum est 2000 caractéres");
          return false;
      }
      if(text.length < 20){
          toastr.info("La taille minimum est 20 caractéres");
          return false;
      }
    }*/
  </script>


@endsection
