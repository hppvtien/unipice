$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});

function numberVnd(price_not_bumb) {
    return price_not_bumb.toLocaleString('vi', { style: 'currency', currency: 'VND' })
}

function numberTrim(price_not_bumb) {
    return Number((price_not_bumb.replaceAll('₫', '')).replaceAll('.', ''));
}
$("#trade-product").on("change", function() {
    let URL = $(this).attr("data-url");
    let id_trade = this.value;
    $.ajax({
        url: URL,
        method: "POST",
        data: {
            id_trade: id_trade
        },
        success: function(data) {
            $("#group-product").html(data);
        }
    });
});
$(".name-filler").on("click", function() {
    let data_slug_trade = $(this).attr("data-slug-trade");
    let data_slug_cat = $(this).attr("data-slug-cat");
    let data_url = $(this).attr("data-url");
    let data_sort = $("#sort_by")
        .find(":selected")
        .val();
    let data_order = $("#order_by")
        .find(":selected")
        .val();
    $.ajax({
        url: data_url,
        method: "POST",
        data: {
            data_slug_trade: data_slug_trade,
            data_slug_cat: data_slug_cat,
            data_sort: data_sort,
            data_order: data_order
        },
        success: function(data) {
            console.log(data);
            $("#show-product").html(data);
        },
        error: function(data) {
            console.log(data);
        }
    });
});
$(".get-map-google").on("click", function() {
    $(this).each(function(index, el) {
        var data_lat = $(this).attr("data-lat");
        var data_lng = $(this).attr("data-lng");
        $("#ren_map").html(data_lat);
    });
});

$("#search_name").on("keyup", function() {
    let store_name = $("input[name=search_name]").val();
    let data_url = $(this).attr("data-url");
    $.ajax({
        url: data_url,
        method: "POST",
        data: {
            store_name: store_name
        },
        success: function(data) {
            console.log(data);
            $("#show-store").html(data);
        }
    });
});

$(".search_province").on("change", function() {
    let data_url = $(this).attr("data-url");
    let store_province = $(".search_province option:selected").val();
    $.ajax({
        url: data_url,
        method: "POST",
        data: {
            store_province: store_province
        },
        success: function(data) {
            console.log(data);
            $("#show-store").html(data);
        }
    });
});

