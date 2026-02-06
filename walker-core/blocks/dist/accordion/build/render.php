<?php

$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['clientId'] ) ) : '';
$block_id  = 'walkerCore_' . str_replace( '-', '_', $client_id );

wp_localize_script( 'walker-core--block-scripts', $block_id, $attributes );
wp_add_inline_script( 'walker-core--block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.walkerCoreAccordionBlock( "' . $client_id . '" ) }) ' );

$styles = array(
	'gap' => isset( $attributes['gap'] ) ? esc_attr( $attributes['gap'] ) : '',
);

$accordion_styles = array(
	'font'      => array(
		'size'   => isset( $attributes['accordionStyles']['fontSize'] ) ? esc_attr( $attributes['accordionStyles']['fontSize'] ) : '',
		'weight' => isset( $attributes['accordionStyles']['fontWeight'] ) ? esc_attr( $attributes['accordionStyles']['fontWeight'] ) : '',
	),
	'icon_size' => isset( $attributes['accordionStyles']['iconSize'] ) ? esc_attr( $attributes['accordionStyles']['iconSize'] ) : '',
	'color'     => array(
		'text'        => isset( $attributes['accordionStyles']['default']['color'] ) ? esc_attr( $attributes['accordionStyles']['default']['color'] ) : '',
		'active_text' => isset( $attributes['accordionStyles']['active']['color'] ) ? esc_attr( $attributes['accordionStyles']['active']['color'] ) : '',
		'icon'        => isset( $attributes['accordionStyles']['default']['iconColor'] ) ? esc_attr( $attributes['accordionStyles']['default']['iconColor'] ) : '',
		'active_icon' => isset( $attributes['accordionStyles']['active']['iconColor'] ) ? esc_attr( $attributes['accordionStyles']['active']['iconColor'] ) : '',
	),
);

$block_styles = "
#{$block_id} .walker-core-accordion-item-block {
    margin-bottom: {$styles['gap']}px;
}

#{$block_id} .walker-core-accordion__title-wrapper .walker-core-accordion__title {
    font-size: {$accordion_styles['font']['size']}px;
    font-weight: {$accordion_styles['font']['weight']};
    color: {$accordion_styles['color']['text']};
}
#{$block_id} .walker-core-accordion__title-wrapper.active .walker-core-accordion__title {
    color: {$accordion_styles['color']['active_text']};
}

#{$block_id} .walker-core-accordion__title-wrapper .walker-core-icon {
    width: {$accordion_styles['icon_size']}px;
    height: {$accordion_styles['icon_size']}px;
    fill: {$accordion_styles['color']['icon']};
}
#{$block_id} .walker-core-accordion__title-wrapper.active .walker-core-icon {
    fill: {$accordion_styles['color']['active_icon']};
}
";

$output  = '<div class="walker-core-block__accordion-wrapper">';
$output .= '<style>' . esc_attr( $block_styles ) . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
