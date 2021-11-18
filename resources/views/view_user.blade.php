@extends('template_back_office')

@section('title', 'View user')
@section('fail_chanel')
    <a href="{{route('all_users')}}"><b> @lang('lang.users') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('view_user_page', ['id' => $user->id])}}"> <b> @lang('lang.view_user') : {{strtoupper($user->name)}} {{ucfirst($user->surname)}} </b>  </a>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small> @lang('lang.view_user') :  {{strtoupper($user->name)}} {{ucfirst($user->surname)}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <!--<li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>-->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="name"> @lang("lang.name_ong")</label>
                                </td>
                                <td>
                                    {{strtoupper($user->name)}} <br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="surname"> @lang("lang.surname_ong") </label>
                                </td>
                                <td>
                                    {{ucfirst($user->surname)}} <br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="birthday">@lang("lang.birthday_ong") </label>
                                </td>
                                <td>
                                    {{date(App\Http\Controllers\user_function::date_format_value(), strtotime($user->birthday))}} <br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="sexe"> @lang("lang.sex_ong")</label>
                                </td>
                                <td>
                                    @if ($user->sex == "f")
                                        Féminin
                                    @else
                                        Masculin
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="phone_number"> @lang("lang.phone_ong")</label><br>
                                </td>
                                <td>
                                     {{$user->phone_number}} <br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="role"> @lang("lang.role_ong")</label> <br>
                                </td>
                                <td>
                                    @foreach ($user->getRoleNames() as $role)
                                        {{$role}}
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="email"> @lang("lang.email_ong")</label>
                                </td>
                                <td>
                                    {{$user->email}} <br>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
      </div>
    </div>


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
