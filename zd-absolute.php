<?php
 
/*
 * Plugin Name: Zenial Digital Custom Code
 * Description: Hendratok - Zenial Digital.
 * Version: 1.0
 * Author: Hendratok
 * Author URI: https://zenialdigital.com
 * License: GPLv2 or later
 * Text Domain: https://zenialdigital.com
 */
 
 function add_zd_css(){?>
 <style>
 #zd-parent{ position: relative;}
 </style>
 <?}
add_action( 'wp_head', 'add_zd_css' );
add_shortcode( 'zd-absolute', 'zd_absolute' );
function zd_absolute( $atts = array(), $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
		'top' => 'auto',
		'left' => 'auto',
		'right' => 'auto',
		'img' => '',
		'width' => 'auto',
		'height' => 'auto',
		'bottom' => 'auto'
		), $atts
	    ));
	    
		$spacer = "<div style=\"position:absolute;top:$top;left:$left;right:$right;bottom:$bottom;\"><img src='$img' width='$width' height='$height'></div>";
	   	return $spacer;
}