$(".js-add-cart").on("click", function() {
    let URL = $(this).attr("data-url");
    let data_uid = $(this).attr("data-uid");
    let data_size = $(this).attr("data-size");
    let data_qtyinbox = Number($(this).attr("data-qtyinbox"));
    let data_minbox = Number($(this).attr("data-min-box"));
    let data_id = $(this).attr("data-id");
    let data_price_temp = $('.price-sale-preview' + data_id).text();
    let data_price = Number((data_price_temp.replaceAll('Giá:', '')).replaceAll('₫', '').replaceAll('.', ''));
    let data_count = $(this).attr("data-count");
    let qty_user = $("#js-qty" + data_id).val();
    $.ajax({
        url: URL,
        method: "get",
        data: {
            data_size: data_size,
            qty_user: qty_user,
            data_price: data_price,
            data_id: data_id,
            data_uid: data_uid,
            data_qtyinbox: data_qtyinbox,
            data_minbox: data_minbox
        },
        success: function(data) {
            $(".count-cart-s")
                .addClass("c-header__minicart-count")
                .html(
                    '<span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;">' +
                    data.count +
                    '</span>'
                );
            if (data.status === 200) {
                $("#toast-container").html(
                        '<div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">' +
                        data.message +
                        '</div></div>'
                    ),
                    4000;
                setTimeout(function() {
                    $(".toast-success").remove();
                }, 2000);
            }
        }
    });
});
$(document).on('ready', function() {
    var sum = 0;
    $('.product_vat').each(function() {
        sum += parseFloat(this.value);
    });
    $('#total_vat_product').html(sum);
});
$("#updaưte-cart").on("click", function() {
    // $('.close-btn-ud').css({ "display": "block", "background": "rgba(192,192,192, 0.9)", "z-index": "99999999" }).slideDown('slow');

    let item_id = $(this).attr("item-id");
    let item_i3d = $("input[name='cart[qty][]']").val()
    console.log(item_i3d);
    return false;
    let data_size = $(this).attr("data-size");
    let URL = $("#cart-" + item_id + "-" + data_size + "-qty").attr("data-url");
    let item_qty = $("#cart-" + item_id + "-" + data_size + "-qty").val();
    let data_qty = $("#cart-" + item_id + "-" + data_size + "-qty").attr('data-qty');
    let item_row = $("#cart-" + item_id + "-" + data_size + "-qty").attr("data-row");
    let item_min = $("#cart-" + item_id + "-" + data_size + "-qty").attr("min");
    let data_price = $("#cart-" + item_id + "-" + data_size + "-qty").attr("data-price");
    let data_image = $("#cart-" + item_id + "-" + data_size + "-qty").attr("data-image");
    let data_store = $("#cart-" + item_id + "-" + data_size + "-qty").attr("data-store");
    let total_price = item_qty * data_price;
    if (item_qty < item_min) {
        $("#text-qtyerr" + item_id).text("Tối thiểu: " + item_min + " thùng").slideDown(this);
    } else if (item_qty == 0) {
        $("#text-qtyerr" + item_id).text("Tối thiểu: " + item_min + " thùng").slideDown(this);
    } else {
        $("#text-qtyerr" + item_id).text("").slideUp();
        $('#save-qty-product').on('click', function() {
            $.ajax({
                url: URL,
                method: "get",
                data: {
                    item_id: item_id,

                },
                success: function(data) {
                    function formatNumber(num) {
                        return num
                            .toString()
                            .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                    }
                    $("#cart-totals").html(data);
                    $("#price" + item_id).html(formatNumber(total_price + " đ"));
                    // location.reload();
                }
            });
        });
        $('.close-btn-ud').on('click', function() {
            $('.close-btn-ud').css("display", "none");
            $("#cart-" + item_id + "-qty").val(data_qty);
        });

    }
});
$("input.input-qty").each(function() {
    var $this = $(this),
        qty = $this.parent().find(".is-form"),
        min = Number($this.attr("min")),
        max = Number($this.attr("max"));
    if (min == 0) {
        var d = 0;
    } else d = min;
    $(qty).on("click", function() {
        if ($(this).hasClass("minus")) {
            if (d > min) d += -1;
        } else if ($(this).hasClass("plus")) {
            var x = Number($this.val()) + 1;
            if (x <= max) d += 1;
        }
        $this.attr("value", d).val(d);
    });
});

$(".remove_cart_action").on("click", function() {
    let URL = $(this).attr("data-url");
    let item_row = $(this).attr("data-row");
    $.ajax({
        url: URL,
        method: "get",
        data: {
            item_row: item_row
        },
        success: function(data) {
            console.log(data);
            location.reload();
            $("#show-store").html(data);
        }
    });
});
$("#delete-all-cart").on("click", function() {
    let URL = $(this).attr("data-url");
    let type = $(this).attr("data-type");
    $.ajax({
        url: URL,
        method: "get",
        data: {
            type: type
        },
        success: function(data) {
            window.location.href = data;
        }
    });
});

$("#check_vouchers").on("click", function() {

    let URL = $(this).attr("data-url");
    $.ajax({
        url: URL,
        type: "post",
        dataType: "text",
        data: {
            check_vouchers: $("input[name='vouchers']").val()
        },
        success: function(result) {
            $(".messager_check").html(result);

            let v_percent = Number($(".voucher-percent").attr('data-percent'));
            let data_price_temp = $('#total-all-cart').text();
            let data_price_numb = Number((data_price_temp.replaceAll('₫', '')).replaceAll('.', ''));
            let data_price_vat_temp = $('#total-vat-cart').text();
            let data_vat_price_cart = Number((data_price_vat_temp.replaceAll('₫', '')).replaceAll('.', ''));
            let data_price = v_percent * data_price_numb / 100;
            let data_all_price_cart = data_price_numb - data_price;
            if (data_price) {
                let total_all_pr = numberTrim($("#total-all-pr").text());
                let fee_ship = numberTrim($("#fee-ship").text());
                $('#total-vouchers').html('<span class="font-weight-bold">Giảm giá:</span><span class="total-vouchers-d">' + numberVnd(data_price) + '</span>');
                $('#total-all-cart').html(numberVnd(data_all_price_cart));
                $('#total-vat-cart').html(numberVnd(data_vat_price_cart));
                $('#total-cart').html(numberVnd(data_all_price_cart + data_vat_price_cart));
                if (total_all_pr != 0) {
                    $("#total-all-pr").html(numberVnd(fee_ship + data_all_price_cart + data_vat_price_cart));
                }

            }
            return false;

        },
        error: function(result) {
            $(".messager_check").html(result);
        }
    });
});

