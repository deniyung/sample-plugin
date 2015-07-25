<?php
/*
Plugin Name: Sample-plugin
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: sample-plugin
Domain Path: /languages
*/

add_shortcode('greeting', function($atts){
	if (empty($atts['language'])){
		return;
	}
	switch($atts['language']){
		case 'japanese' :
			return 'こんにちは';
		case 'english' :
			return 'Hello';
	}
});