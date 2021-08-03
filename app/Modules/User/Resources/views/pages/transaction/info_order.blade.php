@php
    $abc = json_decode($get_info_order, true);
    $abcd = json_decode($abc[0]['cart_info']);
    $array = json_decode(json_encode($abcd),true);
    $tinhtong = 0;
@endphp

<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Đơn Giá</th>
                <th scope="col">Tổng Tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($array as $key => $value)
            <tr>
                <td class="col-md-3">{{ pare_url_file($value['options']['images']) }}</td>
                <td class="col-md-3">{{ $value['name'] }}</td>
                <td class="col-md-3">{{ $value['qty'] }}</td>
                <td class="col-md-3">{{ number_format($value['price']) }}</td>
                <td class="col-md-3">
                    {{ number_format($value['qty'] * $value['price']) }}
                    @php
                        $tinhtong += $value['qty'] * $value['price']
                    @endphp        
                </td>
                
            </tr>
            @endforeach
            <tr><td>Tổng Tiền</td><td></td><td></td><td></td><td>{{ $tinhtong }}</td></tr>
        </tbody>
    </table>
</div>