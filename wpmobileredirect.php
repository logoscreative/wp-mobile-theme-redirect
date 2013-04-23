<?php
/*
Plugin Name: Mobile Theme Redirect for WordPress
Plugin URI: https://github.com/logoscreative/wp-mobile-theme-redirect
Description: Redirect mobile users to another theme.
Version: 0.1
Author: cliffseal
Author URI: http://logoscreative.co
License: Whatever, for now.
*/

include_once('Mobile_Detect.php');
$detect = new Mobile_Detect();

if ( !is_admin() && $detect->isMobile() ) {
    add_filter('stylesheet', 'logos_switch_mobile');
    add_filter('template', 'logos_switch_mobile');
    function logos_switch_mobile() {
        return 'twentytwelve';
    }
}