$("#pay_success").on("click", function() {
    var data_url = $(this).attr("data-url");
    var total_vouchers = numberTrim($(".total-vouchers-d").text());
    var total_all_cart = numberTrim($("#total-all-cart").text());
    var total_vat_cart = numberTrim($("#total-vat-cart").text());
    var total_cart = numberTrim($("#total-cart").text());
    var total_all_pr = numberTrim($("#total-all-pr").text());
    var spice_discount = numberTrim($("#spice_discount").text());
    var fee_ship = numberTrim($('#fee-ship').text());
    var address = $("input[name='address']").val();
    var vouchers = $("input[name='vouchers']").val();
    var province_name_to = $('#province').find(":selected").text();
    var taxcode = $("input[name='taxcode']").val();
    var check_store = $("input[name='check_store']").val();
    var code_invoice = $("input[name='code_invoice']").val();
    var vouchers = $("input[name='vouchers']").val();
    var phone = $("input[name='phone']").val();
    var email = $("input[name='email']").val();
    var customer_name = $("input[name='customer_name']").val();

    $('.error-input').html('');

    if (check_store) {
        $.ajax({
            url: data_url,
            method: "post",
            data: {
                total_all_cart: total_all_cart,
                total_vat_cart: total_vat_cart,
                total_cart: total_cart,
                total_all_pr: total_all_pr,
                code_invoice: code_invoice,
                vouchers: vouchers,
                phone: phone,
                taxcode: taxcode,
                address: address,
                email: email,
                customer_name: customer_name,
                email: email
            },
            success: function success(results) {
                window.location.href = results;
            },
            error: function error(results) {
                console.log("Loizzzzzzzzz");
            }
        });

    } else {
        var method_ship = $('#method_shpping').find(":selected").val();
        var ward_code_to = '';
        var district_id_to = '';
        if (method_ship == 2) {
            ward_code_to = $('#ward').find(":selected").text();
            district_id_to = $('#district').find(":selected").text();
        } else if (method_ship == 1) {
            ward_code_to = $('#ward').find(":selected").attr('data-ward');
            district_id_to = $('#district').find(":selected").attr('data-district');
        } else {
            $('.store_method_ship').html('Bạn chưa chọn phương thức vận chuyển');
            if (address == '') {
                $('.store_address').html('Kiểm tra lại thông tin địa chỉ');
            }
            if (customer_name == '') {
                $('.store_name').html('Kiểm tra lại thông tin tên khách hàng');
            }
            if (phone == '') {
                $('.store_phone').html('Kiểm tra lại số điện thoại');
            }
            if (district_id_to == '' || district_id_to == undefined) {
                $('.store_district').html('Vui lòng chọn quận/huyện');
            }
            if (province_name_to == 'Tỉnh / thành') {
                $('.store_province').html('Vui lòng chọn tỉnh/thành');
            }
            return false;
        }
        if (ward_code_to == '' || ward_code_to == undefined) {
            $('.store_ward').html('Vui lòng chọn phường/xã');
            if (address == '') {
                $('.store_address').html('Kiểm tra lại thông tin địa chỉ');
            }
            if (customer_name == '') {
                $('.store_name').html('Kiểm tra lại thông tin tên khách hàng');
            }
            if (phone == '') {
                $('.store_phone').html('Kiểm tra lại số điện thoại');
            }
            if (district_id_to == '' || district_id_to == undefined) {
                $('.store_district').html('Vui lòng chọn quận/huyện');
            }
            if (province_name_to == 'Tỉnh / thành') {
                $('.store_province').html('Vui lòng chọn tỉnh/thành');
            }
            if (method_ship == 4) {
                $('.store_method_ship').html('Bạn chưa chọn phương thức vận chuyển');
            }
            return false;
        }

        $.ajax({
            url: data_url,
            method: "post",
            data: {
                total_vouchers: total_vouchers,
                total_all_cart: total_all_cart,
                total_vat_cart: total_vat_cart,
                total_cart: total_cart,
                total_all_pr: total_all_pr,
                total_discount: spice_discount,
                fee_ship: fee_ship,
                province_name_to: province_name_to,
                code_invoice: code_invoice,
                vouchers: vouchers,
                phone: phone,
                taxcode: taxcode,
                address: address,
                email: email,
                customer_name: customer_name,
                method_ship: method_ship,
                district_id_to: district_id_to,
                ward_code_to: ward_code_to,
                email: email

            },
            success: function success(results) {
                console.log(results);
                window.location.href = results;
            },
            error: function error(results) {
                console.log("Loizzzzzzzzz");
            }
        });
    }
});


