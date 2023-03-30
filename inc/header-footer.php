<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Réglages Menu',
		'menu_title'	=> 'Réglages Menu',
		'menu_slug' 	=> 'heafoo-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Réglages Menu d\'entête',
		'menu_title'	=> 'Menu d\'entête',
		'parent_slug'	=> 'heafoo-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Réglages Menu bas de page',
		'menu_title'	=> 'Menu bas de page',
		'parent_slug'	=> 'heafoo-general-settings',
	));
	
}

?>