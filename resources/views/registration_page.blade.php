@extends('template_registration')
@section('title', "Registration Page")

@section('content')


    <div class="shadow-lg bg-white login">
        <a class="flex items-center justify-center" style="margin-bottom: 25px;" href="{{route('login')}}">
            <img src="{{asset('spectra.jpg')}}" >
        </a>

        <form action="{{route('registration_account')}}" method="post" class="form-group" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="name"> @lang("lang.name")</label>
                <input type="text" id="name" value="{{old('name')}}" required name="name"  class="form-control input-lg"> <br>
                </div>
                <div class="col-6">
                    <label for="surname"> @lang("lang.surname") </label>
                    <input type="text" value="{{old('surname')}}" name="surname" id="surname" required class="form-control input-lg"> <br>
                </div>
            </div>

                <div class="row">
                <div class="col-6">
                    <label for="birthday">@lang("lang.birthday") </label>
                    <!--<input type="date"  max="{{date('Y-m-d')}}" name="birthday" value="{{old('birthday')}}" id="birthday" class="form-control" required/> <br>-->
                    <input id="birthday" name="birthday" value="{{old('birthday')}}" placeholder="{{App\Http\Controllers\user_function::date_format()}}" style="background-color: white;" class="form-control" required readonly />
                </div>
                <div class="col-6">
                    <label for="sexe"> @lang("lang.sex")</label>
                    @if (old('sexe'))
                        @if (old('sexe') == "m")
                            <select id="sexe" name="sexe" class="form-control input-lg">
                                <option selected value="m"> Masculin </option>
                                <option value="f"> Féminin </option>
                            </select> <br>
                        @else
                            <select id="sexe" name="sexe" class="form-control input-lg">
                                <option value="m"> Masculin </option>
                                <option selected value="f"> Féminin </option>
                            </select> <br>
                        @endif
                    @else
                        <select id="sexe" name="sexe" class="form-control input-lg">
                            <option value="m"> Masculin </option>
                            <option value="f"> Féminin </option>
                        </select> <br>
                    @endif

                </div>
                <div class="col-12">
                    <label for="phone_number"> @lang("lang.phone")</label><br>
                    <input id="phone_number" value="{{old('phone_number')}}" name="phone_number"  type="tel" required  class="form-control input-lg"> <br>
                </div>
                </div>

            <div class="row">
                <div class="col-12">
                    <label for="email"> @lang("lang.email")</label>
                    <input type="email" value="{{old('email')}}" name="email" id="email" required class="form-control input-lg"> <br>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <label for="password1"> @lang("lang.password")</label>
                    <input type="password" onkeyup="return validate_password()"  id="password1" name="password1" required class="form-control input-lg">
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

                    <br>

                </div>
                <div class="col-6">
                    <label for="password2"> @lang("lang.cfpassword")</label>
                    <input type="password" id="password2" name="password2" required class="form-control input-lg">  <br>
                </div>
            </div>
            <input type="submit" onclick="return validate_form()" value="@lang("lang.inscription")" class="btn btn-info btn-block submitlink" />
        </form> <br>
        <p  class="text-center"> @lang("lang.haveaccount"),
            <a href="{{route('login')}}" class="text-primary urllink" >
                @lang("lang.iconnect")
            </a>
        </p>
    </div>
    @php
        $format_date = App\Http\Controllers\user_function::date_format();
    @endphp


    <script>
        format =  <?php echo json_encode($format_date); ?>;
         today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#birthday').datepicker({
            uiLibrary: 'bootstrap4',
            format: format,
            //format: 'mm/dd/yyyy',
            //maxDate: '27/01/2021',
            maxDate: today,
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });
    </script>

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

    <script>
        var input = document.querySelector("#phone_number");
        input.class = "form-control col-12";
        window.intlTelInput(input, {
            initialCountry: "auto",
            localizedCountries: { 'de': 'Deutschland' },
            nationalMode: false,
            utilsScript: "build/js/utils.js",
        });

    </script>

@endsection

