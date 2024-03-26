<?php
require(dirname(__FILE__) .'/../../../../wp-load.php');

$errors = array();

if(sanitize_user($_POST["name"]) == ''){
    array_push($errors, ['id' => 'name' , 'text' => 'El campo Nombre es requerido.']);
}else{
    $name   = sanitize_user($_POST["name"]);
}


if($_POST["email"] == ''){
    array_push($errors, ['id' => 'email' , 'text' => 'El campo Correo electrónico es requerido.']);
}else if(strlen($_POST["email"]) > 0 && sanitize_email($_POST["email"]) == ''){
    array_push($errors, ['id' => 'email' , 'text' => 'El Correo electrónico no es válido']);
}else if(strlen($_POST["email"]) > 0 && email_exists(sanitize_email($_POST["email"]))){
    array_push($errors , ['id' => 'email' , 'text' => 'El Correo electrónico ya fue registrado']);
}else{
    $email  = sanitize_email($_POST["email"]);
}


if(esc_attr($_POST["birthdate"]) == ''){
    array_push($errors, ['id' => 'birthdate' , 'text' => 'El campo fecha de nacimiento es requerido']);
}else{
    $birthdate  = esc_attr($_POST["birthdate"]);
}


if(esc_attr($_POST["phone"]) == ''){
    array_push($errors, ['id' => 'phone' , 'text' => 'El teléfono es requerido']);
}else if(strlen(esc_attr($_POST["phone"])) > 0 && strlen(esc_attr($_POST["phone"])) != 9){
    array_push($errors, ['id' => 'phone' , 'text' => 'El teléfono debe tener 9 dígitos']);
}else{
    $phone  = esc_attr($_POST["phone"]);
}


if(esc_attr($_POST["password"]) == ''){
    array_push($errors, ['id' => 'password' , 'text' => 'El campo Contraseña es requerido.']);
}else if(strlen(esc_attr($_POST["password"])) > 0 && strlen(esc_attr($_POST["password"])) <= 5){
    array_push($errors, ['id' => 'password' , 'text' => 'La Contraseña debe tener más de 5 caracteres']);
}else{
    $password   = esc_attr($_POST["password"]);
}


if(count($errors) > 0){
    wp_send_json( array(
        'status' => false,
        'errors' => $errors
    )); 
}else{

    $user_data = array(
        'user_login' => $email,
        'user_pass'  =>  $password,
        'user_email' => $email,
        'role'       => 'subscriber',
        'show_admin_bar_front' => 'false'
    );


    $response = RfCoreUtils::register_user($name , $email , $email , $birthdate , $phone , $password , 'activo' , 1);

    if($response->status == true){

        $response_login = RfCoreUtils::login_user($email , $password);

        if($response_login->status == true){

            $user_id = wp_insert_user($user_data);

            clean_user_cache($user_id);
            wp_clear_auth_cookie();
            wp_set_current_user($user_id);
            wp_set_auth_cookie($user_id, true, false);
            update_user_caches($user_id);

            update_option('tokensinapsisplatform', $response_login->token);
            update_option('idusersinapsisplatform', $response_login->id);
            update_option('namesinapsisplatform', $response_login->nombre);

            wp_send_json( array(
                'status' => true,
                'response' => $user_id
            ));

        }else{
            array_push($errors, ['id' => 'other' , 'text' => $response_login->msg]);

            wp_send_json(array(
                'status' => false,
                'errors' => $errors
            ));
        }



        

    }else{
        array_push($errors, ['id' => 'other' , 'text' => $response->msg]);

        wp_send_json(array(
            'status' => false,
            'errors' => $errors
        ));
    }

}

?>