@extends('template_registration')
@section('title', "Registration Login")

@section('content')

    <div class="shadow-lg bg-white login p-5">
        <a class="flex items-center justify-center" style="margin-bottom: 25px;" href="{{route('login')}}">
            <img src="{{asset('spectra.JPG')}}" >
        </a>

        <form action="{{route('login_account')}}" method="post" class="form-group" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label for="email"> @lang('lang.email')</label>
                <input type="email" name="email" id="email" value="{{old('email')}}" required class="form-control input-lg"> <br>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <label for="password"> @lang('lang.password')</label>
                    <input type="password" name="password" id="password" required class="form-control input-lg"> <br>
                </div>
            </div>

            <input type="submit" id="submit"  value="@lang('lang.login')" class="btn btn-info btn-block submitlink" />


            <div class="text-right">
                <a class="forgot_link" href="{{route('forgot_password')}}"> @lang('lang.fg_pwd_link')</a> <br>
            </div>

        </form>
        <!--<p  class="text-center"> @lang('lang.noaccount') ,
            <a href="{{route('registration')}}" class="text-primary urllink" >
                @lang('lang.iregister')
            </a>
        </p>-->
    </div>

    <script>
        function validate_form(){
            pwd1 = $("#password").val();
            //pwd2 = $("#password2").val();
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            //if(pwd1 == pwd2){
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
            return false;
        }
    </script>

    @if (session()->has("stop"))
        <script>
            document.getElementById("submit").disabled = true;
            document.getElementById("email").readOnly = true;
            document.getElementById("password").readOnly = true;

            setTimeout(function(){document.getElementById("submit").disabled = false;},600000);
            setTimeout(function(){document.getElementById("email").readOnly = false;},600000);
            setTimeout(function(){document.getElementById("password").readOnly = false;},600000);
        </script>
    @endif



@endsection