$("#default-success").on("click", function() {

    $(this).html('<span class="spinner-border spinner-border-sm text-warning" role="status" aria-hidden="true"></span>' +
        'Hệ thống đang xử lý...');
    $(this).attr("disabled", "disabled");
    $('#wait').ajaxStart(function() {
        $(this).show();
    }).ajaxComplete(function() {
        $(this).hide();
    });
    var type_pay = $("input[name='type_pay']:checked").val();
    var bank_code = '';
    $("#bank_code").on("change", function() {
        bank_code = $(this).val();
    });
    var data_url = $(this).attr("data-url");
    $.ajax({
        url: data_url,
        type: "post",
        dataType: "text",
        data: {
            type_pay: type_pay,
            bank_code: bank_code
        },
        success: function(result) {
            $("#toast-container").html(
                    '<div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">Đơn hàng đã được gửi đi</div></div>'
                ),
                4000;
            setTimeout(function() {
                $(".toast-success").remove();
            }, 2000);
            window.location.href = result;
        },
        error: function(result) {
            console.log("loixxxxxxxxxxxxxxxxxxxx");
        }
    });
});
$("#submit-form-contact").on("click", function() {
    var data_url = $(this).attr('data-url');
    var name = $("input[name='name']").val();
    var email = $("input[name='email']").val();
    var phone = $("input[name='phone']").val();
    var subject = $("#subject").find(":selected").text();
    var message = $("textarea[name='message']").val();
    $('.error-input').html('');
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var email = $("input[name='email']").val();
    var email_check = re.test(email);
    if (email_check == false) {
        $("#toast-container").html(
                '<div class="toast toast-error" aria-live="assertive" style=""><div class="toast-message">Vui lòng kiểm tra lại thông tin!!</div></div>'
            ),
            4000;
        setTimeout(function() {
            $(".toast-error").remove();
        }, 2000);
    } else {
        if (name == '') {
            $('#name_contact').html('Bạn chưa nhập thông tin Họ tên');

            if (email == '') {
                $('#email_contact').html('Bạn chưa nhập thông tin email');
            }
            if (phone == '') {
                $('#phone_contact').html('Bạn chưa nhập số điện thoại');
            }
            if (message == '') {
                $('#message_contact').html('Bạn chưa nhập nội dung liên hệ!!!');
            }
            return false;
        } else {
            if (email == '') {
                $('#email_contact').html('Bạn chưa nhập thông tin email');
                return false;
            }
            if (phone == '') {
                $('#phone_contact').html('Bạn chưa nhập số điện thoại');
                return false;
            }
            if (message == '') {
                $('#message_contact').html('Bạn chưa nhập nội dung liên hệ!!!');
                return false;
            }

        }
        $.ajax({
            url: data_url,
            method: "post",
            data: {
                name: name,
                email: email,
                phone: phone,
                message: message,
                subject: subject,

            },
            success: function success(results) {
                $("#toast-container").html(
                        '<div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">' + results + '</div></div>'
                    ),
                    4000;
                setTimeout(function() {
                    $(".toast-success").remove();
                }, 2000);
            },
            error: function error(results) {
                console.log("Loizzzzzzzzz");
            }
        });
    }
});


