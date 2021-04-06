<?php
if ( !defined( 'ABSPATH' ) ) 
    { die( 'You are not allowed to call this page directly.' ); }

$vChoix            = "Sélectionner un objet…";
$vAjout            = "Créer un nouveau membre";
$vForFormKEY       = "form-membres";
$vRefFieldName     = esc_attr( $args['field_name']);
$vRefField_ID      = esc_attr( $args['field_id'] );
$vRefField_KEY     = esc_attr( $args['html_id'] );
$vRefForm_KEY      = esc_attr( $args['form']->form_key );

$vMenuItems = array(
  'Antoine'       => 1,
  'Christian'     => 2,
  'Katy'          => 3,
);

$vOptionHtml = '';
foreach ( $vMenuItems as $vItem => $vValeur ) {
  $vMenuTexte   = esc_attr( $vItem );
  $vMenuValeur  = esc_attr( $vValeur );
	$vOptionHtml .= '  <option value="'. $vMenuValeur .'" class="">'. $vMenuTexte .'</option>'."\n";
}
?>

<select name="<?php echo $vRefFieldName ?>" id="<?php echo $vRefField_KEY ?>" data-invmsg="Menu is invalid" class="form-control" aria-invalid="false">
  <option value="" selected="selected" class=""><?php echo $vChoix ?></option>
  <option value="ObjetCreer" class=""><?php echo $vAjout ?></option>
<?php echo $vOptionHtml; ?>
</select>

<script type="text/javascript">
jQuery(document).ready(function(jQuery) {
  var vSelectEl = jQuery("select.form-control#<?php echo $vRefField_KEY ?>");
  
  vSelectEl.change(function() {
    if(vSelectEl.val() == "ObjetCreer") {
      jQuery("div#frm_field_<?php echo $vRefField_ID ?>_container div#edit_link a.FormCM.ObjetAjouter").trigger("click");
    }
  });
});

jQuery(document).ready(function($){
  $(document).on( 'frmFormComplete', function( event, form, response ) {
    var formID = $(form).find('input[name="form_id"]').val();
    alert('Antoine is here!');
  });
});
</script>

<div id="edit_link" style="display: none;">
<?php 
  $vShortcodeTxt  = '[frmmodal-content class="ObjetAjouter FormCM" label="Créer un nouveau membre" size="large"]';
  $vShortcodeTxt .= '[formidable id="'. $vForFormKEY .'" ref_entry_id="' .'" ref_field_key="'. $vRefField_ID .'" ref_form_key="'. $vRefForm_KEY .'"]';
  $vShortcodeTxt .= '[/frmmodal-content]';
  echo do_shortcode( $vShortcodeTxt );
?>
</div>

