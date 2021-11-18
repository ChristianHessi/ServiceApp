@extends('template_front_office')

@section('title', 'Change your profile')

@section('content')

    <div class="offset-md-2 offset-lg-2 col-md-8  col-md-8 col-sm-12 offset-md-2 offset-lg-2">
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
                    <input type="date" max="{{date('Y-m-d')}}" name="birthday" id="birthday" value="{{Auth::user()->birthday}}"class="form-control" required/> <br>
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
                            <option selected value="m">@lang('lang.male') </option>
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

            <div class="row">
                <div class="offset-md-10 offset-sm-6">
                    <input type="submit" onclick="return validate_form()" value="@lang('lang.save')" class="btn btn-info btn-sm submitlink" />
                </div>
            </div>
        </form> <br>

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
    </div>

@endsection
