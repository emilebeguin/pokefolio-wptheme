<?php
/*******************************************************************
                         PLUGIN INSTALLATION
********************************************************************/
/* 

*/ 

require_once get_template_directory() . '/activation/TGM-Plugin-Activation-2.6.1/recommended-plugins.php';


/*******************************************************************
                            CUSTOMIZATION
********************************************************************/

// Ajouter les images à la une pour le thème en cours
add_theme_support('post-thumbnails');
add_theme_support('custom-background');
add_theme_support('custom-header');

// active la page options dans Custom Fields Suite
// Doc : https://github.com/TomodomoCo/cfs-options-pages
function my_custom_options_pages( $pages ) {
	$my_pages = array(
		'Clients',
		'Test',
	);

	return array_merge( $pages, $my_pages );
}
add_filter( 'cfs_options_pages', 'my_custom_options_pages' );

 /**
  * @todo Filter value for each column
  * @global type $post
  * @param type $column
  * @param type $post_id
  */
  function cpt_column($column)
  {
	  global $post;
	  switch ($column) {
		  case 'cat_id':
			  echo CFS()->get("category_id", $post->ID);
			  break;
		  case 'source':
			  $source = CFS()->get("source", $post->ID);
			  echo $source[0];
			  break;
		  case 'post_status':
			  echo $post->post_status;
			  break;
		  default:
			  break;
	  }
  }

/* FOND PERSONNALISABLE DE LA SECTION HERO */
add_theme_support( 'custom-background', array(
	'default-color' => '0000ff',
	'default-size' => 'cover',
	'default-image' => get_template_directory_uri() . '/img/bg-home.png',
	'default-repeat' => 'no-repeat',
));


/* LONGUEUR MAXIMALE DES EXTRAITS */
function pokefolio_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'pokefolio_custom_excerpt_length', 999 );

////////////////////////////// TEST ///////////////////////////////

//Activate custom settings
// add_action( 'admin_init', 'sunset_custom_settings' );
// function sunset_custom_settings() {
// 	//Sidebar Options
// 	register_setting( 'sunset—settings-group', 'profile_picture' );
// 	register_setting( 'sunset-settings-group', 'first_name' );
// 	register_setting( 'sunset—settings—group', '1ast_name' );
// 	register_setting( 'sunset—settings—group', 'user_description' );
// 	register_setting( 'sunset-settings—group', 'twitten_hand1er', 'sunset_sanitize_twitter_handler' );
// 	// register_setting( 'sunset—settings-group', 'facebookmhandler' );
// 	// register_setting( 'sunset—settings—group', 'gplusmhandler' );
// 	// add_settings_section( 'sunset—sidebar-options', 'Sidebar Option', 'sunset_sideban_options', 'alecadddnsunset');
// 	// add_settings_field( 'sidebar-profiIe—picture', 'Profile Picture', 'sunset_sideban_profile', 'alecadddmsunset', 'sunset-sidebar-options');
// 	// add_settings_field( 'sidebar-name', 'Full Name', 'sunset_sidebar_name', 'alecadddmsunset', 'sunset—sidebar-options');
// 	// add_settings_field( 'sidebar—description', 'Description', 'sunset_sidebar_description', 'alecadddwsunset', 'sunset-sidebar-options');
// 	// add_settings_field( 'sidebar—twitter', 'Twitter handler', 'sunset_sidebar_twitter', 'alecadddwsunset', 'sunset—sidebar-options');
// 	// add_settings_field( 'sidebar—facebook', 'Facebook handler', 'sunsetusidebarmfacebook', 'alecadddmsunset', 'sunset-sidebar-options');
// 	// add_settings_field( 'sidebar-gplus', 'Google+ handler', 'sunset*sidebarwgp1us', 'alecadddwsunset', 'sunset-sidebar-options');
// 	// //Theme Support Options
// 	// // register_setting( 'sunset—theme—support', 'post_formats' );
// 	// // register_setting( 'sunset—theme—support', 'custom_header' );
// 	// // register_setting( 'sunset—theme—support', 'custom_background' );
// 	// add_settings_section( 'sunset-theme-options', 'Theme Options', 'sunset_theme_options', 'alecaddd_sunsetwtheme' );
// 	// add_settings_field( 'post—formats', 'Post Formats', 'sunset_post_formats', 'alecadddwsunsetmtheme', 'sunset—theme—options' );
// 	// add_settings_field( 'custom—header', 'Custom Header', 'sunset_custom_header', 'alecadddmsunsetwtheme', 'sunset—theme—options' );
// 	// add_settings_field( 'custom-background', 'Custom Background', 'sunset_custom_background', 'alecadddmsunsetwtheme', 'sunset—theme—options' );

