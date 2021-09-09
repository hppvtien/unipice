<!DOCTYPE html>
<html>
<head>
    <meta name="csrf" value="{{ csrf_token() }}">
    <title>Xuất đơn hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .col-item-c p {
        font-weight: bold;
        text-transform: uppercase;
    }

    .col-item-c p>span {
        font-weight: 100;
        text-transform: none;
    }
</style>

<body>
    <h1 class="text-center text-success">Thông tin đơn hàng</h1>
    <div class="container">
        <div class="cart-detail text-center">
            @foreach($listCarts as $item)
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-item-c">
                            <p class="text-danger product-tt">Khóa học: <span class="text-success">{{ $item->name }}</span> </p>
                        </div>
                        <div class="col-12 col-item-c">
                            <p class="text-danger">Phương thức thanh toán: <span class="text-success" id="method_pay">Chuyển khoản</span></p>
                        </div>
                        <div class="col-12 col-item-c">
                            <p class="text-danger">Tài khoản Email: <span class="text-success" id="email_pay">{{ get_data_user('web','email') }}</span> </p>
                        </div>
                        <div class="col-12 col-item-c">
                            <p class="text-danger">Tổng tiền: <span class="text-success" id="subtotal_pay">{{ \Cart::subtotal(0,0,'.') }} đ</span></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <h2 class="text-center text-info">Khách hàng vui lòng cung cấp thêm thông tin để xuất đơn hàng.</h2>
    <div class="container">
        @foreach($listCarts as $item)
        <form id="form-order" action="{{ route('get_user.downPDF') }}" method="get">
            @csrf
            <input type="hidden" class="form-control" name="method_invoice" id="method_invoice" value="#00<?php echo (rand(1000, 9999)); ?>">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Khóa học</label>
                <div class="col-sm-10">
                    <input type="text" name="method_course" class="form-control" id="method_course" value="{{ $item->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Phương thức thanh toán</label>
                <div class="col-sm-10">
                    <input type="method_pay" class="form-control" id="method_pay" name="method_pay" placeholder="Phương thức thanh toán" value="Chuyển khoản">
                </div>
            </div>
            <div class="form-group row">
                <label for="method_paid" class="col-sm-2 col-form-label">Tổng tiền phải thanh toán</label>
                <div class="col-sm-10">
                    <input type="method_pay" class="form-control" id="method_paid" name="method_paid" value="{{ \Cart::subtotal(0,0,'.') }} đ">
                </div>
            </div>
            <div class="form-group row">
                <label for="method_email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" checked class="form-control" id="method_email" name="method_email" placeholder="Email" value="{{ get_data_user('web','email') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="method_name" class="col-sm-2 col-form-label">Họ tên cá nhân (Tổ chức)</label>
                <div class="col-sm-10">
                    <input type="text" required name="method_customer" required class="form-control" id="method_customer" placeholder="Vui lòng nhập họ tên" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="method_address" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" required class="form-control" required name="method_address" id="method_address" placeholder="Vui lòng nhập địa chỉ">
                </div>
            </div>
            <div class="add-form-company">
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Bạn là tổ chức hay cá nhân</label>
                <div class="col-sm-10">
                    <input checked class="form-check-input company_us" type="radio" name="group_buy" id="inlineRadio1" value="0">
                    <label class="form-check-label" for="inlineRadio1">Cá nhân</label>
                    <input class="form-check-input company_us" type="radio" name="group_buy" id="company_us" value="1">
                    <label class="form-check-label" for="inlineRadio2">Tổ chức</label>
                </div>
            </div>
            <div class="container">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg pdf-exp" id="views" data-toggle="modal" data-target="#myModal">Xem trước</button>
                <button type="submit" class="btn btn-success btn-lg pdf-exp" id="export">Xuất đơn hàng</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">

                </div>

            </div>
        </form>
        @endforeach
    </div>
    <!-- Button trigger modal -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let input_html = '<div class="form-group row">'+
    '<label for="method_name" class="col-sm-2 col-form-label">Tên công ty</label>'+
    '<div class="col-sm-10">'+
    '<input type="text" required name="method_company" required class="form-control" id="method_company" placeholder="Vui lòng nhập tên công ty" value="">'+
    '</div>'+
    '</div>'+
    '<div class="form-group row">'+
    '<label for="method_name" class="col-sm-2 col-form-label">Mã số thuế</label>'+
    '<div class="col-sm-10">'+
    '<input type="text" required name="method_customer_code" required class="form-control" id="method_customer_code" placeholder="Vui lòng nhập mã số thuế" value="">'+
    '</div>'+
    '</div>';

    $(".company_us").on('change', function() {
        let group_buy = $("input[name='group_buy']:checked").val();
        if(group_buy == 1){
            $('.add-form-company').html(input_html);
        };
        if(group_buy == 0){
            $('.add-form-company .form-group').remove();
        };
    });

    $('#views').on('click', function() {
        let method_invoice = $("input[name='method_invoice']").val();
        let method_course = $("input[name='method_course']").val();
        let method_pay = $("input[name='method_pay']").val();
        let method_paid = $("input[name='method_paid']").val();
        let method_email = $("input[name='method_email']").val();
        let method_customer = $("input[name='method_customer']").val();
        let method_address = $("input[name='method_address']").val();
        let group_buy = $("input[name='group_buy']:checked").val();
        let method_customer_code = $("input[name='method_customer_code']").val();
        let method_company = $("input[name='method_company']").val();
        $.ajax({
            url: "{{ route('get_user.generatePDF') }}",
            type: "post",
            dataType: "text",
            data: {
                method_invoice: method_invoice,
                method_course: method_course,
                method_pay: method_pay,
                method_paid: method_paid,
                method_email: method_email,
                method_customer: method_customer,
                method_address: method_address,
                method_customer_code: method_customer_code,
                method_company: method_company,
                group_buy: group_buy,
                _token: "{{ csrf_token() }}"
            },
            success: function(result) {
                console.log(result);
                $('#myModal').html(result);
            },
            error: function(result) {
                console.log(result);
            }
        });
    });
</script>
</html>