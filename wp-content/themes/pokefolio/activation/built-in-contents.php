<?php
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

--------------------------
[Note dev] À AMÉLIORER en suivant ce template :
https://wordpress.stackexchange.com/questions/274261/how-to-create-a-page-when-a-theme-is-activated

*/ 

// PAGE CONTACT
function create_page_contact() {
	if ( get_page_by_title( 'contact' ) == null ) {
		$wordpress_page = array(
			'post_title'    => 'Contact',
			'post_content'  => 'Ceci est un peu de contenu pour la page contact',
			'post_status'   => 'draft', // brouillon d'abord
			'post_author'   => 1, // admin
			'post_type' => 'page'
		);
		wp_insert_post( $wordpress_page );
	}
}
add_action('wp_loaded', 'create_page_contact', 0);

// PAGE SERVICES
function create_page_services() {
	if ( get_page_by_title( 'services' ) == null ) {
		$wordpress_page = array(
			'post_title'    => 'Services',
			'post_content'  => 'Ceci est un peu de contenu pour la page Services',
			'post_status'   => 'draft', // brouillon d'abord
			'post_author'   => 1, // admin
			'post_type' => 'page'
		);
		wp_insert_post( $wordpress_page );
	}
}
add_action('wp_loaded', 'create_page_services', 0);

// PAGE ABOUT
function create_page_about() {
	if ( get_page_by_title( 'about' ) == null ) {
		$wordpress_page = array(
			'post_title'    => 'About',
			'post_content'  => 'Ceci est un peu de contenu pour la page About',
			'post_status'   => 'draft', // brouillon d'abord
			'post_author'   => 1, // admin
			'post_type' => 'page'
		);
		wp_insert_post( $wordpress_page );
	}
}
add_action('wp_loaded', 'create_page_about', 0);

// PAGE WORKS
function create_page_works() {
	if ( get_page_by_title( 'about' ) == null ) {
		$wordpress_page = array(
			'post_title'    => 'Works',
			'post_content'  => 'Ceci est un peu de contenu pour la page Works',
			'post_status'   => 'draft', // brouillon d'abord
			'post_author'   => 1, // admin
			'post_type' => 'page'
		);
		wp_insert_post( $wordpress_page );
	}
}
add_action('wp_loaded', 'create_page_works', 0);

?>