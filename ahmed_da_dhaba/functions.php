<?php
// Enqueue CSS and other theme scripts
function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// Add support for the title tag
function theme_setup() {
    add_theme_support('title-tag');
    // Register the menu
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'ahmed_da_dhaba')
    ));
    register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'ahmed_da_dhaba' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('after_setup_theme', 'theme_setup');
?>
