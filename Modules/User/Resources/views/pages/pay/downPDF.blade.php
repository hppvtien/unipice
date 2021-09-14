<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất đơn hàng</title>
    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 10px;
            color: #122a67;
            letter-spacing: 1px;
           color: #0b2d25;
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
            position: relative;
            overflow: hidden;
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

        .info-adsmo p span{
            color: #0b2d25;
        }
        .name_invoice p {
            color: #fff;
        }
        .info-adsmo p {
            color: #0b2d25;
        }

        .info-adsmo p span {
            font-weight: bold;
        }

        .name_invoice:first-child {
            margin-bottom: 10px
        }

        .name_invoice {
            background: #0b2d25;
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
            color: #fff
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

        .un-paid {
            position: absolute;
            background: red;
            width: 100%;
            height: 80px;
            right: -70%;
            opacity: .5;
            top: 8%;
            /* transform: scaleX(1.5); */
            transform: rotate(45deg);
        }

        .un-paid p.pun-paid {
            color: #111;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 20px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body style="margin:auto">

    <div class="modal-dialog">
        <div class="un-paid">
            <p class="pun-paid">
                UNPAID
            </p>
        </div>
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <div class="header-modal">
                    <div class="logo">
                        <img width="100%" alt="UniMall" itemprop="logo" src="{{ pare_url_file($configuration->logo) }}">
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
                    <p><span class="title-cc" style="font-size: 20px;letter-spacing:3px">Đơn hàng:</span> {{ $data_pdf->code_invoice }}</p>
                    <p><span class="title-cc">Ngày:</span> {{ $data_pdf->created_at->format('d-m-Y') }}</p>
                </div>
                <div class="name_invoice">
                    <p><span class="title-cc">Tên khách hàng:</span> {{ $data_pdf->customer_name }}</p>
                    <p><span class="title-cc">Địa chỉ khách hàng:</span> {{ $data_pdf->address }}</p>
                    <p><span class="title-cc">Số điện thoại:</span> {{ $data_pdf->phone }}</p>
                    <p><span class="title-cc">Mã số thuế:</span> {{ $data_pdf->taxcode }}</p>
                </div>
                <div class="invoice_content">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%;">Stt</th>
                                <th scope="col" style="width: 15%;">Tên sản phẩm</th>
                                <th scope="col" style="width: 10%;">Số lượng</th>
                                <th scope="col" style="width: 5%;">Đơn vị</th>
                                <th scope="col" style="width: 10%;">Đơn giá</th>
                                <th scope="col" style="width: 10%;">Thành tiền</th>
                                {{-- <th scope="col" style="width: 10%;">Thuế suất GTGT</th> --}}
                                {{-- <th scope="col" style="width: 5%;">Tiền thuế</th> --}}
                                <th scope="col" style="width: 15%;">Cộng</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $keys = 1;
                            @endphp
                            @foreach (json_decode($data_pdf->cart_info) as $item)
                            <tr>
                                <td>{{ $keys ++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ getSizeNameType($item->weight) }}</td>
                                <td>{{ formatVnd($item->price) }}</td>
                                <td>{{ formatVnd($item->qty * $item->price) }}</td>
                                {{-- <td>{{ getVatProduct($item->id) }}%</td> --}}
                                {{-- <td>
                                    @if ($item->options->product_vat)
                                    {{ formatVnd($item->options->product_vat) }}
                                    @else
                                        0
                                    @endif
                                </td> --}}
                                <td>{{ formatVnd($item->qty * $item->price + $item->options->product_vat) }}</td>
                                
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="6">Phí Ship</td>
                                <td>{{ formatVnd($data_pdf->total_ship) }} </td>
                            </tr>
                            <tr>
                                <td colspan="6">Ưu đãi</td>
                                <td>{{ formatVnd($data_pdf->total_discount) }} </td>
                            </tr>
                            <tr>
                                <td colspan="5">TỔNG CỘNG TIỀN THANH TOÁN (Đã bao gồm VAT nếu có)</td>
                                <td>{{ formatVnd($data_pdf->total_no_vat) }} </td>
                                {{-- <td></td> --}}
                                {{-- <td>{{ formatVnd($data_pdf->total_vat) }} </td> --}}
                                <td>{{ formatVnd($data_pdf->total_money) }} </td>
                            </tr>
                           <tr>
                            <td colspan="7"><i> Đây là đơn hàng tự động từ hệ thống của <b>UniMall.</b> Nếu có thắc mắc hãy liên hệ Hotline: <b>{{ $configuration->hotline }}</b> . <br>
                                Hoặc email: <b>{{ $configuration->email }}</b></i>
                                </td>
                           </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>

</body>

</html>