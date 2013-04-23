<?php
/*
Plugin Name: MusicGrid.me Mobile Redirect
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: The Plugin's Version Number, e.g.: 1.0
Author: Name Of The Plugin Author
Author URI: http://URI_Of_The_Plugin_Author
License: GTFO
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