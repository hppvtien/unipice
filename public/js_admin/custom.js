$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.close-img').on('click', function() {
    let popup_delete = '<div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;"><div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: flex;">Xoá dữ liệu!</h2><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button></div><div class="swal2-content"><div id="swal2-content" class="swal2-html-container" style="display: block;">Bạn có chắc chắn xoá dữ liệu không</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div></div><div class="swal2-actions"><div class="swal2-loader"></div><button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; background-color: rgb(48, 133, 214);">Đồng ý</button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none;">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block; background-color: rgb(221, 51, 51);">Huỷ bỏ</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>'
    let name_img = $(this).attr('album-data');
    let data_rm = $(this).parent().attr('data-rm');
    let data_url = $(this).attr('data-url');
    let data_id = $(this).attr('data-id');
    if (data_rm) {
        $('#popup-div').html(popup_delete);
        $('.swal2-confirm').on('click', function() {
            $('#popup-div .swal2-container').remove();
            $.ajax({
                url: data_url,
                type: "get",
                dataType: "text",
                data: {
                    name_img: name_img,
                    data_id: data_id
                },
                success: function(result) {
                    $('div[data-rm="' + data_rm + '"]').remove();
                    if (result.status === 200) {
                        toastr.success(result.message)
                    }
                },
                error: function(result) {
                    console.log(result);
                }
            });
        });

        $('.swal2-cancel').on('click', function() {
            $('#popup-div .swal2-container').remove();
        });


    }
});

$('.form-check-input').on('change', function() {
    let val_data = $(this).val();
    if ($('#inlineCheckbox' + val_data).is(':checked') == true) {
        $("input#qty_sale_" + val_data).removeAttr('readonly');
        $("input#price_sale_" + val_data).removeAttr('readonly');
    } else if ($('#inlineCheckbox' + val_data).is(':checked') == false) {
        $("input#qty_sale_" + val_data).attr('readonly', 'readonly');
        $("input#price_sale_" + val_data).attr('readonly', 'readonly');
    };
    if ($('#inlineCheckbox' + val_data).is(':checked')) {
        $('.keypress-count').on('keyup', function() {

            let qty_sale = $("#qty_sale_" + val_data).val();
            let price_sale = $("#price_sale_" + val_data).val();
            let price_nosale = Number($("#price_nosale_" + val_data).text());

            if (qty_sale && price_sale) {
                let price_subtotal = qty_sale * price_sale;
                let price_subtotal_nosale = qty_sale * price_nosale;
                $("#price_subtotal_" + val_data).val(price_subtotal);
                $('#inlineCheckbox' + val_data).attr("data-sub", price_subtotal);
                $('#inlineCheckbox' + val_data).attr("data-nosub", price_subtotal_nosale);
            }
            let totalPrice = 0;
            let totalPriceNoSale = 0;
            $('.form-check-input:checked').each(function() {
                totalPrice += Number($(this).attr('data-sub'));
                totalPriceNoSale += Number($(this).attr('data-nosub'));
                totalpt = 100 - (totalPrice * 100 / totalPriceNoSale);
                console.log(totalpt);
                $('.price_all_subtotal').val(totalPrice);
                $('.price_all_total').val(totalPriceNoSale);
                $('.price_no_sale').text(totalPriceNoSale.toLocaleString('vi', { style: 'currency', currency: 'VND' }));
                $('.price_sale').text(totalPrice.toLocaleString('vi', { style: 'currency', currency: 'VND' }));
                $('.price_sale_').text(totalpt.toFixed(2) + '%');
            });
        });
    }
    if (!$('#inlineCheckbox' + val_data).is(':checked')) {
        let qty_sale = $("#qty_sale_" + val_data).val(0);
        let price_sale = $("#price_sale_" + val_data).val(0);
        let price_nosale = Number($("#price_nosale_" + val_data).text());
        if (qty_sale && price_sale) {
            let price_subtotal = qty_sale * price_sale;
            let price_subtotal_nosale = qty_sale * price_nosale;
            $("#price_subtotal_" + val_data).val(price_subtotal);
            $('#inlineCheckbox' + val_data).attr("data-sub", price_subtotal);
            $('#inlineCheckbox' + val_data).attr("data-nosub", price_subtotal_nosale);
        }
        let totalPrice = 0;
        let totalPriceNoSale = 0;
        $('.form-check-input:checked').each(function() {
            totalPrice += Number($(this).attr('data-sub'));
            totalPriceNoSale += Number($(this).attr('data-nosub'));
            totalpt = 100 - (totalPrice * 100 / totalPriceNoSale);
            $('.price_all_subtotal').val(totalPrice);
            $('.price_all_total').val(totalPriceNoSale);
            $('.price_no_sale').text(totalPriceNoSale.toLocaleString('vi', { style: 'currency', currency: 'VND' }));
            $('.price_sale').text(totalPrice.toLocaleString('vi', { style: 'currency', currency: 'VND' }));
            $('.price_sale_').text(totalpt.toFixed(2) + '%');
        });
    }
});

