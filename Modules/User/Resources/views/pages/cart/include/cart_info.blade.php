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
                    <span class="price" data-th="Subtotal" id="total_vat_product">{{ formatVnd(subtotalTax(\Cart::content())) }} đ</span>
                </td>
            </tr>
            @if (get_data_user('web','type') == 2 && checkUidSpiceClub(get_data_user('web')))
            <tr class="totals sub">
                <th class="mark" scope="row">Ưu đãi SpiceClub</th>
                <td class="amount">
                    <span class="price" data-th="discounttotal">-{{ formatVnd((int)Cart::total(0,0,'')*(getDiscount()[0])/100) }}</span>
                </td>
            </tr>
            @else

            @endif

            <tr class="grand totals">
                <th class="mark" scope="row">
                    <strong>Tổng đơn hàng</strong>
                </th>
                <td class="amount" data-th="Order Total">
                    @if (get_data_user('web','type') == 2 && checkUidSpiceClub(get_data_user('web')))
                    <strong><span class="price">{{ formatVnd((int)Cart::total(0,0,'') - (int)Cart::total(0,0,'')*(getDiscount()[0])/100) }}</span></strong>
                    @else
                    <strong><span class="price">{{ formatVnd((int)Cart::total(0,0,'')) }}</span></strong>
                    @endif

                </td>
            </tr>
        </tbody>
    </table>
</div>