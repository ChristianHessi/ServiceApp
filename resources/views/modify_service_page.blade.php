@extends('template_back_office')

@section('title', 'Modify service')
@section('fail_chanel')
    <a href="{{route('all_services')}}"><b> @lang('lang.services') </b> </a><span class="glyphicon glyphicon-chevron-right"> </span> <a href="{{route('modify_service_page', ['id' => $service->id])}}"> <b> @lang('lang.modify_service') : {{strtoupper($service->name)}}  </b>  </a>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>  @lang('lang.modify_service') :  {{strtoupper($service->name)}} </small></h2>
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
                    <form id="demo-form2" action="{{route('modify_service')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">

                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> @lang('lang.name') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="name" value="{{$service->name}}"  name="name"  class="form-control"  required>
                                <input type="hidden" name="id" value="{{$service->id}}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">@lang('lang.price') <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="price" required value="{{$service->price}}" id="price"  class="form-control">
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

@endsection