$('#is_flash_sale').on('click', function() {
    // let html_level_store = '';
    let type_check = $('#is_flash_sale').find(":selected").val();
    if (type_check == 0) {
        $('#type-combo-store').hide('fast');
    } else {
        $('#type-combo-store').show('fast');
    }

});
$('#update-status').on('click', function() {
    let data_u = window.location.origin + '/admin/update_level';
    // let data_v = window.location.origin + '/admin/update_nap_status';
    $.ajax({
        url: data_u,
        method: "post",
        dataType: 'json',
        data: {
            url: 'abc',
        },
    });
    $.ajax({
        url: data_v,
        method: "post",
        dataType: 'json',
        data: {
            url: data_v,
        },
    });
});
$('.input-group-append').on('click', function() {
    let keyword = $('#search_k').val();
    let data_url = $('#search_k').attr('data-url');
    if (keyword != '') {
        $.ajax({
            url: data_url,
            method: "post",
            data: {
                keyword: keyword
            },
            success: function(result) {
                $('#show-search').html(result);

            },
            error: function(result) {
                console.log(result);
            }
        });
    } else {
        confirm('Vui lòng nhập từ khóa!!');
    }
});
$('.input-group-append').on('click', function() {
    let keyword = $('#search_k').val();
    let data_url = $('#search_k').attr('data-url');
    if (keyword != '') {
        $.ajax({
            url: data_url,
            method: "post",
            data: {
                keyword: keyword
            },
            success: function(result) {
                $('#show-search').html(result);

            },
        });
    } else {
        confirm('Vui lòng nhập từ khóa!!');
    }
});

$('#range_date').on('change', function() {
    let range_date = $('#range_date').find(":selected").val();
    let data_url = $('#search_k').attr('data-url');
    $.ajax({
        url: data_url,
        method: "post",
        data: {
            range_date: range_date
        },
        success: function(result) {
            $('#show-search').html(result);

        },
    });

});
$('#type_pay').on('change', function() {
    let type_pay = $('#type_pay').find(":selected").val();
    let data_url = $('#search_k').attr('data-url');
    $.ajax({
        url: data_url,
        method: "post",
        data: {
            type_pay: type_pay
        },
        success: function(result) {
            $('#show-search').html(result);

        },
    });

});
$('.keypress-count').on('change', function() {
    var from_date = $("input[name='from_date']").val();
    var to_date = $("input[name='to_date']").val();
    let data_url = $('#search_k').attr('data-url');
    if (from_date != '' && to_date != '') {
        $.ajax({
            url: data_url,
            method: "post",
            data: {
                from_date: from_date,
                to_date: to_date
            },
            success: function(result) {
                $('#show-search').html(result);

            },
        });
    }
});
$('.v_status').on('change', function() {
    let v_id = $(this).attr('data-ckb');
    let data_url = $(this).attr('data-url');
    $.ajax({
        url: data_url,
        type: "post",
        dataType: "text",
        data: {
            v_id: v_id
        },
        success: function(result) {
            console.log(result, +'aaaaaa');
            // $('#result').html(result);
        },
        error: function(result) {
            console.log(result, +'ssssss');
            // $('#result').html(result);
        }
    });
});
$('#generate-code').on('click', function() {
    var data_url = $(this).attr('data-url');
    $.ajax({
        url: "{{ route('get_admin.voucher.generate_code') }}",
        type: "post",
        dataType: "text",
        success: function(result) {
            let code_vc = result;
            console.log(code_vc);
            $('#code-generate').html('<input type="text" class="form-control" value="' + result + '" name="code" >');
        },
        error: function(result) {
            console.log(result, +'ssssss');
        }
    });
});
$('.lot_product').on('change', function() {
    $('.lot_product:checked').each(function() {
        var product_size = $(this).attr('data-size');
        $('#product_size_lot').val(product_size);
    });
});
$('#select2-weight').on('change', function() {
    alert('ádasdsad');
});