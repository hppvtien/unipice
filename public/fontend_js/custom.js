
$("body").on("click",".js-login", function(event){
    let URL = $("#formLogin").attr('action')
    event.preventDefault()
    $(".gd-danger").remove()
    $.ajax({
        url: URL,
        method : "POST",
        data:$('#formLogin').serialize(),
        success: function(results) {
            if(results.status === 404)
            {
                Toastr.error(results.message)
                return  false
            }
            if(results.status === 200)
            {
                Toastr.success(results.message)
                window.location.href = '/'                       

            }
        },
        error: function(xhr) {
            $('#validation-errors').html('');
            $.each(xhr.responseJSON.errors,function(field_name,error){
                $("#formLogin").find('[name='+field_name+']').after('<span class="text-strong gd-danger">' +error+ '</span>')
            })
            
        },
    });
})