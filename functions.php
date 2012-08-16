<?php function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

add_image_size( 'font-page', 740, 480 );
$the_query = new WP_Query( 'category_name=featured' );



?>