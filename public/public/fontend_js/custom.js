// $("body").on("click",".js-login", function(event){
//     let URL = $("#formLogin").attr('action')
//     event.preventDefault()
//     $(".gd-danger").remove()
//     $.ajax({
//         url: URL,
//         method : "POST",
//         data:$('#formLogin').serialize(),
//         success: function(results) {
//             if(results.status === 404)
//             {
//                 Toastr.error(results.message)
//                 return  false
//             }
//             if(results.status === 200)
//             {
//                 Toastr.success(results.message)
//                 window.location.href = '/'                       

//             }
//         },
//         error: function(xhr) {
//             $('#validation-errors').html('');
//             $.each(xhr.responseJSON.errors,function(field_name,error){
//                 $("#formLogin").find('[name='+field_name+']').after('<span class="text-strong gd-danger">' +error+ '</span>')
//             })

//         },
//     });
// })
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#trade-product').on('change', function() {
    let URL = $(this).attr('data-url');
    let id_trade = this.value;
    $.ajax({
        url: URL,
        method: "POST",
        data: {
            id_trade: id_trade,
        },
        success: function(data) {
            $('#group-product').html(data);
        },
    });
});
$('.name-filler').on('click', function() {
    let data_slug_trade = $(this).attr('data-slug-trade');
    let data_slug_cat = $(this).attr('data-slug-cat');
    let data_url = $(this).attr('data-url');
    let data_sort = $('#sort_by').find(":selected").val();
    let data_order = $('#order_by').find(":selected").val();
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
            $('#show-product').html(data);
        },
        error: function(data) {
            console.log(data);
        }

    });
});
$('.get-map-google').on('click', function() {
    $(this).each(function(index, el) {
        var data_lat = $(this).attr('data-lat');
        var data_lng = $(this).attr('data-lng');
        $('#ren_map').html(data_lat);
    });
});


$("#search_name").on('keyup', function() {
    let store_name = $('input[name=search_name]').val();
    let data_url = $(this).attr('data-url');
    $.ajax({
        url: data_url,
        method: "POST",
        data: {
            store_name: store_name
        },
        success: function(data) {
            console.log(data);
            $('#show-store').html(data);
        },

    });
});

$('.search_province').on('change', function() {
    let data_url = $(this).attr('data-url');
    let store_province = $(".search_province option:selected").val();
    $.ajax({
        url: data_url,
        method: "POST",
        data: {
            store_province: store_province
        },
        success: function(data) {
            console.log(data);
            $('#show-store').html(data);
        },

    });
});

$(".js-add-cart").on('click', function() {
    let URL = $(this).attr('data-url');
    let data_id = $(this).attr('data-id');
    let data_uid = $(this).attr('data-uid');
    let data_qtyinbox = $(this).attr('data-qtyinbox');
    let data_minbox = $(this).attr('data-minbox');
    let data_count = $(this).attr('data-count');

    $.ajax({
        url: URL,
        method: "get",
        data: {
            data_id: data_id,
            data_uid: data_uid,
            data_qtyinbox: data_qtyinbox,
            data_minbox: data_minbox
        },
        success: function(data) {
            console.log(data);
            $('.js-minicart__trigger').append('<div class="c-header__minicart-count" style="bottom: -10px;right: -5px;"><span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;">' +
                data.count + '</span> </div>');
        },

    });

});
$(".update-qty").on('keyup', function() {
    let URL = $(this).attr('data-url');
    let item_id = $(this).attr('item-id');
    let item_qty = $('#cart-' + item_id + '-qty').val();
    let item_row = $(this).attr('data-row');
    let item_min = $(this).attr('min');
    let data_price = $(this).attr('data-price');
    let total_price = item_qty*data_price;
    if (item_qty < item_min) {
        $('#text-qtyerr').text('Số lượng nhỏ nhất là: ' + item_min);
    } else {
        $('#text-qtyerr').text('');
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
                        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                      }
                console.log(data);
                $('#cart-totals').html(data);
                $('#price'+item_id).html(formatNumber(total_price + ' đ'));
            },

        });
    }


});
$(".remove_cart_action").on('click', function() {
    let URL = $(this).attr('data-url');
    let item_row = $(this).attr('data-row');
    $.ajax({
        url: URL,
        method: "get",
        data: {
            item_row: item_row
        },
        success: function(data) {
            console.log(data);
            location.reload();
            $('#show-store').html(data);
        },

    });

});

// function cart_order_now(cart_order_now1) {
//     var data_url = $(cart_order_now1).attr('data-url');
//     $.get(data_url).fail(function() {
//         location.reload();
//     });
// }

$('#check_vouchers').on('click', function() {
    let URL = $(this).attr('data-url');
    $.ajax({
        url: URL,
        type: "post",
        dataType: "text",
        data: {
            check_vouchers: $("input[name='vouchers']").val()
        },
        success: function(result) {
            $('.messager_check').html(result);
        },
        error: function(result) {
            $('.messager_check').html(result);
        }
    });
});
$("#pay_success").on('click', function() {
    var data_url = $(this).attr('data-url');
    var taxcode = $("input[name='taxcode']").val();
    var code_invoice = $("input[name='code_invoice']").val();
    var vouchers = $("input[name='vouchers']").val();
    var phone = $("input[name='phone']").val();
    var email = $("input[name='email']").val();
    var customer_name = $("input[name='customer_name']").val();
    var address = $("input[name='address']").val();
    var type_pay = $("input[name='type_pay']:checked").val();
    var vouchers = $("input[name='vouchers']").val();
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
            email: email
        },
        success: function success(results) {
            console.log(results);
            window.location.href = results;
        },
        error: function error(results) {
            console.log('Loizzzzzzzzz');
        }
    });
});
$("#bank_code").on('change', function() {
    let bank_code = $(this).val();
    $('#btn-vnpay').on('click', function() {
        var data_url = $(this).attr('data-url');
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
                console.log('loixxxxxxxxxxxxxxxxxxxx');
            }

        });
    })
});
$('#momo-success').on('click', function() {
    let data_url = $(this).attr('data-url');

    $.ajax({
        url: data_url,
        type: "post",
        dataType: "text",
        data: {
            t_note: $("input[name='t_note']").val(),
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
    $(".loadmore1").slice(0, 12).show();
    $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".loadmore1:hidden").slice(0, 12).slideDown();
        if ($(".loadmore1:hidden").length == 0) {
            $("#load").fadeOut("slow");
        }
        $("#show-product").animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});