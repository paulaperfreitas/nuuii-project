<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



register_sidebar( array(
   'name'          => 'Footer Widget',
   'id'            => 'footer-widget',
   'before_widget' => '<div class="footer-widget">',
   'after_widget'  => '</div>'
) );


function wpmu_register_widgets() {
		
}
add_action( 'widgets_init', 'wpmu_register_widgets' );

register_sidebar( array(
	'name' => __( 'Single Post After Content', 'wpmu' ),
	'id' => 'single-after-content-widget-area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>'
));

// category archive - before content widget area
register_sidebar( array(
	'name' => __( 'Category Archive Before Content', 'wpmu' ),
	'id' => 'category-before-content-widget-area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>'
));
	
// custom page template - before content widget area
register_sidebar( array(
	'name' => __( 'Widgetized Page Before Content', 'wpmu' ),
	'id' => 'widgetized-page-before-content-widget-area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>'
));

// custom page template - after content widget area
register_sidebar( array(
	'name' => __( 'Widgetized Page After Content', 'wpmu' ),
	'id' => 'widgetized-page-after-content-widget-area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>'
));