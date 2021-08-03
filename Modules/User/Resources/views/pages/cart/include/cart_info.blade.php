<div class="table-wrapper">
    <table class="data table totals">
        <tbody>

            <tr class="totals sub">
                <th class="mark" scope="row">Tổng tiền</th>
                <td class="amount">
                    <span class="price" data-th="Subtotal">{{ \Cart::subtotal(0,0,'.') }} đ</span>
                </td>
            </tr>
            <tr class="totals sub">
                <th class="mark" scope="row">VAT</th>
                <td class="amount">
                    <span class="price" data-th="Subtotal">{{ \Cart::tax(0,0,'.') }} đ</span>
                </td>
            </tr>
            <tr class="grand totals">
                <th class="mark" scope="row">
                    <strong>Tổng đơn hàng</strong>
                </th>
                <td class="amount" data-th="Order Total">
                    <strong><span class="price">{{ \Cart::total(0,0,'.') }} đ</span></strong>
                </td>
            </tr>
        </tbody>
    </table>
</div>