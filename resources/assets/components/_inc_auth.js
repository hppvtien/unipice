import 'jquery-modal';
import Toastr from "toastr";

var Auth = {
    init : function ()
    {
       
        this.register()
        this.login()
        this.store()
        this.showdropdown()
    },
    showdropdown()
    {
        $(".js-dropdown").on('click',function (event){
            event.preventDefault()
            let $this = $(this);
                $this.toggleClass('c-header__account-button--open')
        })
    },
    store()
    {
        $("body").on("click",".js-store-user", function(event){ 
            let URL = $("#co-store-form").attr('action')
            event.preventDefault() 
            $(".gd-danger").remove()
            $.ajax({
                url: URL,
                method : "POST",
                data:$('#co-store-form').serialize(),
                success: function(results) {
                    if(results.status === 200)
                    {
                        Toastr.success(results.message)
                    }            
                },
                error: function(xhrs) {
                    $('#validation-errors').html('');
                    $.each(xhrs.responseJSON.errors,function(field_names,error){
                        $("#co-store-form").find('[name='+field_names+']').after('<span class="text-strong gd-danger">' +error+ '</span>')
                    })                   
                },
            });
        })
    },
   
    register()
    {
        $("body").on("click",".js-register", function(event){ 
            let URL = $("#formRegister").attr('action')
            event.preventDefault() 
            $(".gd-danger").remove()
            $.ajax({
                url: URL,
                method : "POST",
                data:$('#formRegister').serialize(),
                success: function(results) {
                    if(results.status === 200)
                    {
                        Toastr.success(results.message)
                    }            
                },
                error: function(xhr) {
                    $('#validation-errors').html('');
                    $.each(xhr.responseJSON.errors,function(field_name,error){
                        $("#formRegister").find('[name='+field_name+']').after('<span class="text-strong gd-danger">' +error+ '</span>')
                    })                   
                },
            });
        })
    },

    login()
    {
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
    },

   
}

export default Auth
