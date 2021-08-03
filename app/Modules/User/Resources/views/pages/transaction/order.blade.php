@extends('user::layouts.app_master_user')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
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
                                        <th scope="col" style="width: 15%">Xem</th>
                                        <th scope="col" style="width: 40%">Tên</th>
                                        <th class="hide-sm" scope="col" style="width: 20%">Giá</th>
                                        <th class="hide-sm" scope="col" style="text-align: center">Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            {{-- {{ route('get.video.kh',$courseDetail->c_slug) }} --}}
                                            <td scope="row" style="position:relative;"
                                                data-tooltip="Click để xem chi tiết khoá học" class="css-tooltip">
                                                <a data-pjax
                                                    href="{{ route('get_user.transaction.view_course', ['idTransaction' => $idTransaction, 'idCourse' => $item->o_action_id]) }}">Khoá học</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('get.course.render', ['slug' => ($item->course->c_slug ?? '') . '-cr']) }}"
                                                    target="_blank">{{ $item->course->c_name ?? '[N\A]' }}</a>
                                            </td>
                                            <td class="hide-sm">
                                                {{ number_format($item->o_price, 0, ',', '.') }} đ
                                            </td>
                                            <td class="hide-sm" style="text-align: center"> <span class="badge">
                                                    {{ $status[$item->o_status]['name'] }}
                                                </span> </td>
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
