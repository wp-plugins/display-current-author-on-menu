<?php
/*
Plugin Name: Display Current Author on Menu
Plugin URI: https://wpwrites.com
Description: Tiny plugin that allows you to display current author's name(Display Name) on menu.
Version: 0.0.1
Author: Riyad Arefin
Author URI: http://riyadarefin.com
*/

add_filter('wp_nav_menu', 'dcam_menu_shortcodes'); 
function dcam_menu_shortcodes( $menu ){ 
        return do_shortcode( $menu ); 
} 

add_shortcode( 'display-author' , 'displayname_on_menu' );
function displayname_on_menu(){
    $user = wp_get_current_user();
    return $user->display_name;
}