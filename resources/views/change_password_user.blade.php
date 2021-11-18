@extends('template_back_office')

@section('title', 'Change user password')
@section('fail_chanel')
    <a href="{{route('all_users')}}"><b> @lang('lang.users') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('change_password_page', ['id' => $user->id])}}"> <b> @lang('lang.change_pwd_user') : {{strtoupper($user->name)}} {{ucfirst($user->surname)}} </b>  </a>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.change_pwd_user') :  {{strtoupper($user->name)}} {{ucfirst($user->surname)}}</small></h2>
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
                    <form id="demo-form2" action="{{route('change_password')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> @lang("lang.password") <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" onkeyup="return validate_password()" id="password1"   name="password1"  class="form-control"  required>
                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow1()" >
                                    <i id="slash" class="fa fa-eye-slash"></i>
                                    <i id="eye1" class="fa fa-eye"></i>
                                </span>
                                <p>
                                    @lang('lang.cond_pwd') :
                                    <ul>
                                        <div  id="password-8">
                                            <li> @lang('lang.password_8') </li>
                                        </div>
                                        <div id="password-maj">
                                            <li>@lang('lang.password_maj') </li>
                                        </div>
                                        <div id="password-chif">
                                            <li> @lang('lang.password_chif')</li>
                                        </div>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang("lang.cfpassword") <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" name="password2"   id="password2" required class="form-control">
                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow2()" >
                                    <i id="slash" class="fa fa-eye-slash"></i>
                                    <i id="eye2" class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{$user->id}}">

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" onclick="return validate_form();" value="@lang('lang.modify')" class="btn btn-sm btn-info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validate_password(){
            //alert("hello");
            pwd1 = $("#password1").val();
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

            $("#password-8").css("background-color","red");
            $("#password-8").css("color","white");

            $("#password-maj").css("background-color","red");
            $("#password-maj").css("color","white");

            $("#password-chif").css("background-color","red");
            $("#password-chif").css("color","white");

            if(pwd1.length >=8 && pwd1.length <= 16){
                $("#password-8").css("background-color","green");
                $("#password-8").css("color","white");
            }

            if(pwd1.match(/[A-Z]/)){
                $("#password-maj").css("background-color","green");
                $("#password-maj").css("color","white");
            }

            if(pwd1.match(/[0-9]/)){
                $("#password-chif").css("background-color","green");
                $("#password-chif").css("color","white");
            }
        }
    </script>


    <script>
        function validate_form(){
            pwd1 = $("#password1").val();
            pwd2 = $("#password2").val();
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            if(pwd1 == pwd2){
                if(pwd1.length >=8 && pwd1.length <= 16){
                    if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/)){

                        return true;
                    }
                    else{
                        toastr.warning('{{ __('lang.pwd_maj_num') }}');
                        return false;
                    }
                }
                else if(pwd1.length > 16){
                    toastr.warning('{{ __('lang.pwd_max')}}');
                    return false;

                }
                else{
                    toastr.warning('{{ __('lang.pwd_min')}}');
                    return false;
                }
            }
            else{
                toastr.warning('{{ __('lang.pwd_inchorent') }}');
                return false;
            }
            return false;
        }
    </script>

<script>
    function hideshow1(){
        var password = document.getElementById("password1");
        var slash = document.getElementById("slash");
        var eye = document.getElementById("eye1");

        if(password.type === 'password'){
            password.type = "text";
            slash.style.display = "block";
            eye.style.display = "none";
        }
        else{
            password.type = "password";
            slash.style.display = "none";
            eye.style.display = "block";
        }

    }

    function hideshow2(){
        var password = document.getElementById("password2");
        var slash = document.getElementById("slash2");
        var eye = document.getElementById("eye2");

        if(password.type === 'password'){
            password.type = "text";
            slash.style.display = "block";
            eye.style.display = "none";
        }
        else{
            password.type = "password";
            slash.style.display = "none";
            eye.style.display = "block";
        }
    }
</script>







@endsection