// 	register_setting('contact-form-options', 'activate');
// }

function my_admin_menu() {
	add_options_page (
		__( 'Sample page', 'my-textdomain' ),
		__( 'Contact', 'my-textdomain' ),
		'manage_options',
		'sample-page',
		'my_admin_page_contents',
		'dashicons-schedule',
		3
	);
}

add_action( 'admin_menu', 'my_admin_menu' );


function my_admin_page_contents() {
	?>
		<h1>
			<?php esc_html_e( 'Contact information', 'my-plugin-textdomain' ); ?>
		</h1>
	<?php
}

/*******************************************************************
                              WIDGETS
********************************************************************/
// WIDGET Activation
function my_wiwi() {

	register_sidebar( array(
			'name'          => 'Right sidebar',
			'id'            => 'right_sidebar_1',
			// 'before_widget' => '<div class="search-widget-area south-catagories-card">',
			// 'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Logo',
		'id'            => 'footer_1',
		// 'before_widget' => '<div class="search-widget-area south-catagories-card">',
		// 'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Contact Section',
		'id'            => 'footer_2',
		// 'before_widget' => '<div class="search-widget-area south-catagories-card">',
		// 'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'my_wiwi' );

/*******************************************************************
                             MENUS
********************************************************************/
/**
 * - add menus
 * - customize the classes on <a> and <li> for the header
 * - add class 'active' only on current <li>
*/
function register_menus() {
	register_nav_menus(
		array(
			'header_menu' => __( 'Header Menu' ),
            'services_menu' => __( 'Services Menu' ),
			'social_menu' => esc_html__('Social Menu', 'textdomain'),
			'footer_menu' => esc_html__('Footer Quick Links', 'textdomain')
		)
	);
}
add_action( 'init', 'register_menus' );

/* add class to <li> in menus */
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/* add class to <a> in menus */
function add_additional_class_on_links( $classes, $item, $args ) {
	if (property_exists($args, 'link_class')) {
	  	$classes['class'] = $args->link_class;
	}
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_additional_class_on_links', 1, 3 );

/* add class active to current element in menu */
function special_nav_class ($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/*******************************************************************
                            THUMBNAILS
********************************************************************/
// Format d'image 
// add_image_size('feat', 255, 329, true);
// add_image_size('listings', 1110, 558, true);

/*******************************************************************
                         CUSTOM POST TYPES
********************************************************************/
/*
Custom post types (devraient pouvoir être activés/désactivés par des
options du thème).
  - Experience
  - Service (new)
  - Skill
  - Testimonial
  - Work
*/

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
		'menu_position' => 20, // en-dessous des pages
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

// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Service Archives', 'textdomain' ),
		'attributes' => __( 'Service Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Service:', 'textdomain' ),
		'all_items' => __( 'All Services', 'textdomain' ),
		'add_new_item' => __( 'Add New Service', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Service', 'textdomain' ),
		'edit_item' => __( 'Edit Service', 'textdomain' ),
		'update_item' => __( 'Update Service', 'textdomain' ),
		'view_item' => __( 'View Service', 'textdomain' ),
		'view_items' => __( 'View Services', 'textdomain' ),
		'search_items' => __( 'Search Service', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Service', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'textdomain' ),
		'items_list' => __( 'Services list', 'textdomain' ),
		'items_list_navigation' => __( 'Services list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Services list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Service', 'textdomain' ),
		'description' => __( 'Consultancy, deliverables and products that you can provide to a potential customer.', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-cart',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20, // en-dessous des pages
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
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

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
		'menu_position' => 20, // en-dessous des pages
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
		'menu_position' => 20, // en-dessous des pages
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
		'menu_position' => 20, // en-dessous des pages
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

/*******************************************************************
                       BUILT-IN PAGE CREATION
********************************************************************/
/* 
Crée des pages déjà présentes au chargement du thème, avec un
contenu par défaut.
Notes utiles :
- La page est initialisée à l'état de BROUILLON.
- Si la page est mise à la corbeille, elle disparaît ; mais pour qu'elle
soit régénérée dans la liste des pages, il faut la supprimer de façon
permanente ('delete permanently').
*/ 

require_once get_template_directory() . '/activation/built-in-contents.php';

/*******************************************************************
                           THEME SETTINGS
********************************************************************/
/*

*/
require(get_template_directory() . '/settings/theme_settings.php');
?>