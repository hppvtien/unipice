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
                                    <th scope="col">Tổng</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Xuất hóa đơn</th>
                                    <th scope="col" style="text-align: center">Xử lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $item)
                                <tr>
                                    <td scope="row" style="position:relative" data-tooltip="Click để xem chi tiết" class="css-tooltip">
                                        <a href="{{ route('get_user.transaction.view', $item->id) }}">DH{{ $item->id }}</a>
                                    </td>
                                    <td>{{ number_format($item->t_total_money, 0, ',', '.') }} đ</td>
                                    <td> <span class="label {{ $item->getStatus($item->t_status)['class'] }}">
                                            {{ $item->getStatus($item->t_status)['name'] }} </span> </td>
                                    <td> <a href="javascript:;" data-id="{{ $item->id }}" class="btn-xs label-danger js-export-order" style="color: white"><i class="fa fa-share"></i> Xuất hóa đơn </a> </td>
                                   @if ($item->t_status == 1)
                                   <td style="text-align: center"> <a href="javascript:;" data-id="{{ $item->id }}" class="del_order btn-xs label-danger" style="color: white"><i class="fa fa-save"></i> Huỷ đơn</a> </td>
                                   @else
                                   <td style="text-align: center"> <a href="javascript:;" data-id="{{ $item->id }}" class="btn-xs label-success" style="color: white"><i class="fa fa-save"></i> Hoàn thành</a> </td>
                                   @endif
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
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.del_order').on('click', function() {
        let v_idOrder = $(this).attr('data-id');
        alert(v_idOrder);
        $.ajax({
            url: "{{ route('get_user.replaceOrder') }}",
            type: "post",
            dataType: "text",
            data: {
                v_idOrder: v_idOrder
            },
            success: function(result) {
                window.location.href = "{{ route('get_user.dashboard') }}";
                console.log(result);
            },
            error: function(result) {
                console.log(result);
            }
        });
    });
    $('.js-export-order').on('click', function() {
        let id_transaction = $(this).attr('data-id');
        $.ajax({
            url: "{{ route('get_user.downPDF') }}",
            type: "get",
            dataType: "text",
            data: {
                id_transaction: id_transaction
            },
            success: function(result) {
                window.open("down-pdf.html?id_transaction=" + id_transaction + "")
            },
            error: function(result) {
                console.log(result);
            }
        });
    });
</script>
@stop