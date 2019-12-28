<?php
    //Initilize Menubar at any position
	function MyCarNewsMenu(){
		if (function_exists('register_nav_menu')){
			register_nav_menu('header_top_menu',__('Main Menu','carnews')); //Header Menu
			register_nav_menu('footer_menu',__('Footer Menu','carnews')); //Footer Menu
		}
	}
	add_action('init','MyCarNewsMenu');

	/*
	 * For Image Support in control panel
	 *
	 */

add_theme_support('post-thumbnails',array('post','page'));
set_post_thumbnail_size(200,200,true);
add_image_size('myFeaturedImage',300,300,true);
add_image_size('myFeaturedImage',300,true);