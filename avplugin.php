<?php
   /*
   Plugin Name: Auto Verify Integration
   Plugin URI: /https://autoverify.com
   description: Allows for the Super-Duper easy instaltion of Autoverfiy tools and CTAs on a wordpress site.
   Version: 1.5.0
   Author: Liam Kennedy
   Author URI: https://autoverify.com
   License: GPL2
   */

if(!function_exists('add_action')) {
    echo 'Seems like you stumbled here by accident. 😝';
exit;
} 
   

add_action('wp_enqueue_scripts', 'plugin_styles');

function plugin_styles() {
    wp_enqueue_style('AvPluginStyles', plugins_url('/css/style.css', __FILE__));
    wp_enqueue_style('VSAStyles', plugins_url('/css/vsa-style.css', __FILE__));	
}

add_action('wp_enqueue_scripts', 'plugin_scripts');

function plugin_scripts() {
	wp_enqueue_script('AvPluginScripts', plugins_url('/js/script.js', __FILE__), array('jquery'), false, true);
}



    /**
     * Include required core files used in admin and on the frontend.
     */

    include( plugin_dir_path( __FILE__ ) . 'includes/av-admin.php');
    include( plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php');  
    include( plugin_dir_path( __FILE__ ) . 'includes/plugin-colors.php'); 
    include( plugin_dir_path( __FILE__ ) . 'includes/vsa-page-embed.php');
    include( plugin_dir_path( __FILE__ ) . 'includes/floating-vsa-buttons.php'); 
    include( plugin_dir_path( __FILE__ ) . 'includes/static-vsa-buttons.php');       
    include( plugin_dir_path( __FILE__ ) . 'includes/listings-vsa-button.php');
    include( plugin_dir_path( __FILE__ ) . 'includes/gallery-vsa-embed.php');    
    include( plugin_dir_path( __FILE__ ) . 'includes/av-sdk-setup.php');
    include( plugin_dir_path( __FILE__ ) . 'includes/av-sdk-atributes.php');   
    include( plugin_dir_path( __FILE__ ) . 'includes/gallery-srp-embed.php'); 
    include( plugin_dir_path( __FILE__ ) . 'includes/av-carfax-link.php'); 
    include( plugin_dir_path( __FILE__ ) . 'includes/slack.php'); 
    include( plugin_dir_path( __FILE__ ) . 'includes/create-page.php'); 
    include( plugin_dir_path( __FILE__ ) . 'includes/window-sticker.php'); 
    include( plugin_dir_path( __FILE__ ) . 'includes/all-export-ftp.php'); 
    
    
    
