<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri(). '/style.css' );
    wp_enqueue_style( 'planty-style', get_stylesheet_directory_uri(). '/theme.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function add_admin_link_to_menu($items,$args) {
   // var_dump($items,$args);die;
    if ( is_user_logged_in() && $args->menu->name === 'header' ) {
        $dashboard_url = admin_url();
        
        $admin_link = '<li class="admin-item"><a href="' . esc_url( $dashboard_url ) . '">Admin</a></li>';
        
        $items_array = explode( '</li>', $items );
        array_splice( $items_array, 1, 0, $admin_link );
        $items = implode( '</li>', $items_array );
    }
    
    return $items;
}




add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );
 