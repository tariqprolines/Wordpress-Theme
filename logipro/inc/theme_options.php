<?php
add_action('admin_menu', 'logipro_admin_menu');

function logipro_admin_menu() {
    add_menu_page( 
        'Theme Options', // page title
        'Theme Options', //menu title
        'manage_options', //capability
        'logipro-theme-options',  //menu slug
        'logipro_admin_page', // callback function
        'dashicons-admin-generic', //icons
         11  // position
    );
}

function logipro_admin_page(){
    echo 'Welcome to admin page';
}