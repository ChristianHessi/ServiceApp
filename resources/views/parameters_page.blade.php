@extends(Auth::user()->can('view_user') || Auth::user()->can('view_dashboard') || Auth::user()->can('view_role') || Auth::user()->can('view_notification_type') || Auth::user()->can('view_notification_template') || Auth::user()->can('view_logging') || Auth::user()->can('view_service') || Auth::user()->can('view_custumer') || Auth::user()->can('view_all_prestation') || Auth::user()->can('view_only_prestation')? 'template_back_office' : 'template_front_office')


@section('title', 'Change your parameters')
@section('fail_chanel')
    <a href="{{route('change_your_parameters')}}"> <b> @lang('lang.profil') </b></a>
@endsection

@section('content')


<style>
</style>

    @if (Auth::user()->can('view_user'))
        <div class="row">
    @else
        <div class="row m-5">
    @endif

        <div class="col-md-3 col-sm-12">
            <div class="row">
                <div class="text-center">
                    <img style="height:260px;width: 260px;" id="avatar-user"  alt="Avatar"  class="text-center avatar avatar-user width-full border bg-white" src="{{asset('avatar-user/'. Auth::user()->url_avatar)}}">
                    <br> <br>
                </div>

                <div class="col-12">
                    <form method="post" action="{{route('change_avatar_user')}}" enctype="multipart/form-data" class="row">
                        @csrf

                        <input type="button" class="btn btn-sm btn-info" id="btnFileUpload" value="@lang('lang.enter_avatar')" />
                        <span id="spnFilePath"></span>
                        <input type="file"  size="1" name="fichier" id="file" accept="image/*"  style="display: none" class=" col-sm-5 btn btn-info btn-sm">
                        <input type="submit" onclick="return validate_doc()" id="button" value="@lang('lang.save')" class="ml-2 btn btn-primary btn-sm">
                    </form>
                </div>
            </div>
            <br> <br>
        </div>
        <?php
            if (! session()->has('tabName')) {
                $tabName = "profile";
            }
            else {
                $tabName = session()->get('tabName');
            }
        ?>
        <div class="col-md-9 col-sm-12">
            <ul class="nav nav-tabs" id="myTab"  role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link  {{ $tabName == 'profile' ? 'active' : '' }}" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">@lang('lang.profil')</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link {{ $tabName == 'email' ? 'active': '' }}" id="email-tab" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="false">@lang('lang.email_onglet')</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ $tabName == 'pwd' ? 'active' : '' }}" id="pwd-tab" data-toggle="tab" href="#pwd" role="tab" aria-controls="pwd" aria-selected="false">@lang('lang.password_onglet')</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade {{ $tabName == 'profile' ? 'show active' : '' }}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div id="Modprofile">
                        <!--<div class="text-center">
                            <h6> <b> @lang('lang.modify_password') </b>  </h4>
                        </div>--> <br>
                        <form action="{{route('profile_modification')}}" method="post" class="form-group" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <label for="name"> @lang('lang.name')</label>
                                </div>
                                <div class="col-md-8 col-lg-8 col-sm-12">
                                    <input type="text" name="name" id="name" value="{{Auth::user()->name}}" required class="form-control"> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <label for="surname"> @lang('lang.surname')</label>
                                </div>
                                <div class="col-md-8 col-lg-8 col-sm-12">
                                    <input type="text" name="surname" id="surname" value="{{Auth::user()->surname}}" required class="form-control"> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <label for="birthday"> @lang('lang.birthday') </label>
                                </div>
                                <div class="col-md-8 col-lg-8 col-sm-12">
                                    <!--<input type="date" max="{{date('Y-m-d')}}"  name="birthday" id="birthday" value="{{Auth::user()->birthday}}" class="form-control" required/> <br>-->
                                    <input id="birthday" name="birthday" value="{{date(App\Http\Controllers\user_function::date_format_value(), strtotime(Auth::user()->birthday))}}"  style="background-color: white;" class="form-control" required readonly /> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <label for="sexe"> @lang('lang.sex') </label>
                                </div>
                                <div class="col-md-8 col-lg-8 col-sm-12">
                                    @if (Auth::user()->sexe == 'f')
                                        <select id="sexe" name="sexe" class="form-control">
                                            <option selected value="f"> @lang('lang.female') </option>
                                            <option value="m"> @lang('lang.male')</option>
                                        </select> <br>
                                    @else
                                        <select id="sexe" name="sexe" class="form-control">
                                            <option selected value="m"> @lang('lang.male') </option>
                                            <option value="f"> @lang('lang.female') </option>
                                        </select> <br>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <label for="phone_number1"> @lang('lang.phone')</label><br>
                                </div>
                                <div class="col-md-8 col-lg-8 col-sm-12">
                                    <input id="phone_number1" name="phone_number" value="{{Auth::user()->phone_number}}"  type="tel" required  class="form-control"> <br>
                                </div>
                            </div>

                            <!--<div class="row">-->
                                <div class="text-center">
                                    <input type="submit"  value="@lang('lang.modify')" class="btn btn-info btn-sm submitlink" />
                                <!--</div>-->
                            </div>
                        </form> <br>
                    </div>
                </div>

                <div class="tab-pane fade {{ $tabName == 'email' ? 'show active' : '' }}" id="email" role="tabpanel" aria-labelledby="email-tab">

                    <div id="Modemail"> <br>
                        <div class="text-center">
                            <h6>  <b> @lang('lang.modify_email') : {{Auth::user()->email}} </b> </h4>
                        </div> <br>
                        <form action="{{route("email_modification")}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-sm-12 col-form-label"> @lang('lang.new_email')</label>
                                <div class="col-md-8">
                                <input type="email" value="{{old('email')}}" name="email" id="new_email" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-sm-12 col-form-label"> @lang('lang.current_password')</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--<div class="offset-md-10 offset-sm-6">-->
                                    <input type="submit" value="@lang('lang.modify')" onclick="return validate_email()" class="btn btn-info btn-sm submitlink">
                                <!--</div>-->

                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade {{ $tabName == 'pwd' ? 'show active' : '' }}" id="pwd" role="tabpanel" aria-labelledby="pwd-tab">
                    <div id="Modpassword"> <br>
                        <div class="text-center">
                            <h6> <b> @lang('lang.modify_password') </b>  </h4>
                        </div> <br>
                        <form action="{{route("password_modification")}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-sm-12 col-form-label">@lang('lang.current_password')  </label>
                                <div class="col-md-8">
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password1" class="col-md-4 col-sm-12 col-form-label"> @lang('lang.new_password') </label>
                                <div class="col-md-8">
                                    <input type="password" onkeyup="return validate_password()" name="password1" id="password1" class="form-control">
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
                            <div class="form-group row">
                                <label for="password2" class="col-md-4 col-sm-12 col-form-label"> @lang('lang.cf_new_password') </label>
                                <div class="col-md-8">
                                    <input type="password" name="password2" id="password2" class="form-control">
                                </div>
                            </div>
                            <div class="text-center">
                                <!--<div class="offset-md-10 offset-sm-6 ">-->
                                    <input type="submit" value="@lang('lang.modify')" onclick="return validate_form()" class="btn btn-info btn-sm submitlink">
                                <!--</div>-->
                            </div>
                        </form>
                    </div>
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
            maxDate: today,
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            },

        });
    </script>

    <script>
        function validate_email(){
            email = $("#new_email").val();
            format_point =  /[ .]/;
            format_arrobase = /[ @]/;
            if(format_point.test(email)){
                if(format_arrobase.test(email)){
                    return true;
                }
                else{
                    toastr.warning('{{ __('lang.email_incorrect') }}');
                    return false;
                }
            }
            else{
                toastr.warning('{{ __('lang.email_incorrect') }}');
                return false;
            }
        }
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
        var input = document.querySelector("#phone_number1");
        input.class = "form-control col-12";
        window.intlTelInput(input, {
            initialCountry: "auto",
            localizedCountries: { 'de': 'Deutschland' },
            nationalMode: false,
            utilsScript: "build/js/utils.js",
        });

    </script>



    <!--<script>
        var loadFile = function(event) {
        var output = document.getElementById('avatar-user');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.value = output.src;
        document.getElementById("avatar-user").style.height = "260px";
        document.getElementById("avatar-user").style.width = "260px";
        };
    </script>-->

    <script type="text/javascript">
        window.onload = function () {
            var fileupload = document.getElementById("file");
            var filePath = document.getElementById("spnFilePath");
            var button = document.getElementById("btnFileUpload");
            button.onclick = function () {
                fileupload.click();
            };
            fileupload.onchange = function () {
                /*var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
                filePath.innerHTML = "<b>Selected File: </b>" + fileName;*/
                    var output = document.getElementById('avatar-user');
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.value = output.src;
                    document.getElementById("avatar-user").style.height = "260px";
                    document.getElementById("avatar-user").style.width = "260px";
            };
        };
    </script>

  <script>
      function validate_doc(){
          var size = 3145728;
          var file_size=document.getElementById('file').files[0].size;
          //alert(file_size);
          if(file_size>=size){
              //alert('File too large');
              toastr.error('La taille maximale est 3Mo');
              return false;
          }
      }
  </script>

   <script>
      $(document).ready(function(){
          $('#button').attr('disabled',true);
          $('#file').change(function(){
              if($('#file').val()==''){
                  $('#button').attr('disabled',true)
              }
              else{
                $('#button').attr('disabled',false);
              }
          })
      });
  </script>







@endsection