$(".input-type-cart").on('change', function() {
    let html_vnpay = '<div class="form-vnpay"><h3>Chọn ngân hàng:</h3> <div class = "m-sort-by" ><select class name = "bank_code"id = "bank_code">' +
        '<option value = "" selected > Chọn ngân hàng thanh toán </option> ' +
        '<option value = "NCB" > Ngan hang NCB </option> ' +
        '<option value = "AGRIBANK" > Ngan hang Agribank </option> ' +
        '<option value = "SCB" > Ngan hang SCB </option> ' +
        '<option value = "SACOMBANK" > Ngan hang SacomBank </option>' +
        '<option value = "EXIMBANK" > Ngan hang EximBank </option>' +
        '<option value = "MSBANK" > Ngan hang MSBANK </option>' +
        '</select> <span class = "m-sort-by__arrow"> </span>' +
        '</div></div>';
    let bank_info = JSON.parse($('#banking-pay').attr('name-bank'));
    let invoice_id = $('#invoice-id').text();
    let html_banking = '<div class="form-vnpay text-dark"><h3>Thông tin ngân hàng:</h3>' +
        '<div>' +
        '<p class="font-weight-bold"><span class="text-info">Ngân hàng: ' + bank_info.name + '</span></p>' +
        '<p class="font-weight-bold"><span class="text-info">Chi nhánh: ' + bank_info.address + '</span></p>' +
        '<p class="font-weight-bold"><span class="text-info">Số tài khoản: ' + bank_info.account + '</span></p>' +
        '<p class="font-weight-bold"><span class="text-info">Chủ tài khoản: ' + bank_info.master + '</span></p>' +
        '<p class="font-weight-bold"><span class="text-info">Điện thoại hỗ trợ: ' + bank_info.hotline + '</span></p>' +
        '<p class="font-weight-bold"><span class="text-info">Email hỗ trợ: ' + bank_info.email + '</span></p>' +
        '<p class="font-weight-bold"><span class="text-info">Nội dung chuyển khoản: Thanh toan don hang ' + invoice_id + '</span></p>' +
        '</div></div>';
    let type_pay = $(this).val();
    if (type_pay == 1) {

        $('#banking-pay').html(html_banking).slideDown();
        $('#vnpay-pay').html('').slideUp();

    } else if (type_pay == 4) {
        $('#banking-pay').html('').slideUp();
        $('#vnpay-pay').html(html_vnpay).slideDown();
    } else {
        $('#banking-pay').html('').slideUp();
        $('#vnpay-pay').html('').slideUp();
    }
});

function get_email() {

    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var email = $('#email1').val();
    var email_check = re.test(email);
    var data_url = $('#email1').attr('data-url');
    if (email_check == false) {
        $("#toast-container").html(
                '<div class="toast toast-error" aria-live="assertive" style=""><div class="toast-message">Kiểm tra lại email vừa nhập.</div></div>'
            ),
            4000;
        setTimeout(function() {
            $(".toast-error").remove();
        }, 2000);
    } else {
        $.post(data_url, { user_email: email })
            .done(function(data) {
                if (data.status === 200) {
                    $("#toast-container").html(
                            '<div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">' + data.message + '</div></div>'
                        ),
                        4000;
                    setTimeout(function() {
                        $(".toast-success").remove();
                    }, 2000);
                    return false;
                } else {
                    $("#toast-container").html(
                            '<div class="toast toast-error" aria-live="assertive" style=""><div class="toast-error">' + data.message + '</div></div>'
                        ),
                        4000;
                    setTimeout(function() {
                        $(".toast-error").remove();
                    }, 2000);
                }

            });
    }
}

$("#momo-success").on("click", function() {
    let data_url = $(this).attr("data-url");

    $.ajax({
        url: data_url,
        type: "post",
        dataType: "text",
        data: {
            t_note: $("input[name='t_note']").val()
        },
        success: function(results) {
            console.log(results);
            // let urlmomo = result;
            window.location.href = results;
        },
        error: function(results) {
            console.log(results);
        }
    });
});
$(function() {
    $(".loadmore1").slice(0, 8).show();
    $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".loadmore1:hidden").slice(0, 8).slideDown();
        if ($(".loadmore1:hidden").length == 0) {
            $("#load").fadeOut("slow");
            $('.class_xem_them').hide();
        }
        $("#show-product").animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});
