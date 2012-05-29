<?php

/*
Plugin Name: Novak Solutions JavaScript / Infusionsoft Webform Plugin
Plugin URI: http://novaksolutions.com/wordpress-plugins/infusionsoft-w…orm-javascript/
Description: This plugin provides shortcodes that can be used to insert javascript into a page or post without wordpress removing them.  Usage: [javascript src="INFUSIONSOFT_WEBFORM_JAVASCRIPT_URL"/]
Author: Joey Novak
Version: 0.9.0
Author URI: http://novaksolutions.com
*/

add_shortcode('javascript', 'novaksolutions_shortcode_javascript');

function novaksolutions_shortcode_javascript($attributes){
    if(!empty($attributes['css'])){
        return "<div class=\"javascript-container\" style=\"{$attributes['css']}\"><script type=\"text/javascript\" src=\"{$attributes['src']}\"></script></div>";

    } else {
        return "<script type=\"text/javascript\" src=\"{$attributes['src']}\"></script>";
    }
}
