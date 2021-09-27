<?php

add_action('init', 'register_my_menu');

/* Menus from WordPress */
function register_my_menu() {
    register_nav_menu('main-nav', __('Main menu'));
}

/* Get post date */
function get_post_date() {
    $u_time = get_the_time('U'); 
    $u_modified_time = get_the_modified_time('U'); 
    if ($u_modified_time >= $u_time + 86400) { 
    echo "<h6>Last updated on "; 
    the_modified_time('F jS, Y'); 
    echo " at "; 
    the_modified_time(); 
    echo "</h6> "; 
    } 
}