$(".print_pdf").on("click", function() {
    let data_id = $(this).attr("data-id");
    let data_url = $(this).attr("data-url");
    $.ajax({
        url: data_url,
        type: "get",
        dataType: "text",
        data: {
            data_id: data_id
        },
        success: function(result) {
            window.open("/in-pdf.html?data_id=" + data_id + "");
            // $('#myModal').html(result);
        },
        error: function(result) {
            // console.log(result);
        }
    });
});
$(".delete_order").on("click", function() {
    let data_id = $(this).attr("data-id");
    let data_url = $(this).attr("data-url");
    $.ajax({
        url: data_url,
        type: "post",
        dataType: "text",
        data: {
            data_id: data_id
        },
        success: function(result) {
            $("#toast-container").html(
                    '<div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">Bạn đã hủy đơn thành công</div></div>'
                ),
                6000;
            setTimeout(function() {
                $(".toast-success").remove();
            }, 2000);
            window.location.reload();
        },
        error: function(result) {
            // console.log(result);
        }
    });
});
$(window).on("scroll", function() {
    let height_d = $(window).scrollTop();
    if (height_d > 120) {
        $(".site-header").addClass("fixed-menu");
    } else {
        $(".site-header").removeClass("fixed-menu");
    }
});
$(".show-catp").on('click', function() {
    let data_pid = $(this).attr("data-id");
    $('#facet-item' + data_pid).toggleClass('text-success font-weight-bold text-uppercase text-justify')
    $("#m-catParent" + data_pid).toggle(500);
    $("#togle-idc" + data_pid).toggleClass('fa-chevron-down').toggleClass('fa-chevron-up');
});

function openPage(pageName, elmnt, color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
}

