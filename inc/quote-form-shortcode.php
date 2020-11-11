<?php 
/**
 * Quote form shortcode
 */

function quote_form_shortcode_func( $atts ) {
	$a = shortcode_atts( [
    'className' => '',
  ], $atts );

  ob_start();
  ?>
  <div class="<?= implode( ' ', [ 'quote-form-container', $a[ 'className' ] ] ) ?>"></div>
  <?php 
  return ob_get_clean();
}

add_shortcode( 'quote-form', 'quote_form_shortcode_func' );