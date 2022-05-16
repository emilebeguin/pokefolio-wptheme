<?php 
// Ajouter les images à la une pour le thème en cours
add_theme_support('post-thumbnails');
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );

// active la page fonctions dans ACF
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


// WIDGET Activation
function my_wiwi() {

	register_sidebar( array(
			'name'          => 'Colonne de droite',
			'id'            => 'right_col',
			'before_widget' => '<div class="search-widget-area south-catagories-card">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'my_wiwi' );

// MENU
if (function_exists('register_nav_menu'))
{
    register_nav_menu('header_menu', 'Header Menu');
}


// Format d'image 
// add_image_size('feat', 255, 329, true);
// add_image_size('listings', 1110, 558, true);

// Register Custom Post Type Work
function create_work_cpt() {

	$labels = array(
		'name' => _x( 'Works', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Work', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Works', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Work', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Work Archives', 'textdomain' ),
		'attributes' => __( 'Work Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Work:', 'textdomain' ),
		'all_items' => __( 'All Works', 'textdomain' ),
		'add_new_item' => __( 'Add New Work', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Work', 'textdomain' ),
		'edit_item' => __( 'Edit Work', 'textdomain' ),
		'update_item' => __( 'Update Work', 'textdomain' ),
		'view_item' => __( 'View Work', 'textdomain' ),
		'view_items' => __( 'View Works', 'textdomain' ),
		'search_items' => __( 'Search Work', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Work', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Work', 'textdomain' ),
		'items_list' => __( 'Works list', 'textdomain' ),
		'items_list_navigation' => __( 'Works list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Works list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Work', 'textdomain' ),
		'description' => __( 'The works of the guy or girl', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-paste-text',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'work', $args );

}
add_action( 'init', 'create_work_cpt', 0 );

// Register Custom Post Type Experience
function create_experience_cpt() {

	$labels = array(
		'name' => _x( 'Experiences', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Experience', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Experiences', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Experience', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Experience Archives', 'textdomain' ),
		'attributes' => __( 'Experience Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Experience:', 'textdomain' ),
		'all_items' => __( 'All Experiences', 'textdomain' ),
		'add_new_item' => __( 'Add New Experience', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Experience', 'textdomain' ),
		'edit_item' => __( 'Edit Experience', 'textdomain' ),
		'update_item' => __( 'Update Experience', 'textdomain' ),
		'view_item' => __( 'View Experience', 'textdomain' ),
		'view_items' => __( 'View Experiences', 'textdomain' ),
		'search_items' => __( 'Search Experience', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Experience', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Experience', 'textdomain' ),
		'items_list' => __( 'Experiences list', 'textdomain' ),
		'items_list_navigation' => __( 'Experiences list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Experiences list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Experience', 'textdomain' ),
		'description' => __( 'The pro experiences of the guy or girl', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site-alt3',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'experience', $args );

}
add_action( 'init', 'create_experience_cpt', 0 );

// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Testimonial Archives', 'textdomain' ),
		'attributes' => __( 'Testimonial Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'textdomain' ),
		'all_items' => __( 'All Testimonials', 'textdomain' ),
		'add_new_item' => __( 'Add New Testimonial', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Testimonial', 'textdomain' ),
		'edit_item' => __( 'Edit Testimonial', 'textdomain' ),
		'update_item' => __( 'Update Testimonial', 'textdomain' ),
		'view_item' => __( 'View Testimonial', 'textdomain' ),
		'view_items' => __( 'View Testimonials', 'textdomain' ),
		'search_items' => __( 'Search Testimonial', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdomain' ),
		'items_list' => __( 'Testimonials list', 'textdomain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'textdomain' ),
		'description' => __( 'The testimonials of the clients', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-awards',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

// Register Custom Post Type Skill
function create_skill_cpt() {

	$labels = array(
		'name' => _x( 'Skills', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Skill', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Skills', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Skill', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Skill Archives', 'textdomain' ),
		'attributes' => __( 'Skill Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Skill:', 'textdomain' ),
		'all_items' => __( 'All Skills', 'textdomain' ),
		'add_new_item' => __( 'Add New Skill', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Skill', 'textdomain' ),
		'edit_item' => __( 'Edit Skill', 'textdomain' ),
		'update_item' => __( 'Update Skill', 'textdomain' ),
		'view_item' => __( 'View Skill', 'textdomain' ),
		'view_items' => __( 'View Skills', 'textdomain' ),
		'search_items' => __( 'Search Skill', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Skill', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Skill', 'textdomain' ),
		'items_list' => __( 'Skills list', 'textdomain' ),
		'items_list_navigation' => __( 'Skills list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Skills list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Skill', 'textdomain' ),
		'description' => __( 'The skills of the guy or girl', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-customchar',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'skill', $args );

}
add_action( 'init', 'create_skill_cpt', 0 );