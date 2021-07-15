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
    let data_slug = $(this).attr('data-slug');
    let data_url = $(this).attr('data-url');
    $.ajax({
        url: data_url,
        method: "POST",
        data: {
            data_slug: data_slug,
            data_url: data_url
        },
        success: function(data) {
            $('#group-product').html(data);
        },
    });
});