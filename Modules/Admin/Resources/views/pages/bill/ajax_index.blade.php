<table class="table mg-b-0 text-md-nowrap">
    <thead>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1"></th>
            <th colspan="3" class="text-center border-bottom border-left">Đầu kỳ</th>
            <th colspan="3" class="text-center border-bottom border-left">Trong kỳ</th>
            <th colspan="3" class="text-center border-bottom border-left  border-right">Cuối kỳ</th>

        </tr>

    </thead>
    <tbody>
        <tr>
            <td class="border"></td>
            <td class="border"></td>
            <td class="font-weight-bold">Tổng tiền đầu kỳ:</td>
            <td colspan="2" class="border-right text-danger">{{ formatVnd($total_top) }}</td>
            <td class="font-weight-bold">Tổng tiền trong kỳ:</td>
            <td colspan="2" class="border-right text-danger">{{ formatVnd($total_mid) }}</td>
            <td class="font-weight-bold">Tổng tiền cuối kỳ:</td>
            <td colspan="2" class="border-right text-danger">{{ formatVnd($total_bot) }}</td>
        </tr>
        <tr>
            <td class="border">ID</td>
            <td class="border">Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Giá</td>
            <td class="border-right">Tổng tiền</td>
            <td>Số lượng</td>
            <td>Giá</td>
            <td class="border-right">Tổng tiền</td>
            <td>Số lượng</td>
            <td>Giá</td>
            <td class="border-right">Tổng tiền</td>
        </tr>
        @foreach ($bill as $key => $item)
        <tr>
            <td scope="row">{{ $item->id }}</td>
            <td scope="row">{{ getNameProduct($item->product_id) }}</td>
            <td scope="row">{{ $item->total_qty }}</td>
            <td scope="row">{{ formatVnd($item->price_lotproduct) }}</td>
            <td scope="row">{{ formatVnd($item->total_qty*$item->price_lotproduct) }}</td>
            <td scope="row">{{ $item->total_qty-$item->qty }}</td>
            <td scope="row">{{ formatVnd($item->price_lotproduct) }}</td>
            <td scope="row">{{ formatVnd(($item->total_qty - $item->qty)*$item->price_lotproduct) }}</td>
            <td scope="row">{{ $item->qty }}</td>
            <td scope="row">{{ formatVnd($item->price_lotproduct) }}</td>
            <td scope="row">{{ formatVnd($item->qty*$item->price_lotproduct) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>