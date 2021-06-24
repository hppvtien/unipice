@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Danh sách hóa đơn</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mã Hóa đơn</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Tổng tiền( gồm VAT 10% )</th>
                                    <th>Khách hàng</th>
                                    <th>Ngày xuất</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bill as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>
                                        {{ $item->method_invoice }}
                                    </td>
                                    <td>
                                        {{ $item->method_course }}
                                    </td>
                                    <td>
                                        {{ $item->method_pay }}
                                    </td>
                                    <td>
                                        {{ $item->paid_total }}
                                    </td>
                                    <td>
                                        {{ $item->method_customer }}
                                    </td>
                                    <td>
                                        {{ $item->created_at }}
                                    </td>
                                    <td>
                                        <button type="button" data-id="{{ $item->id }}" class="bill_id btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Chi tiết</button>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
<div class="" id="myModal">

    
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.bill_id').on('click', function() {
        let b_id = $(this).attr('data-id');
        $.ajax({
            url: "{{ route('get_admin.bill.view') }}",
            type: "post",
            dataType: "text",
            data: {
                b_id: b_id
            },
            success: function(result) {
                let tiencss = $('#myModal').html(result);
            },
            error: function(result) {
                console.log(result, +'ssssss');
                // $('#result').html(result);
            }
        });
    });
    // 
</script>

@stop