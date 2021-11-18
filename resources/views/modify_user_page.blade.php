@extends('template_back_office')

@section('title', 'Modify user')
@section('fail_chanel')
    <a href="{{route('all_users')}}"><b> @lang('lang.users') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('modify_user_page', ['id' => $user->id])}}"> <b> @lang('lang.modify_user') : {{strtoupper($user->name)}} {{ucfirst($user->surname)}} </b>  </a>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.modify_user') :  {{strtoupper($user->name)}} {{ucfirst($user->surname)}}</small></h2>
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
                    <form id="demo-form2" action="{{route('modify_user')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> @lang('lang.name') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="name" value="{{$user->name}}"  name="name"  class="form-control" readonly required>
                                <input type="hidden" name="id" value="{{$user->id}}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('lang.surname') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="surname" readonly value="{{$user->surname}}" id="surname" required class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> @lang('lang.birthday')</label>
                            <div class="col-md-6 col-sm-6 ">
                                <!--<input type="date" max="{{date('Y-m-d')}}" value="{{$user->birthday}}" name="birthday" id="birthday" class="form-control" required readonly />-->
                                <input id="birthday" name="birthday" value="{{date(App\Http\Controllers\user_function::date_format_value(), strtotime($user->birthday))}}"  class="form-control" required readonly /> <br>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> @lang("lang.sex")</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select id="sexe" name="sexe" readonly required class="form-control">
                                    @if ($user->sexe == 'f')
                                        <option value="m"> Masculin </option>
                                        <option value="f" selected> Féminin </option>
                                    @else
                                        <option selected value="m"> Masculin </option>
                                        <option value="f"> Féminin </option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.phone")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="phone_number" name="phone_number" readonly value="{{$user->phone_number}}" type="tel" required  class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">@lang("lang.role")<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select required class="form-control" name="role">
                                    @foreach ($all_role as $role)
                                         @if ($id_role_user == $role->id)
                                             <option value="{{$role->id}}" selected> {{$role->name}}</option>
                                         @else
                                             <option value="{{$role->id}}"> {{$role->name}}</option>
                                         @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" value="@lang('lang.modify')" class="btn btn-sm btn-info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



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
