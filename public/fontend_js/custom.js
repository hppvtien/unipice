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
$('."m-newsletter-signup__submit').on('click', function() {
    let mail_newsletter = $('.m-newsletter-signup__input').val();
    let data_url = $(this).attr('data-url');
    $.ajax({
        url: data_url,
        method: "POST",
        data: {
            mail_newsletter: mail_newsletter
        },
        success: function(data) {
            $('#show-product').html(data);
        },

    });
});