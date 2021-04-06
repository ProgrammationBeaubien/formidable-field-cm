<?php

class ObjetsLiesFieldNewType extends FrmFieldType {

	/**
	 * @var string
	 */
	protected $type = 'objets-lies-type';

	/**
	 * Set to false if a normal input field should not be displayed.
	 * @var bool
	 */
	protected $has_input = true;

	/**
	 * Which Formidable settings should be hidden or displayed?
	 */
	protected function field_settings_for_type() {
		$settings                  = parent::field_settings_for_type();
		$settings['default']       = true;
		$settings['default_value'] = true;
		$settings['read_only']     = true;

		return $settings;
	}

	/**
	 * Need custom options too? Add them here or remove this function.
	 */
	protected function extra_field_opts() {
		return array(
			// name => default,
			'page_id'       => '',
			'for_field_id'  => '',
			'fform_id'      => '',
			'cpt_slug'      => '',
			'quantite'      => '',
		);
	}

	protected function include_form_builder_file() {
		return dirname( __FILE__ ) . '/builder-field.php';
	}

	/**
	 * Get the type of field being displayed. This is required to add a settings
	 * section just for this field. show_extra_field_choices will not be triggered
	 * without it.
	 *
	 * @return array
	 */
	public function displayed_field_type( $field ) {
		return array(
			$this->type => true,
		);
	}

	/**
	 * Add settings in the builder here.
	 */
	public function show_extra_field_choices( $args ) {
		$field = $args['field'];
		include( dirname( __FILE__ ) . '/builder-settings.php' );
	}

	protected function html5_input_type() {
		return 'select';
	}

	/**
	 * @return array|null If there is an error, return an array.
	 */
	public function validate( $args ) {
		$errors = array();
		$value = $args['value'];
		if ( empty( $value ) ) {
			$errors[ 'field' . $args['id'] ] = FrmFieldsHelper::get_error_msg( $this->field, 'blank' );
		}
		return $errors;
	}

	/**
	 * If the saved value will be different from the submitted value,
	 * alter it here.
	 */
	public function get_value_to_save( $value, $atts ) {
		// Make changes to $value or remove this function.
		return $value;
	}

	/**
	 * Customize the way the value is displayed in emails and views.
	 *
	 * @return string
	 */
	protected function prepare_display_value( $value, $atts ) {
		// Make changes to $value here or remove this function.
		return $value;
	}

	/**
	 * @return string Whatever shows in the front end goes here.
	 */
	public function front_field_input( $args, $shortcode_atts ) {
		$field = $args['field_id'];
		ob_start();
		include( dirname( __FILE__ ) . '/front-end-field.php' );

/* *
		echo("<!-- Début du registe de suivi\n");
		echo("### $args ###\n");
		var_dump($args);
		echo("### $shortcode_atts ###\n");
		var_dump($shortcode_atts);
		echo("### $field ###\n");
		var_dump($field);
		echo("---- Fin du registe de suivi  -->\n");
/* */

		$input_html = ob_get_contents();
		ob_end_clean();
		return $input_html;
	}
}