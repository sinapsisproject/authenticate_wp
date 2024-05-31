<?php
require(dirname(__FILE__) .'/../../../../wp-load.php');

    $user_id = get_current_user_id();

    update_user_meta($user_id, 'tokensinapsisplatform', '');

    //update_option('tokensinapsisplatform', ""); 
    wp_logout();

?>