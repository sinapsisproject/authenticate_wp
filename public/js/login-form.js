jQuery(document).ready( function(){

    jQuery("#login_button").on('click', function(){
        jQuery('#modalLogin').modal('show');
    })


    jQuery("#login_data_button").on('click', function(){

        email       = jQuery('#email_login').val();
        password    = jQuery('#password_login').val();
        rememberme  = jQuery('#rememberme_login').val();


        data = {
            "email"     : email,
            "password"  : password,
            "rememberme": rememberme
        }

        jQuery.ajax({
            type : "post",
            url : wp_ajax_sinapsis.ajax_url_login,
            data : data,
            error: function(response){
                console.log(response);
            },
            success: function(response) {

                if(response.status == false){

                    jQuery('[id*="_login_error"]').html("");

                    response.errors.forEach(element => {
                       jQuery("#"+element.id+"_login_error").html("<p style='color : red'>"+element.text+"</p>");
                    });
                }else if(response.status == true){
                    jQuery('#modalLogin').modal('hide');
                    location.reload();
                }
               
            },
            beforeSend: function (qXHR, settings) {
                jQuery('#loading_login').fadeIn();
            },
            complete: function () {
                jQuery('#loading_login').fadeOut();
            },
        })

    })



});