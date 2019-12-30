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

/**
 * Widget Support
 */
function mySidebarWidget(){
    //home page sidebar one
    register_sidebar( array(
        'name'          =>esc_html__( 'Home Page Right  Widget', 'carnews' ),
        'description'   =>esc_html__( 'Home Page Right  Widget .....', 'carnews' ),
        'id'            => 'widget-home-right',
        'before_widget' => '<div class="siderbar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="sidebar-widget-title">',
        'after_title'   => '</h4> ',
    ) );

    register_sidebar( array(
        'name'          =>esc_html__( 'Footer Bottom Widget Two', 'carnews' ),
        'description'   =>esc_html__( 'Footer Bottom Widget Two .....', 'carnews' ),
        'id'            => 'widget-footer-bottom-two',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ) );
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer Bottom Widget One', 'carnews' ),
        'description'   =>esc_html__( 'Footer Bottom Widget One .....', 'carnews' ),
        'id'            => 'widget-footer-bottom-one',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ) );
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer Bottom Widget Three', 'carnews' ),
        'description'   =>esc_html__( 'Footer Bottom Widget Three .....', 'carnews' ),
        'id'            => 'widget-footer-bottom-three',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ) );
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer Bottom Widget Four', 'carnews' ),
        'description'   =>esc_html__( 'Footer Bottom Widget Four .....', 'carnews' ),
        'id'            => 'widget-footer-bottom-four',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ) );
    register_sidebar( array(
        'name'          =>esc_html__( 'Footer Top Widget ', 'carnews' ),
        'description'   =>esc_html__( 'Footer Top Widget  .....', 'carnews' ),
        'id'            => 'footer-top',
        'before_widget' => '<div class="emergency-call mrb-50">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2> ',
    ) );
}

add_action('widgets_init','mySidebarWidget');

//Arrange Comment Field
function comment_filed_position_change($fields){
    $commentFiled = $fields['comment'];
    unset( $fields['comment']);
    $fields['comment'] = $commentFiled;
    return $fields;

}
add_filter('comment_form_fields','comment_filed_position_change');

//Remove Comment box field

function remove_website_field($fields){
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_fields','remove_website_field');