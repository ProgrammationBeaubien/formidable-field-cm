<?php
/*
Plugin Name: un champ Formidable Forms pour des données liées
Description: Création d\un chamnp de type Objets Liés dans Formiable Forms.
Version: 0.1.0
Plugin URI: https://beaubien.info/
Author URI: https://beaubien.info/
Author: Strategy11
*/



/**
 * Add the autoloader.
 */
function objets_lies_load_formidable_field() {
	spl_autoload_register( 'objets_lies_forms_autoloader' );
}
add_action( 'plugins_loaded', 'objets_lies_load_formidable_field' );

/**
 * @since 3.0
 */
function objets_lies_forms_autoloader( $class_name ) {
	// Only load ObjetsLies classes here
	if ( ! preg_match( '/^ObjetsLies.+$/', $class_name ) ) {
		return;
	}

	$filepath = dirname( __FILE__ );
	$filepath .= '/' . $class_name . '.php';

	if ( file_exists( $filepath ) ) {
		require( $filepath );
	}
}

/**
 * Tell Formidable where to find the new field type.
 * @return string The name of the new class that extends FrmFieldType.
 */
function objets_lies_get_field_type_class( $class, $field_type ) {
	if ( $field_type === 'objets-lies-type' ) { 
		$class = 'ObjetsLiesFieldNewType'; 
	}
	return $class;
}
add_filter( 'frm_get_field_type_class', 'objets_lies_get_field_type_class', 10, 2 );

function objets_lies_add_new_field( $fields ) {
	$fields['objets-lies-type'] = array(
		'name' => 'Objets Liés',
		'icon' => 'frm_icon_font frm_pencil_icon', // Set the class for a custom icon here.
	);
	return $fields;
}
add_filter( 'frm_available_fields', 'objets_lies_add_new_field' );
