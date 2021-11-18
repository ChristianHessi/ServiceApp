@extends('template_back_office')

@section('title', 'View Email Template')

@section('fail_chanel')
    <a href="{{route('all_email_template_page')}}"> <b> @lang('lang.email_tmp_onglet') </b></a> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('view_email_template_page', ['id' => $email_template->id])}}"> <b> @lang('lang.view_email_tmp') : {{ucfirst($email_template->object)}} </b>  </a>
@endsection

@section('content')
    <!--<div class="offset-md-2 offset-lg-2 col-md-8  col-md-8 col-sm-12 offset-md-2 offset-lg-2">

        <form   class="form-group" autocomplete="off">
        @csrf
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <label for="name">  @lang('lang.code_name')</label>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    {{$email_template->get_email_type()}}

                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <label for="surname"> @lang('lang.lang') </label>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    @if ($email_template->language == "en")
                        @lang('lang.en')
                    @else
                        @lang('lang.fr')
                    @endif

                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <label for="birthday"> @lang("lang.email_title") </label>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    {{$email_template->object}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <label for="sexe"> @lang("lang.email_description")</label>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    {!! $email_template->description !!}
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <label for="phone_number"> @lang("lang.link_name") </label><br>
                </div>
                <div  class="col-md-9 col-lg-9 col-sm-12">
                    {!! $email_template->link_name !!}
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <label for="role"> @lang("lang.email_signature")</label> <br>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    {!! $email_template->signature !!}
                </div>
            </div>


        </form> <br>

    </div>-->

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small> @lang('lang.view_email_tmp') : {{ucfirst($email_template->object)}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <!--<li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>-->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">

                                <tbody>
                                    <tr>
                                        <td> <label for="type">  @lang('lang.type_ong')</label></td>
                                        <td>{{$email_template->get_email_type()}}</td>

                                    </tr>
                                    <tr>
                                        <td><label for="lang"> @lang('lang.lang_ong') </label></td>
                                        <td>
                                            @if ($email_template->language == "en")
                                                @lang('lang.en')
                                            @else
                                                @lang('lang.fr')
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="object"> @lang('lang.object_ong') </label></td>
                                        <td> {{$email_template->object}}</td>

                                    </tr>
                                    <tr>
                                        <td><label for="description"> @lang('lang.description_ong')</label></td>
                                        <td>{!! $email_template->description !!}</td>

                                    </tr>
                                    <tr>
                                        <td><label for="link_name"> @lang('lang.name_link_ong') </label><br></td>
                                        <td>{!! $email_template->link_name !!}</td>
                                    </tr>
                                    <tr>
                                        <td> <label for="signature"> @lang("lang.signature_ong")</label> <br></td>
                                        <td>{!! $email_template->signature !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>






@endsection
