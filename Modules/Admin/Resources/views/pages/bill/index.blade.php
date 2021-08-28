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
                                    <th rowspan="1"></th>
                                    <th rowspan="1"></th>
                                    <th colspan="3" class="text-center border-bottom border-left">Đầu kỳ</th>
                                    <th colspan="3" class="text-center border-bottom border-left">Trong kỳ</th>
                                    <th colspan="3" class="text-center border-bottom border-left  border-right">Cuối kỳ kỳ</th>
                            
                                </tr>
                                <tr>
                                    <th class="border">ID</th>
                                    <th class="border">Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th class="border-right">Tổng tiền</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th class="border-right">Tổng tiền</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th class="border-right">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bill as $key => $item)
                                <tr>
                                    <td scope="row">{{ $item->id }}</td>
                                    <td scope="row">{{ $item->product_id }}</td>
                                    <td scope="row">{{ $item->total_qty }}</td>
                                    <td scope="row">{{ $item->price_lotproduct }}</td>
                                    <td scope="row">{{ $item->total_qty*$item->price_lotproduct }}</td>
                                    <td scope="row">{{ $item->total_qty-$item->qty }}</td>
                                    <td scope="row">{{ $item->price_lotproduct }}</td>
                                    <td scope="row">{{ ($item->total_qty-$item->qty)*$item->price_lotproduct }}</td>
                                    <td scope="row">{{ $item->qty }}</td>
                                    <td scope="row">{{ $item->price_lotproduct }}</td>
                                    <td scope="row">{{ $item->total_qty*$item->price_lotproduct }}</td>
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