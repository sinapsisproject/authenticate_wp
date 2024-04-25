<?php 
require(dirname(__FILE__) .'/../../../../wp-load.php');

$errors = array();

$rememberme = $_POST["rememberme_login"];

if($_POST["email"] == ''){
    array_push($errors, ['id' => 'email' , 'text' => 'El campo Correo electrónico es requerido.']);
}else if(strlen($_POST["email"]) > 0 && sanitize_email($_POST["email"]) == ''){
    array_push($errors, ['id' => 'email' , 'text' => 'El correo electrónico no es válido']);
}else{
    $email  = sanitize_email($_POST["email"]);
}


if(esc_attr($_POST["password"]) == ''){
    array_push($errors, ['id' => 'password' , 'text' => 'El campo Contraseña es requerido.']);
}else if(strlen(esc_attr($_POST["password"])) > 0 && strlen(esc_attr($_POST["password"])) <= 5){
    array_push($errors, ['id' => 'password' , 'text' => 'La contraseña debe tener más de 5 caracteres']);
}else{
    $password   = esc_attr($_POST["password"]);
}


if(count($errors) > 0){
    wp_send_json( array(
        'status' => false,
        'errors' => $errors
    )); 
}else{

    $confirmation = wp_login($email , $password);
        wp_clear_auth_cookie();


        if($confirmation){
            $user = get_user_by('login', $email );

            if($user == false){
                $user = get_user_by('email', $email );
            }

            if(!is_wp_error( $user )){

                if($rememberme == 'true'){

                    $response = RfCoreUtils::login_user($email , $password);

                    if($response->status == true){

                        clean_user_cache($user->ID);
                        wp_clear_auth_cookie();
                        wp_set_current_user($user->ID);
                        wp_set_auth_cookie($user->ID, true, false);
                        update_user_caches($user->ID);
                       
                        update_option('tokensinapsisplatform', $response->token);
                        update_option('idusersinapsisplatform', $response->id);
                        update_option('namesinapsisplatform' , $response->nombre);
                        update_option('emailsinapsisplatform', $response->email);

                        wp_send_json(array(
                            'status' => true,
                            'user' => $user,
                            'remember' => true
                        ));
                        
                    }else{

                        array_push($errors, ['id' => 'other' , 'text' => 'Error al encontrar el usuario [platform]']);

                        wp_send_json(array(
                            'status' => false,
                            'errors' => $errors
                        ));
                    }

                }else{

                    $response = RfCoreUtils::login_user($email , $password);

                    if($response->status == true){

                        clean_user_cache($user->ID);
                        wp_clear_auth_cookie();
                        wp_set_current_user($user->ID);
                        wp_set_auth_cookie($user->ID, false, false);
                        update_user_caches($user->ID);

                       update_option('tokensinapsisplatform', $response->token);
                       update_option('idusersinapsisplatform', $response->id);
                       update_option('namesinapsisplatform' , $response->nombre);
                       update_option('emailsinapsisplatform', $response->email);

                        wp_send_json(array(
                            'status' => true,
                            'user' => $user,
                            'remember' => false
                        ));

                    }else{

                        array_push($errors, ['id' => 'other' , 'text' => 'Error al encontrar el usuario [platform]']);

                        wp_send_json(array(
                            'status' => false,
                            'errors' => $errors
                        ));
                    }

                }

                

            }else{
                array_push($errors ,  ['id' => 'other' , 'text' => 'Error al encontrar el usuario']);
                wp_send_json(array(
                    'status' => false,
                    'errors' => $errors
                ));

            }

        }else{
            array_push($errors , ['id' => 'other' , 'text' => 'El usuario o contraseña no existe']);
            wp_send_json( array(
                'status' => false,
                'errors' => $errors
            ));
        }


}




?>