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
    $.ajax({
        url: URL,
        method: "get",
        data: {
            data_id: data_id
        },
        success: function(data) {
            console.log(data);
            $('#show-store').html(data);
        },

    });

});
$(".update-qty").on('keyup', function() {
    let URL = $(this).attr('data-url');
    let item_id = $(this).attr('item-id');
    let item_qty = $('#cart-' + item_id + '-qty').val();
    let item_row = $(this).attr('data-row');
    $.ajax({
        url: URL,
        method: "get",
        data: {
            item_id: item_id,
            item_qty: item_qty,
            item_row: item_row
        },
        success: function(data) {
            console.log(data);
            $('#show-store').html(data);
        },

    });

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
            $('#show-store').html(data);
        },

    });

});
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
$(".js-save-cart").on('click', function() {
    // var $this = $(this);
    // var group_buy = $("input[name='type_pay']:checked").val();
    // var method_customer_code;
    // var method_company;

    // if (group_buy == 0) {
    var method_customer_code = '0000000000';
    // method_company = 'Ca nhan';
    // } else {
    var method_customer_code = $("input[name='method_customer_code']").val();
    // method_company = $("input[name='method_company']").val();
    // }

    var method_invoice = $("input[name='method_invoice']").val();
    var vouchers = $("input[name='vouchers']").val();
    var method_phone = $("input[name='method_phone']").val();
    var method_email = $("input[name='method_email']").val();
    var method_customer = $("input[name='method_customer']").val();
    var method_address = $("input[name='method_address']").val();
    var type_pay = $("input[name='type_pay']:checked").val();
    var vouchers = $("input[name='vouchers']").val();
    // $this.addClass('active'); // _this.flagClick = true;

    var URL = $(this).attr('data-url');
    console.log(URL);
    // var URLRD = $this.attr('data-url-rd');
    $.ajax({
        url: URL,
        method: "get",
        data: {
            method_invoice: method_invoice,
            vouchers: vouchers,
            method_phone: method_phone,
            type_pay: type_pay,
            method_email: method_email,
            method_email: method_email,
            method_customer: method_customer,
            method_address: method_address,
            method_customer_code: method_customer_code,
        },
        success: function success(results) {
            // if (results.status === 401) {
            //     console.log('code sai');
            //     toastr__WEBPACK_IMPORTED_MODULE_0___default.a.error(results.messager);
            // } else {
            //     console.log('code dung');
            //     _this.flagClick = false;
            //     $this.removeClass('active');
            //     window.location.href = URLRD;
            // }
        },
        error: function error(results) {
            // if (group_buy === 0) {
            //     if (results.responseJSON.errors.method_address) {
            //         $('.method_address').html(results.responseJSON.errors.method_address);
            //     }
            // } else {
            //     if (!results.responseJSON.errors.method_address) {
            //         $('.method_address').html('');
            //     }

            //     if (!results.responseJSON.errors.method_company) {
            //         $('.method_company').html('');
            //     }

            //     if (!results.responseJSON.errors.method_customer_code) {
            //         $('.method_customer_code').html('');
            //     }

            //     if (results.responseJSON.errors.method_address) {
            //         $('.method_address').html(results.responseJSON.errors.method_address);
            //     }

            //     if (results.responseJSON.errors.method_company) {
            //         $('.method_company').html(results.responseJSON.errors.method_company);
            //     }

            //     if (results.responseJSON.errors.method_customer_code) {
            //         $('.method_customer_code').html(results.responseJSON.errors.method_customer_code);
            //     }
            // }
        }
    });
});