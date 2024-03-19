jQuery(document).ready( function(){

    jQuery("#logout_button").on('click', function(){

        jQuery.ajax({
            type : "post",
            url : wp_ajax_sinapsis.ajax_url_logout,
            error: function(response){
                console.log(response);
            },
            success: function(response) {
                //console.log(response);
                location.reload();
            },
            beforeSend: function (qXHR, settings) {
                jQuery('#loading_login').fadeIn();
            },
            complete: function () {
                jQuery('#loading_login').fadeOut();
            },
        })

    })

    jQuery("#perfil_button").on('click', function(){

        window.location.href = '/mi-perfil';

    })


});