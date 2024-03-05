<?php 

/*
Plugin Name: [Sinapsis] authenticate
Plugin URI: https://sinapsis.com
Description: Plugin de autenticación y registro de usuarios sinapsis
Version: 1.0
Author: Diego Baeza
Author URI: https://sisnapsis.com
License: GPL2
*/

require(dirname(__FILE__) .'../../../../wp-load.php');

add_action( 'wp_enqueue_scripts', 'ajax_enqueue_scripts' );

function ajax_enqueue_scripts() {


    wp_enqueue_script(
    'sweetalert-sinapsis',
    plugins_url( '/public/assets/js/sweetalert.js', __FILE__ ),
    array('jquery'),
    rand(0, 99),
    true
    );

    wp_enqueue_script(
    'bootstrap-sinapsis',
    plugins_url( '/public/assets/js/bootstrap.js', __FILE__ ),
    array('jquery'),
    rand(0, 99),
    true
    );


    wp_enqueue_script(
    'login-form',
    plugins_url( '/public/js/login-form.js', __FILE__ ), 
    array('jquery'),
    rand(0, 99),
    true
    );

    wp_enqueue_script(
    'register-form',
    plugins_url( '/public/js/register-form.js', __FILE__ ), 
    array('jquery'),
    rand(0, 99),
    true
    );

    wp_enqueue_script(
    'logout-authenticate',
    plugins_url( '/public/js/logout.js', __FILE__ ), 
    array('jquery'),
    rand(0, 99),
    true
    );


    wp_enqueue_style( 
    'bootstrap-sinapsis',
    plugins_url( '/public/css/bootstrap.css', __FILE__ ),
    array(),
    rand(0, 99)
    );


    wp_localize_script(
        'register-form',
        'wp_ajax_sinapsis',
        array(
          'ajax_url_register' => plugins_url( '/public/register-form.php' , __FILE__ ),
          'ajax_url_login' => plugins_url( '/public/login-form.php' , __FILE__ ),
          'ajax_url_logout' => plugins_url( '/public/logout.php' , __FILE__ )
        )
    );


}

function shortcode_aunthenticate($atts){
    if(!is_user_logged_in()){
        include 'public/partials/authenticate.php'; 
    }else{
        include 'public/partials/profile.php';
        include 'public/partials/logout.php'; 
    }
}

add_shortcode("shortcodeaunthenticate" , "shortcode_aunthenticate");

?>