@extends('template_back_office')

@section('title', 'Add user')
@section('fail_chanel')
    <a href="{{route('all_users')}}"><b> @lang('lang.users') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('add_user_page')}}"> <b> @lang('lang.add_user') </b>  </a>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.add_user') </small></h2>
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
                    <form id="demo-form2" action="{{route('registration_user')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">@lang("lang.name") <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="name" required name="name" value="{{old('name')}}" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang("lang.surname") <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="surname" id="surname" value="{{old('surname')}}" required class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> @lang("lang.birthday")</label>
                            <div class="col-md-6 col-sm-6 ">
                                <!--<input type="date" max="{{date('Y-m-d')}}" value="{{old('birthday')}}"  name="birthday" id="birthday" class="form-control" required/>-->
                                <input id="birthday" name="birthday" value="{{old('birthday')}}" placeholder="{{App\Http\Controllers\user_function::date_format()}}" style="background-color: white;" class="form-control" required readonly />
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> @lang("lang.sex")</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select id="sexe" name="sexe" class="form-control">
                                    @if(old('sexe'))
                                        @if (old('sexe') == 'f')
                                            <option selected value="{{old('sexe')}}">Féminin </option>
                                            <option value="m"> Masculin </option>
                                        @else
                                            <option selected value="{{old('sexe')}}">Masculin </option>
                                            <option value="f"> Féminin </option>
                                        @endif
                                    @endif
                                    <option value="m"> Masculin </option>
                                    <option value="f"> Féminin </option>
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.phone")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="phone_number" name="phone_number" value="{{old('phone_number')}}"   type="tel" required  class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.role")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="role">
                                    @foreach ($all_role as $role)
                                        @if (old('role'))
                                            @if (old('role') == $role->id)
                                                <option selected value="{{$role->id}}"> {{$role->name}}</option>
                                            @else
                                                <option value="{{$role->id}}"> {{$role->name}}</option>
                                            @endif
                                        @else
                                            <option value="{{$role->id}}"> {{$role->name}}</option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.email")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="email" name="email" value="{{old('email')}}"  id="email" required class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.password")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" id="password1" onkeyup="return validate_password()"  name="password1" required class="form-control">
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.cfpassword")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" id="password2" name="password2" required class="form-control">
                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow2()" >
                                    <i id="slash" class="fa fa-eye-slash"></i>
                                    <i id="eye2" class="fa fa-eye"></i>
                                </span>
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
