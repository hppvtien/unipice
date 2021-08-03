
<div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Sản Phẩm</th>
        <th>Số Lượng</th>
        <th>Đơn Giá</th>
        <th>Tổng Tiền</th>
      </tr>
        @foreach ($get_result_arr as $item)
        <tr>
            <td><a href="{{ get_link_blank($item['id']) }}" target="_blank" rel="noopener noreferrer">{{ get_title_product($item['id']) }}</a></td>
            <td>{{ $item['qty_sale'] }}</td>
            <td>{{ number_format($item['price_sale']) }}</td>
            <td>{{ number_format($item['price_subtotal']) }}</td>
        </tr>
        @endforeach 
        <tr><td>Tổng Tiền Gói Sale</td><td></td><td></td><td>{{ $get_total_price }}</td></tr>
    </table>
  </div>