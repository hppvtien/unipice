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
    let key_data = $(this).attr('data-key');
    if ($('#inlineCheckbox' + key_data).is(':checked')) {
        $('.keypress-count').on('keyup', function() {
            let qty_sale = $("#qty_sale_" + key_data).val();
            let price_sale = $("#price_sale_" + key_data).val();
            if (qty_sale && price_sale) {
                // let price_all_subtotal = 0;
                let price_subtotal = qty_sale * price_sale;
                $("#price_subtotal_" + key_data).val(price_subtotal);
                // if (price_subtotal) {
                //     price_all_subtotal += price_subtotal;
                // }
            }

        });

    }
    if (!$('#inlineCheckbox' + key_data).is(':checked')) {
        $("#price_subtotal_" + key_data).val(0);
    }


    var total = 0;
    $('input:checkbox:checked').each(function() { // iterate through each checked element.
        total += Number($('.price_subtotal').val());
    });
    $("#price_all_subtotal").val(total);


});