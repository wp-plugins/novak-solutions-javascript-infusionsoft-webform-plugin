<?php

/*
Plugin Name: Novak Solutions JavaScript / Infusionsoft Webform Plugin
Description: This plugin has been discontinued. Please use the Infusionsoft Web Form JavaScript plugin instead.
Author: Joey Novak
Version: 0.9.2
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
