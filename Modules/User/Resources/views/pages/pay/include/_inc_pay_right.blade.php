<div class="pay-right">
    <div class="pay-box-item">
         <h4 class="flex flex-jc-sb">
            <span><i class="fa fa-shopping-bag"></i> {{ \Cart::content()->count() }} Khoá học</span>
            <a href="{{ route('get_user.cart') }}" title="Thay đổi">Thay đổi</a>
        </h4>
        <ul class="pay-cart-lists">
            @foreach($listCarts as $item)
                <li>
                    <a class="name" href="" target="_blank" title="{{ $item->name }}">{{ $item->name }}</a>
                    <span class="price">{{ number_format(round($item->price + $item->price*$item->taxRate/100), 0, '', '.') }}đ</span>
                </li>
            @endforeach
        </ul>
        <div class="line mb15"></div>
        <div class="pay-code mb15">
            <input type="text" class="form-control w-100" name="vouchers" placeholder="Mã giảm giá">
            <div class="messager_check text-center mb10 text-danger"></div>
            <button type="button" id="check_vouchers" class="form-control w-50 mx-auto btn-success" name="check_vouchers">Kiểm tra</button>
        </div>
        <div class="pay-footer">
            <p class="color-orange box-total-pay">
                <span>Tổng tiền thanh toán: </span>
                <span id="total_paid">{{ \Cart::total(0,0,'.') }}đ</span>
            </p>
        </div>
    </div>

</div>


