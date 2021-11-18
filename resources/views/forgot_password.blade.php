@extends('template_registration')
@section('title', "Forgot Password")

@section('content')
    <div class="shadow-lg bg-white login p-5">
        <a class="flex items-center justify-center" style="margin-bottom: 25px;" href="{{route('login')}}">
            <img src="{{asset('spectra.jpg')}}" >
        </a>

        <div class="text-center" style="margin-bottom: 25px;">
            <h3>@lang('lang.find_pwd')</h3>
            <h6>@lang('lang.enter_email')</h6>
        </div>

        <form action="{{route('send_email_forgot_password')}}" method="post" class="form-group" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-12">
                <input type="email"  name="email" id="email" value="{{old('email')}}" required class="form-control "  placeholder="@lang('lang.email')">
                </div>
            </div> <br>

            <input type="submit" value="@lang('lang.send_email')"  class="btn btn-block btn-info submitlink">
        </form>
        <div class="row">
            <!-- <div class="p col-md-5 col-sm-12" >
                @lang('lang.noaccount') , <a href="{{route('registration')}}" class="text-primary"> @lang('lang.iregister') </a>
            </div> -->
            <div class="p offset-md-0 col-md-12 col-sm-12" >
                @lang("lang.haveaccount") , <a href="{{route('login')}}"  class="text-primary" >  @lang("lang.iconnect") </a>
            </div>
        </div>
    </div>

@endsection

