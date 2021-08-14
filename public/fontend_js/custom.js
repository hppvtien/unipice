$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});
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
    let data_id = $(this).attr("data-id");
    let data_uid = $(this).attr("data-uid");
    let data_qtyinbox = $(this).attr("data-qtyinbox");
    let data_minbox = $(this).attr("data-minbox");
    let data_count = $(this).attr("data-count");
    let qty_user = $("#js-qty" + data_id).val();
    $.ajax({
        url: URL,
        method: "get",
        data: {
            qty_user: qty_user,
            data_id: data_id,
            data_uid: data_uid,
            data_qtyinbox: data_qtyinbox,
            data_minbox: data_minbox
        },
        success: function(data) {
            console.log(data);
            $(".count-cart-s")
                .addClass("c-header__minicart-count")
                .html(
                    '<span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;">' +
                    data.count +
                    "</span>"
                );
            if (data.status === 200) {
                $("#toast-container").html(
                        ' <div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">' +
                        data.message +
                        "</div></div>"
                    ),
                    4000;
                setTimeout(function() {
                    $(".toast-success").remove();
                }, 2000);
            }
        }
    });
});
$(".update-qty").on("keyup", function() {
    let URL = $(this).attr("data-url");
    let item_id = $(this).attr("item-id");
    let item_qty = $("#cart-" + item_id + "-qty").val();
    let item_row = $(this).attr("data-row");
    let item_min = $(this).attr("min");
    let data_price = $(this).attr("data-price");
    let total_price = item_qty * data_price;
    if (item_qty < item_min) {
        $("#text-qtyerr").text("Số lượng nhỏ nhất là: " + item_min);
    } else {
        $("#text-qtyerr").text("");
        $.ajax({
            url: URL,
            method: "get",
            data: {
                item_id: item_id,
                item_qty: item_qty,
                item_row: item_row
            },
            success: function(data) {
                function formatNumber(num) {
                    return num
                        .toString()
                        .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                }
                console.log(data);
                $("#cart-totals").html(data);
                $("#price" + item_id).html(formatNumber(total_price + " đ"));
            }
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
        },
        error: function(result) {
            $(".messager_check").html(result);
        }
    });
});
$("#pay_success").on("click", function() {
    var data_url = $(this).attr("data-url");
    let method_ship = $('#method_shpping').find(":selected").val();
    let ward_code_to = $('#ward').find(":selected").attr('data-ward');
    let district_id_to = $('#district').find(":selected").attr('data-district');
    let fee_ship = $('#fee_ship').text();
    var taxcode = $("input[name='taxcode']").val();
    var code_invoice = $("input[name='code_invoice']").val();
    var vouchers = $("input[name='vouchers']").val();
    var phone = $("input[name='phone']").val();
    var email = $("input[name='email']").val();
    var customer_name = $("input[name='customer_name']").val();
    var address = $("input[name='address']").val();
    var type_pay = $("input[name='type_pay']:checked").val();
    var vouchers = $("input[name='vouchers']").val();
    if(method_ship == 4){
        $('#err-ship').text('Bạn phải chọn phương thức vận chuyển');
        return false;
    } else {
        $.ajax({
            url: data_url,
            method: "post",
            data: {
                code_invoice: code_invoice,
                vouchers: vouchers,
                phone: phone,
                taxcode: taxcode,
                type_pay: type_pay,
                address: address,
                email: email,
                customer_name: customer_name,
                method_ship: method_ship,
                district_id_to: district_id_to,
                ward_code_to: ward_code_to,
                email: email,
                fee_ship: fee_ship
            },
            success: function success(results) {
                // window.location.href = results;
            },
            error: function error(results) {
                console.log("Loizzzzzzzzz");
            }
        });
    }
   
});
$("#bank_code").on("change", function() {
    let bank_code = $(this).val();
    $("#btn-vnpay").on("click", function() {
        var data_url = $(this).attr("data-url");
        $.ajax({
            url: data_url,
            type: "post",
            dataType: "text",
            data: {
                bank_code: bank_code
            },
            success: function(result) {
                console.log(result);
                // let urlvnpay = result;
                // console.log(urlvnpay);
                window.location.href = result;
            },
            error: function(result) {
                console.log("loixxxxxxxxxxxxxxxxxxxx");
            }
        });
    });
});
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
    $(".loadmore1")
        .slice(0, 12)
        .show();
    $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".loadmore1:hidden")
            .slice(0, 12)
            .slideDown();
        if ($(".loadmore1:hidden").length == 0) {
            $("#load").fadeOut("slow");
        }
        $("#show-product").animate({
                scrollTop: $(this).offset().top
            },
            1500
        );
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
            console.log(result);
            window.open("/in-pdf.html?data_id=" + data_id + "");
            // $('#myModal').html(result);
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
    var noi_dung_question = $('#noi_dung_commnet').val();
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
            noi_dung_question: noi_dung_question,
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
    var noi_dung_comment = $('#noi_dung_question').val();
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
            noi_dung_comment: noi_dung_comment,
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
