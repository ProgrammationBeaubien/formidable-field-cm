<p>Add your settings here.</p>

<?php 
$vFldOptID        = "page_id";
$vFldOptLabelID   = $vFldOptID ."_". esc_attr( $field['id'] );
$vFldOptValue     = esc_attr( $field[$vFldOptID] );
?>
<p class="frm6 frm_form_field">
	<label for="<?php echo $vFldOptID ?>">
		<?php esc_html_e( 'Page ID', 'formidable' ); ?>
	</label>
	<input type="number" name="field_options[<?php echo $vFldOptID ?>]" id="<?php echo $vFldOptID ?>" value="<?php echo $vFldOptValue ?>" />
</p>

<?php 
$vFldOptID        = "for_field_id";
$vFldOptLabelID   = $vFldOptID ."_". esc_attr( $field['id'] );
$vFldOptValue     = esc_attr( $field[$vFldOptID] );
?>
<p class="frm6 frm_form_field">
	<label for="<?php echo $vFldOptID ?>">
		<?php esc_html_e( 'Foreign Field ID', 'formidable' ); ?>
	</label>
	<input type="number" name="field_options[<?php echo $vFldOptID ?>]" id="<?php echo $vFldOptID ?>" value="<?php echo $vFldOptValue ?>" />
</p>

<?php 
$vFldOptID        = "fform_id";
$vFldOptLabelID   = $vFldOptID ."_". esc_attr( $field['id'] );
$vFldOptValue     = esc_attr( $field[$vFldOptID] );
?>
<p class="frm6 frm_form_field">
	<label for="<?php echo $vFldOptID ?>">
		<?php esc_html_e( 'Foreign Form ID', 'formidable' ); ?>
	</label>
	<input type="number" name="field_options[<?php echo $vFldOptID ?>]" id="<?php echo $vFldOptID ?>" value="<?php echo $vFldOptValue ?>" />
</p>

<?php 
$vFldOptID        = "cpt_slug";
$vFldOptLabelID   = $vFldOptID ."_". esc_attr( $field['id'] );
$vFldOptValue     = esc_attr( $field[$vFldOptID] );
?>
<p class="frm6 frm_form_field">
	<label for="<?php echo $vFldOptID ?>">
		<?php esc_html_e( 'CPT slug', 'formidable' ); ?>
	</label>
	<input type="text" name="field_options[<?php echo $vFldOptID ?>]" id="<?php echo $vFldOptID ?>" value="<?php echo $vFldOptValue ?>" />
</p>

<?php 
$vFldOptID        = "quantite";
$vFldOptLabelID   = $vFldOptID ."_". esc_attr( $field['id'] );
$vFldOptValue     = esc_attr( $field[$vFldOptID] );
?>
<p class="frm6 frm_form_field">
	<label for="<?php echo $vFldOptID ?>">
		<?php esc_html_e( 'Quantité de sélection', 'formidable' ); ?>
	</label>
	<input type="number" name="field_options[<?php echo $vFldOptID ?>]" id="<?php echo $vFldOptID ?>" value="<?php echo $vFldOptValue ?>" />
</p>
