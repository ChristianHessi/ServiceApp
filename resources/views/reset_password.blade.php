@extends('template_registration')
@section('title', "Reset Password")

@section('content')

    <div class="shadow-lg bg-white login p-5">
        <a class="flex items-center justify-center" style="margin-bottom: 25px;" href="{{route('login')}}">
            <img src="{{asset('spectra.jpg')}}" >
        </a>

        <div class="text-center" style="margin-bottom: 25px;">
            <h3>@lang('lang.reset_pwd')</h3>
        </div>

        <form action="{{route('reset_password_function')}}" method="post" class="form-group" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-12">
                    <input type="password" onkeyup="return validate_password()" name="password1" id="password1" required class="form-control "  placeholder="@lang('lang.password')">
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
            </div> <br>

            <div class="row">
                <div class="col-12">
                    <input type="password" name="password2" id="password2" required class="form-control "  placeholder="@lang('lang.cfpassword')">
                    <input type="hidden" name="id"  value="{{$user->reset_key}}">
                </div>
            </div> <br>

            <input type="submit" onclick="return validate_form()"  value="@lang('lang.save')"  class="btn btn-block btn-info submitlink">
        </form> <br>
        <div class="row">
            <div class="p col-md-5 col-sm-12" >
                @lang('lang.noaccount') , <a href="{{route('registration')}}" class="text-primary"> @lang('lang.iregister') </a>
            </div>
            <div class="p offset-md-2 col-md-5 col-sm-12" >
                @lang("lang.haveaccount") , <a href="{{route('login')}}"  class="text-primary" >  @lang("lang.iconnect") </a>
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
                    //if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/) && format.test(pwd1)){
                    if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/)){
                        //toastr.success("form correct");
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


@endsection

