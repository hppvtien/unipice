<style>
    @media only screen and (max-width: 768px) {
        .pay-process ul {
            display: block;
        }

        .pay-process ul li {
            display: block;
            width: 90%;
        }

        .adsmo-top {
            margin-top: 60px;
        }

        .pay-process ul li:nth-child(1),
        .pay-process ul li:nth-child(3) {
            display: none;
        }

        .box {
            display: flex;
            flex-wrap: wrap;
        }

        a.header-widget-icon.profile-icon {
            margin-right: 10px;
        }

        .box .box-70,
        .box .box-30 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .pay-right{
            margin-left: 0;
        }
        .box .box-70 {
            order: 2;
        }

        .pay-left .lists-payments .item {
            display: flex;
            float: unset;
            width: 100%;
            height: 70px;
        }

        .pay-left .checkmark {
            top: 0;
            transform: translateY(50%);
        }

        a.popup-guide.text-danger {
            font-size: 12px;
        }
    }
</style>
<div class="pay-process adsmo-top mb20">
    <div class="container">
        <ul class="checkout-list-part pc">
            <li>
                <span class="checkout-span">Xem giỏ hàng</span>
                <span class="checkout-triangle-right"></span>
            </li>
            <li>
                <span class="checkout-triangle-left"></span>
                <span class="checkout-span">Chọn cách thanh toán và điền thông tin</span>
                <span class="checkout-triangle-right"></span>
            </li>
            <li>
                <span class="checkout-triangle-left"></span>
                <span class="checkout-span">Hoàn tất đơn hàng</span>
            </li>
        </ul>
    </div>

</div>