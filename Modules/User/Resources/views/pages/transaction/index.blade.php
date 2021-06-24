@extends('user::layouts.app_master_user')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@stop
@section('content')

    <div class="container" id="pjax-pages-page">
        <div class="pages_user mt30">
            <div class="box">
                <div class="box-30">
                    <div class="box-dashboard-item">
                        @include('user::components._inc_avatar')
                    </div>
                </div>
                <div class="box-70 margin-left">
                    <div class="box-dashboard-item">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn</th>
                                        <th scope="col">Khóa học</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Học ngay</th>
                                        <th scope="col" style="text-align: center">Xử lý</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $item)
                                        <tr>
                                            <td scope="row" style="position:relative;" data-tooltip="Click để xem chi tiết"
                                                class="css-tooltip">
                                                <a data-pjax href="{{ route('get.video.kh',App\Models\Cart\Order::find($item->id)->course->c_slug) }}">DH{{ $item->id }}</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('get_user.transaction.view', $item->id) }}"
                                                    class="btn btn-xs label-info"><i class="fa fa-eye"></i></a>
                                            </td>
                                            <td> 
                                                <span class="badge {{ $status_glb[$item->t_status]['class'] }}">
                                                {{ $status_glb[$item->t_status]['name'] }}
                                                    </span> 
                                                </td>
                                                <td>
                                                    <a href="{{ route('get.video.kh',App\Models\Cart\Order::find($item->id)->course->c_slug) }}"
                                                        class="btn btn-xs label-info"><i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            <td style="text-align: center"> <a href="" class="btn-xs label-danger"
                                                    style="color: white"><i class="fa fa-save"></i> Huỷ đơn</a> </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
