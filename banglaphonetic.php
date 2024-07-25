<?php
/*
Plugin Name: Bangla Phonetic
Plugin URI: https://redoyit.com/
Description: Used by millions, WordCount is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. WordCount Anti-spam keeps your site protected even while you sleep. To get started: activate the WordCount plugin and then go to your WordCount Settings page to set up your API key.
Version: 5.3
Requires at least: 5.8
Requires PHP: 5.6.20
Author: Md. Redoy Islam
Author URI: https://redoyit.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: banglaphonetic
Domain Path: /languages
*/
function bnph_load_textdomain(){
    load_plugin_textdomain('banglaphonetic', false, dirname(__FILE__) . '/languages');
}
add_action("plugins_loaded", "bnph_load_textdomain");

function bnph_admin_assets($screen){
    if('post-new.php' ==$screen || 'post.php' == $screen){
        wp_enqueue_script('bnph-phonetic-driver',plugin_dir_url(__FILE__).'/assets/js/phonetic.driver.js', null, 1.0, true);
        wp_enqueue_script('bnph-phonetic-engine',plugin_dir_url(__FILE__).'/assets/js/engine.js', array('jquery'), 1.0, true);
        wp_enqueue_script('bnph-phonetic-qt',plugin_dir_url(__FILE__).'/assets/js/qt.js', array('jquery', 'quicktags'), 1.0, true);
    }
}
add_action('admin_enqueue_scripts', 'bnph_admin_assets');