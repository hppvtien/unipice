
    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 12px;
            color: #122a67;
            letter-spacing: 1px
        }
        .fade:not(.show) {
    opacity: 1;
}
.modal{
    display: block
}

        .col-item-c p {
            font-weight: bold;
            text-transform: uppercase;
        }

        .col-item-c p>span {
            font-weight: 100;
            text-transform: none;
        }

        .modal-dialog {
            width: 100%;
            margin: auto;
        }

        .modal-content {
            padding: 20px;
            background: #d4d4d4;
        }

        .header-modal {
            width: 100%;
            display: inline-block;
            height: 220px;
        }

        p.title-orr {
            text-transform: uppercase;
            margin-bottom: 15px;
            font-size: 20px;
            text-align: center;
            color: cornflowerblue;
            margin-top: 0;
        }

        .logo {
            display: inline-block;
            max-width: 25%;
            width: 100%;
            float: left;
            position: relative;
        }

        .logo img {
            position: absolute;
            top: 0;
            transform: translateY(30%);
        }

        .info-adsmo {
            max-width: 70%;
            width: 100%;
            display: inline-block;
            float: right;
            text-align: right;
        }

        .info-adsmo p,
        .name_invoice p {
            color: #122a67;
        }

        .info-adsmo p span {
            font-weight: bold;
        }

        .name_invoice:first-child {
            margin-bottom: 10px
        }

        .name_invoice {
            background: #bb9f57;
            padding: 1px 10px;
            margin-bottom: 20px;
        }

        .invoice_content table {
            background: transparent;
            width: 100%;
            border: none
        }

        table.table.table-striped.table-bordered {
            border: 1px solid;
        }

        .invoice_content table tr td,
        .invoice_content table tr th {
            padding: 5px;
            text-align: left;
            border: none;
            border-bottom: 1px solid;
            border-left: 1px solid;
        }

        .invoice_content table tr td:first-child,
        .invoice_content table tr th:first-child {
            border-left: none;
        }

        .invoice_content table tr {
            border: 1px solid #f2f2f2;
        }

        .invoice_content table tr:last-child {
            border-bottom: none;
        }

        span.title-cc {
            font-weight: bold;
            color: #122a67
        }

        .modal-dialog h1,
        .modal-dialog h4 {
            text-align: center;
            color: #0a1961;
        }

        .modal-dialog h1 {
            font-size: 18px
        }

        .td-sign p {
            margin-top: 0;
            margin-bottom: 5px
        }

        table.table-in,
        table.table-in tr th,
        table.table-in tr td {
            border: none;

        }
        .modal.fade .modal-dialog {
    transition: unset;
    transform: unset;
}
div#myModal {
    max-width: 800px;
    margin: auto;
    z-index: 99;
}

#myModal .modal-dialog {
    max-width: 800px;
    margin: auto;
    position: fixed;
    top: 10%;
    z-index: 9999;
    left: 50%;
    transform: translateX(-50%);
}
    </style>
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <div class="header-modal">
                    <div class="logo">
                        <img width="100%" alt="ADSMO Giải Pháp Digital Marketing Tổng Thể ĐỘT PHÁ Traffic" itemprop="logo" src="https://adsmo.vn/wp-content/uploads/2020/08/cropped-ADSMO-Giai-Phap-Digital-Marketing-Tong-The-DOT-PHA-Traffic-1.png">
                    </div>
                    <div class="info-adsmo">
                        <p><span class="title-cc">Đơn vị bán hàng:</span> {{ $configuration->name }}</p>
                        <p><span class="title-cc">Địa chỉ:</span> {{ $configuration->address }}</p>
                        <p><span class="title-cc">Email:</span> {{ $configuration->email }}</p>
                        <p><span class="title-cc">Hotline:</span> {{ $configuration->hotline }}</p>
                        <p><span class="title-cc">Đường dây nóng khiếu nại dịch vụ:</span> {{ $configuration->hotline_rp }}</p>
                        <p><span class="title-cc">Mã số thuế:</span> {{ $configuration->tax_id }}</p>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="name_invoice">
                    <p><span class="title-cc" style="font-size: 20px;letter-spacing:3px">Invoice:</span> {{ $bill_data->method_invoice }}</p>
                    <p><span class="title-cc">Invoice Date:</span> {{ $bill_data->created_at->format('d-m-Y') }}</p>
                </div>
                <div class="name_invoice">
                    <h2 style="margin-top: 0;color:#122a67;letter-spacing:3px;font-size:20px">Invoice To</h2>
                    <p><span class="title-cc">Tên khách hàng:</span> {{ $bill_data->method_customer }}</p>
                    <p><span class="title-cc">Địa chỉ khách hàng:</span> {{ $bill_data->method_address }}</p>
                    @if ($bill_data->group_buy == 1)
                    <p><span class="title-cc">Tên Công Ty:</span> {{ $bill_data->method_company }}</p>
                    <p><span class="title-cc">Mã số thuế:</span> {{ $bill_data->method_customer_code }}</p>
                    @else

                    @endif
                </div>
                <div class="invoice_content">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Tên khóa học</th>
                                <th scope="col">Sô lượng</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listCarts as $key => $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ number_format(round($item->price / 1.1, 1), 0, '', '.') }}đ</td>
                                <td>{{ number_format(round($item->price / 1.1, 1)*$item->qty, 0, '', '.') }}đ</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">Tổng tiền khóa học( Total amount )</td>
                                <td>{{ $bill_data->total_no_vat }}</td>
                            </tr>
                            <tr>
                                <td colspan="1">Thuế GTGT (VAT Rate): 10%</td>
                                <td colspan="2">Tiền Thuế GTGT (VAT amount)</td>
                                <td>{{ $bill_data->vat_total }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">Tổng cộng tiền thanh toán (Grand total)</td>
                                <td>{{ $bill_data->method_paid }}</td>
                            </tr>
                            <tr>
                                <td colspan="4">Mã đơn hàng: {{ $bill_data->method_invoice }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <p class="text-center" style="margin-top: 10px" id="close-order"> <a class="text-danger" href="javascript:;">Close</a> </p>
                </div>
            </div>

        </div>
    </div>