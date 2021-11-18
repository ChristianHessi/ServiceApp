@extends('template_back_office')

@section('title', 'All User')
@section('fail_chanel')
    <a href="{{route('all_email_type_page')}}"> <b> @lang('lang.notif_types') </b></a>
@endsection



@section('content')
    <div class="row">
        @can('add_notification_type')
            <div class="offset-md-11">
                <a class="btn btn-info" href="{{route('add_email_type_page')}}"> <i class="fa fa-plus"></i> @lang('lang.add') </a>
            </div> <br>
        @endcan


        <div class="col-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small> @lang('lang.notif_types') </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="card-box table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('lang.email_type_onglet') </th>
                                    <th> @lang('lang.actions_onglet')</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if ($all_email_type)
                                    @foreach ($all_email_type as $email_type)
                                        <tr>
                                            <td> {{$email_type->name}} </td>
                                            <td>
                                                @can('modify_notification_type')
                                                    <a href="{{route('modify_email_type_page', ['id' => $email_type->id])}}" class="btn btn-warning btn-sm" title="@lang('lang.modify')">  <i class="fa fa-pencil"></i></a>
                                                @endcan
                                                @can('delete_notification_type')
                                                    <a href="#" onclick=" return valide_delete('{{$email_type->name}}', '{{$email_type->id}}');" class="btn btn-danger btn-sm" title="@lang('lang.delete')">  <i class="fa fa-trash"></i> </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                        <div class="text-center">
                            <div>
                                @lang('lang.display') {!! $all_email_type->firstItem() !!} - {!! $all_email_type->lastItem() !!} @lang('lang.of') {!! $all_email_type->total() !!} items <br>
                            </div> <br>

                            <div class="btn-group mr-2">
                                <a href="{!! $all_email_type->url($all_email_type->onFirstPage()) !!}"
                                    @if ($all_email_type->currentPage() ==  $all_email_type->onFirstPage())
                                        style="opacity: 0.5;
                                            pointer-events: none;
                                            cursor: default;"
                                    @endif
                                     class="btn border btn-sm btn-default">
                                    <i class="fa fa-angle-double-left"> </i>
                                </a>
                                <a href="{!! $all_email_type->previousPageUrl()!!}"
                                    @if ($all_email_type->currentPage() ==  $all_email_type->onFirstPage())
                                        style="opacity: 0.5;
                                            pointer-events: none;
                                            cursor: default;"
                                    @endif
                                    class="btn border btn-sm btn-default">
                                    <i class="fa fa-angle-left"> </i>
                                </a>
                                <a href="{!! $all_email_type->url($all_email_type->currentPage()) !!}"  class="btn border btn-sm btn-primary">{!! $all_email_type->currentPage() !!}</a>

                                <a href="{!! $all_email_type->nextPageUrl()!!}"
                                    @if ($all_email_type->currentPage() ==  $all_email_type->lastPage())
                                        style="opacity: 0.5;
                                            pointer-events: none;
                                            cursor: default;"
                                    @endif
                                    class="btn btn-sm border btn-default">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="{!! $all_email_type->url($all_email_type->lastPage()) !!}"
                                    @if ($all_email_type->currentPage() ==  $all_email_type->lastPage())
                                        style="opacity: 0.5;
                                            pointer-events: none;
                                            cursor: default;"
                                    @endif
                                    class="border btn btn-sm btn-default">
                                    <i class="fa fa-angle-double-right"> </i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
      </div>
    </div>




    <script>
        function valide_delete(name, id){
            var msg = '{{ __('lang.delete_email_type')}}' + " <b>" + name + "</b> ?";
            bootbox.confirm({
                message: msg,
                buttons: {
                    confirm: {
                        label: '{{ __('lang.yes') }}',
                        className: 'btn-info btn-sm',
                    },
                    cancel: {
                        label: '{{ __('lang.cancel') }}',
                        className: 'btn-danger btn-sm'
                    }
                },
                callback: function(result){
                    if(result){
                        //alert(id);
                        window.location.href =  '{{ route("delete_email_type", ["id" =>  '' ])}}'+id;
                        return true;
                    }
                    else{
                        //callback();
                        bootbox.hideAll();
                        return false;
                    }
                }

            });

            return false;

        }
    </script>





@endsection
