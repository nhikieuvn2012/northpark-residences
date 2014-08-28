<?php

function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
  
    register_nav_menus(
    array('footer-menu' => __( 'Footer Menu' ) )
  );
}

add_action( 'init', 'register_my_menus' );

function reg_side_bar_init() {
    
    register_sidebar( array(
    'name' => __( 'Main Sidebar', 'kurotsmile' ),
    'id' => 'sidebar-main',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    
    

}
add_action( 'widgets_init', 'reg_side_bar_init' );