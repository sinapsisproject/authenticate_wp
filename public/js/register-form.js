jQuery(document).ready( function(){

    jQuery(".register_button").on('click', function(event){
        jQuery('#modalRegister').modal('show');
    })


    jQuery("#register_data_button").on('click' , function(){
        
        nombre       = jQuery('#name_register').val();
        email        = jQuery('#email_register').val();
        birthdate    = jQuery('#birthdate_register').val();
        country      = jQuery('#country_register').val();
        phone        = jQuery('#phone_register').val();
        password     = jQuery('#password_register').val();


        console.log(country);

        data = {
            "name"      : nombre,
            "email"     : email,
            "birthdate" : birthdate,
            "country"   : country,
            "phone"     : phone,
            "password"  : password
        }


        jQuery.ajax({
            type : "post",
            url : wp_ajax_sinapsis.ajax_url_register,
            data : data,
            error: function(response){
                console.log(response);
            },
            success: function(response) {

                jQuery('[id*="_register_error"]').html("");

                if(response.status == false){
                    response.errors.forEach(element => {
                       jQuery("#"+element.id+"_register_error").html("<p style='color : red'>"+element.text+"</p>");
                    });
                }else if(response.status == true){
                    jQuery('#modalRegister').modal('hide');
                    location.reload();
                }

            },
            beforeSend: function (qXHR, settings) {
                jQuery('#loading_register').fadeIn();
            },
            complete: function () {
                jQuery('#loading_register').fadeOut();
            },
        })



    })


});