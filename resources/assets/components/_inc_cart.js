import Toastr from "toastr";

var Cart = {
    flagClick : false,
    init : function (){
        this.buyNow()
        this.addCart()
        this.processCartPay()
    },

    processCartPay: function processCartPay() {
        var _this = this;

        $(".js-save-cart").click(function (event) {
            event.preventDefault();
            var $this = $(this);
            let group_buy = $("input[name='group_buy']:checked").val();
            let method_customer_code;
            let method_company;
            
            if(group_buy == 0){
                 method_customer_code = '0000000000';
                 method_company = 'Ca nhan';
            } else {
                 method_customer_code = $("input[name='method_customer_code']").val();
                 method_company = $("input[name='method_company']").val();
            }
            let method_invoice = $("input[name='method_invoice']").val();
            let method_course = $("input[name='method_course']").val();
            let method_phone = $("input[name='method_phone']").val();
            let total_paid = $("#total_paid").text();
            let total_no_vat = $("#total_no_vat").text();
            let vat_total = $("#vat_total").text();
            let method_email = $("input[name='method_email']").val();
            let method_customer = $("input[name='method_customer']").val();
            let method_address = $("input[name='method_address']").val();
            let type_pay = $("input[name='type_pay']:checked").val();
            let vouchers = $("input[name='vouchers']").val();
            $this.addClass('active');
            // _this.flagClick = true;
            var URL = $this.attr('data-url');
            var URLRD = $this.attr('data-url-rd');
            $.ajax({
                url: URL,
                method: "POST",
                data: {
                    method_invoice: method_invoice,
                    vouchers: vouchers,
                    method_course: method_course,
                    method_phone: method_phone,
                    type_pay: type_pay,
                    total_paid: total_paid,
                    total_no_vat: total_no_vat,
                    vat_total: vat_total,
                    method_email: method_email,
                    method_customer: method_customer,
                    method_address: method_address,
                    method_customer_code: method_customer_code,
                    method_company: method_company,
                    group_buy: group_buy
                },
                success: function success(results) {
                    if (results.status === 401) {
                        console.log('code sai');
                        toastr__WEBPACK_IMPORTED_MODULE_0___default.a.error(results.messager);
                    } else {
                        console.log('code dung');
                        _this.flagClick = false;
                        $this.removeClass('active');
                        window.location.href = URLRD;
                    }
                },
                error: function error(results) {
                    if (group_buy === 0) {
                        if (results.responseJSON.errors.method_address) {
                            $('.method_address').html(results.responseJSON.errors.method_address)
                        }

                    } else {
                        if (!results.responseJSON.errors.method_address) {
                            $('.method_address').html('')
                        }
                        if (!results.responseJSON.errors.method_company) {
                            $('.method_company').html('')
                        }
                        if (!results.responseJSON.errors.method_customer_code) {
                            $('.method_customer_code').html('')
                        }
if (results.responseJSON.errors.method_address) {
                            $('.method_address').html(results.responseJSON.errors.method_address)
                        }
                        if (results.responseJSON.errors.method_company) {
                            $('.method_company').html(results.responseJSON.errors.method_company)
                        }
                        if (results.responseJSON.errors.method_customer_code) {
                            $('.method_customer_code').html(results.responseJSON.errors.method_customer_code)
                        }
                    }
                }
            });


        });
    },

    buyNow()
    {
        let _this = this
        $(".js-buy-now").click(function (event){
            event.preventDefault()
            let $this = $(this)
            let URL = $this.attr('data-url')
            if(typeof URL !== "undefined")
            {
                let result = _this.processAddCart(URL, $this)
                console.log(result,'result')
                result.done(function (results){
                    if(results.status === 401)
                    {
                        $('.js-popup-auth').modal({
                            escapeClose: true,
                            clickClose: true,
                            showClose: true
                        })
                        return  false
                    }
                    if(results.status === 404)
                    {
                        console.log('404')
                        Toastr.error('Dữ liệu không tồn tại')
                        return  false
                    }

                    if(results.status === 200)
                    {
                        window.location.href = URL_PAY
                    }
                })
            }
        })
    },

    addCart()
    {
        let _this = this
        $(".js-add-cart").click(function (event){
            event.preventDefault()
            let $this = $(this)
            let URL = $this.attr('data-url')
            if(typeof URL !== "undefined")
            {
                let result = _this.processAddCart(URL, $this)
                result.done(function (results){
                    if(results.status === 401)
                    {
                        $('.js-popup-auth').modal({
                            escapeClose: true,
                            clickClose: true,
                            showClose: true
                        })
                        return  false
                    }
                    if(results.status === 404)
                    {
                        console.log('404')
                        Toastr.error('Dữ liệu không tồn tại')
                        return  false
                    }

                    if(results.status === 200)
                    {
                        let $count = $("#countSource")
                        let numberCount = $count.text()
                        $count.text(parseInt($count.text()) + 1)
                        Toastr.success(results.message)
                    }
                })
            }
        })
    },

    processAddCart(URL, $element)
    {
        

        let results = $.ajax({
            url: URL,
            async : false
        });

        return results
    }
}

export default Cart