function openPageTwo(pageName, elmnt, color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontents");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}
// document.getElementById("defaultOpen").click();

$(document).ready(function() {

    $('#stars li').on('mouseover', function() {
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
        $(this).parent().children('li.star').each(function(e) {
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function() {
        $(this).parent().children('li.star').each(function(e) {
            $(this).removeClass('hover');
        });
    });
    $('#stars li').on('click', function() {
        var onStar = parseInt($(this).data('value'), 10);
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }
        let ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    });
});


function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
$('.btn-comment-rv').on('click', function() {
    var user_id = $(this).attr('user_id');
    var data_url = $(this).attr('data-url');
    let ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var type_question = $(this).attr('data-type');
    var product_id = $(this).attr('product_id');
    var title_question = $('#title_rv').val();
    var noi_dung_comment = $('#noi_dung_commnet').val();
    var name_question = $('#name_rv').val();
    var phone_question = $('#phone_rv').val();
    var email_question = $('#email_rv').val();
    $.ajax({
        url: data_url,
        type: "post",
        dataType: "text",
        data: {
            user_id: user_id,
            product_id: product_id,
            noi_dung_comment: noi_dung_comment,
            type_question: type_question,
            name_question: name_question,
            phone_question: phone_question,
            title_question: title_question,
            email_question: email_question,
            ratingValue: ratingValue
        },
        success: function(result) {
            location.reload();
        },
        error: function(result) {}
    });
});
$('.btn-comment-qs').on('click', function() {
    var user_id = $(this).attr('user_id');
    var data_url = $(this).attr('data-url');
    var type_question = $(this).attr('data-type');
    var product_id = $(this).attr('product_id');
    var noi_dung_question = $('#noi_dung_question').val();
    var name_question = $('#name_qs').val();
    var phone_question = $('#phone_qs').val();
    var email_question = $('#email_qs').val();
    $.ajax({
        url: data_url,
        type: "post",
        dataType: "text",
        data: {
            user_id: user_id,
            product_id: product_id,
            noi_dung_question: noi_dung_question,
            type_question: type_question,
            name_question: name_question,
            phone_question: phone_question,
            email_question: email_question,
        },
        success: function(result) {
            location.reload();
        },
        error: function(result) {},
    });
});

function chanFunctionMethodTran() {
    $('#province').prop('selectedIndex', 0);
    $('#district').prop('selectedIndex', 0);
    $('#ward').prop('selectedIndex', 0);
    $('#fee_ship').html('');
    $('#total-ship').html('');
    $('#total-all').html('');
    $('.error-input').html('');
}
$('.redect-b2b').on('click', function() {
    let rd_url = $(this).attr('data-url');
    window.location.href = rd_url;
});


function chanFunctionMethodTran() {
    $('#province').prop('selectedIndex', 0);
    $('#district').prop('selectedIndex', 0);
    $('#ward').prop('selectedIndex', 0);
    $('#fee_ship').html('');
    $('#total-ship').html('')
    $('#total-all').html('')
    $('.error-input').html('');
}
$('.redect-b2b').on('click', function() {
    let rd_url = $(this).attr('data-url');
    window.location.href = rd_url;
});


$('.check-price').on('click', function() {
    $('.paid-save').find('.box-shadow-in').removeClass('box-shadow-in');
    let size_id = $(this).attr('data-size');
    let data_img = $(this).attr('data-img');
    let size_price = Number($(this).attr('size-price'));
    let size_price_sale = Number($(this).attr('size-price-sale'));
    let size_price_sale_store = Number($(this).attr('size-price-sale-store'));
    let size_qty_inbox = Number($(this).attr('size-qty-inbox'));
    let size_min_box = Number($(this).attr('size-min-box'));

    let price_save_not_store = Number(100 - size_price_sale * 100 / size_price).toFixed(0);
    let price_save_store = Number(100 - size_price_sale_store * 100 / size_price).toFixed(0);
    let data_uid = $(this).attr('data-uid');
    if (data_img != '') {
        $('#image-slides').attr('data-glide-el', 'controls');
        $('#image-slides').html('<ul class"m-product-gallery__slides glide__slides"><li class="m-product-gallery__slide glide__slide glide__slide--clone" data-glide-autoplay="60000">' +
            '<div class="m-product-gallery__img-wrapper">' +
            '<img class="lazyload m-product-gallery__img" data-src="/storage/uploads/' + data_img + '" src="/storage/uploads/' + data_img + '"  data-zoom="/storage/uploads/' + data_img + '">' +
            '</div>' +
            '</li></ul>');
    } else {
        $('#image-slides').attr('data-glide-el', 'controls');
        $('#image-slides').html('<ul class="m-product-gallery__slides glide__slides"><li class="m-product-gallery__slide glide__slide glide__slide--clone" data-glide-autoplay="60000">>' +
            '<div class="m-product-gallery__img-wrapper">' +
            '<img class="lazyload m-product-gallery__img" src="/images/default.jpg">' +
            '</div>' +
            '</li></ul>');
    }


    if (data_uid) {
        $('.check' + size_id).addClass('box-shadow-in');
        $('.price-save').html('(Tiết kiệm: -' + price_save_store + '%)');
        $('.price-gg-gg').html(numberVnd(size_price));
        $('#qty-in-box-store').html(size_qty_inbox + ' sản phẩm');
        $('#min-box-store').html(size_min_box + ' thùng');
        $('.js-add-cart').attr('data-size', size_id);
        $('.js-add-cart').attr('data-qtyinbox', size_qty_inbox);
        $('.js-add-cart').attr('data-min-box', size_min_box);
        if (size_price_sale_store == 0) {
            $('.price-preview').html('Giá: ' + numberVnd(size_price));
        } else {
            $('.price-preview').html(numberVnd(size_price_sale_store));
        }

    } else {
        $('.check' + size_id).addClass('box-shadow-in');

        $('.price-gg-gg').html(numberVnd(size_price));
        $('.price-save').html('(Tiết kiệm: -' + price_save_not_store + '%)');
        $('.js-add-cart').attr('data-size', size_id);
        if (size_price_sale == 0) {
            $('.price-preview-sale').html('Giá: ' + numberVnd(size_price));
        } else {
            $('.price-preview-sale').html('Giá: ' + numberVnd(size_price_sale));
        }
    }
    // alert(data_uid+'-'+size_id + '-' + size_price + '-' + size_price_sale + '-' + size_price_sale_store);
});
$('.render-slug').on('click', function() {
    let data_slug = $(this).attr('data-slug');
    $('.show-more-about').attr('href', data_slug);
});