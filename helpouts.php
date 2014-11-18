<?php
/*
Plugin Name: Google Helpouts Shortcode
Plugin URI: http://blackreit.com
Description: Shortcode to add your helpout to any page
Author: Matthew M. Emma
Version: 1.0
Author URI: http://www.blackreit.com
*/
add_shortcode('gh','google_helpouts_shortcode');
function google_helpouts_shortcode($args, $instance) {

    extract( shortcode_atts( array(
      'listing' => 'https://helpouts.google.com',
      'gid' => '01',
      'type' => 'id' // l shows listing url, id shows id page
    ), $atts, 'gh' ) );
    $helpouturl = 'https://helpouts.google.com/';

    $helpman = plugins_url('helpman.png', __FILE__);
	
	$content = '';
	$content .='<style>div.alignimgctr {text-align:center;}</style>';
    if ($type === 'l') {
    	$content .='<div class="google-helpout alignimgctr"><a href="' . $listing . '" target="_blank"><img src="'.$helpman.'" alt="My Google Helpout"><br>I\'m available.<br>Get a Helpout!</a></div>';
    } else {
    	$content .= '<div class="google-helpout alignimgctr"><a href="'. $helpouturl . $gid .'" target="_blank"><img src="'.$helpman.'" alt="My Google Helpout"><br>I\'m available.<br>Get a Helpout!</a></div>';
    }
    return $content;
}