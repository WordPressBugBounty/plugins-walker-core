<?php

$client_id = ! empty( $attributes['clientId'] ) ? str_replace( array( ';', '=', '(', ')', ' ' ), '', wp_strip_all_tags( $attributes['clientId'] ) ) : '';
$block_id  = 'walkerCore_' . str_replace( '-', '_', $client_id );

wp_localize_script( 'walker-core--block-scripts', $block_id, $attributes );
wp_add_inline_script( 'walker-core--block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.walkerCoreCarouselBlock( "' . $client_id . '" ) }) ' );

$nav_styles = array(
	'size'       => isset( $attributes['navigation']['size'] ) ? esc_attr( $attributes['navigation']['size'] ) : '',
	'box_width'  => isset( $attributes['navigation']['boxWidth'] ) ? esc_attr( $attributes['navigation']['boxWidth'] ) : '',
	'box_height' => isset( $attributes['navigation']['boxHeight'] ) ? esc_attr( $attributes['navigation']['boxHeight'] ) : '',
	'radius'     => isset( $attributes['navigation']['borderRadius'] ) ? esc_attr( $attributes['navigation']['borderRadius'] ) : '',
	'border'     => array(
		'width' => isset( $attributes['navigation']['border']['width'] ) ? esc_attr( $attributes['navigation']['border']['width'] ) : '',
		'style' => isset( $attributes['navigation']['border']['style'] ) ? esc_attr( $attributes['navigation']['border']['style'] ) : '',
		'color' => isset( $attributes['navigation']['border']['color'] ) ? esc_attr( $attributes['navigation']['border']['color'] ) : '',
	),
	'color'      => array(
		'text'         => isset( $attributes['navigation']['color'] ) ? esc_attr( $attributes['navigation']['color'] ) : '',
		'text_hover'   => isset( $attributes['navigation']['colorHover'] ) ? esc_attr( $attributes['navigation']['colorHover'] ) : '',
		'bg'           => isset( $attributes['navigation']['boxColor'] ) ? esc_attr( $attributes['navigation']['boxColor'] ) : '',
		'bg_hover'     => isset( $attributes['navigation']['boxColorHover'] ) ? esc_attr( $attributes['navigation']['boxColorHover'] ) : '',
		'border_hover' => isset( $attributes['navigation']['borderColorHover'] ) ? esc_attr( $attributes['navigation']['borderColorHover'] ) : '',
	),
);

$bullet_styles = array(
	'gap'     => isset( $attributes['pagination']['gap'] ) ? esc_attr( $attributes['pagination']['gap'] ) : '',
	'bottom'  => isset( $attributes['pagination']['verticalPosition'] ) ? esc_attr( $attributes['pagination']['verticalPosition'] ) : '',
	'default' => array(
		'width'  => isset( $attributes['pagination']['default']['width'] ) ? esc_attr( $attributes['pagination']['default']['width'] ) : '',
		'height' => isset( $attributes['pagination']['default']['height'] ) ? esc_attr( $attributes['pagination']['default']['height'] ) : '',
		'radius' => isset( $attributes['pagination']['default']['borderRadius'] ) ? esc_attr( $attributes['pagination']['default']['borderRadius'] ) : '',
	),
	'active'  => array(
		'width'          => isset( $attributes['pagination']['active']['width'] ) ? esc_attr( $attributes['pagination']['active']['width'] ) : '',
		'height'         => isset( $attributes['pagination']['active']['height'] ) ? esc_attr( $attributes['pagination']['active']['height'] ) : '',
		'outline'        => array(
			'width' => isset( $attributes['pagination']['active']['border']['width'] ) ? esc_attr( $attributes['pagination']['active']['border']['width'] ) : '',
			'style' => isset( $attributes['pagination']['active']['border']['style'] ) ? esc_attr( $attributes['pagination']['active']['border']['style'] ) : '',
			'color' => isset( $attributes['pagination']['active']['border']['color'] ) ? esc_attr( $attributes['pagination']['active']['border']['color'] ) : '',
		),
		'outline_offset' => isset( $attributes['pagination']['active']['offset'] ) ? esc_attr( $attributes['pagination']['active']['offset'] ) : '',
		'radius'         => isset( $attributes['pagination']['active']['borderRadius'] ) ? esc_attr( $attributes['pagination']['active']['borderRadius'] ) : '',
	),
	'color'   => array(
		'bg'                  => isset( $attributes['pagination']['default']['color'] ) ? esc_attr( $attributes['pagination']['default']['color'] ) : '',
		'bg_hover'            => isset( $attributes['pagination']['default']['colorHover'] ) ? esc_attr( $attributes['pagination']['default']['colorHover'] ) : '',
		'bg_active'           => isset( $attributes['pagination']['active']['color'] ) ? esc_attr( $attributes['pagination']['active']['color'] ) : '',
		'bg_active_hover'     => isset( $attributes['pagination']['active']['colorHover'] ) ? esc_attr( $attributes['pagination']['active']['colorHover'] ) : '',
		'border_active_hover' => isset( $attributes['pagination']['active']['borderColorHover'] ) ? esc_attr( $attributes['pagination']['active']['borderColorHover'] ) : '',
	),
);

$column1 = $attributes['gridOptions']['columnCount'] <= 3 ? esc_attr( $attributes['gridOptions']['columnCount'] ) : 3;
$column2 = $attributes['gridOptions']['columnCount'] <= 2 ? esc_attr( $attributes['gridOptions']['columnCount'] ) : 2;

$grid_styles = array(
	'column' => isset( $attributes['gridOptions']['columnCount'] ) ? esc_attr( $attributes['gridOptions']['columnCount'] ) : '',
	'gap'    => isset( $attributes['gridOptions']['gap'] ) ? esc_attr( $attributes['gridOptions']['gap'] ) : '',
);

$height = isset( $attributes['height'] ) ? esc_attr( $attributes['height'] ) : '';

$block_styles = "
#{$block_id}.layout-grid:not(.has-masonry) {
    display: grid;
    grid-template-columns: repeat({$grid_styles['column']}, 1fr);
    gap: {$grid_styles['gap']}px;
}
#{$block_id}.layout-grid.has-masonry {
    column-count: {$grid_styles['column']};
    column-gap: {$grid_styles['gap']}px;
    break-inside: avoid-column;
    display: block;
}
#{$block_id}.layout-grid.has-masonry .walker-core-grid {
    margin-bottom: {$grid_styles['gap']}px;
}
@media screen and (max-width: 1024px) {
    #$block_id.layout-grid:not(.has-masonry) {
        grid-template-columns: repeat(
            $column1,
            1fr
        ) !important;
    }
    #$block_id.layout-grid.has-masonry {
        column-count: $column1 !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id.layout-grid:not(.has-masonry) {
        grid-template-columns: repeat(
            $column2,
            1fr
        ) !important;
    }
    #$block_id.layout-grid.has-masonry {
        column-count: $column2 !important;
    }
}

@media screen and (max-width: 568px) {
    #$block_id.layout-grid:not(.has-masonry) {
        grid-template-columns: repeat(
            1,
            1fr
        ) !important;
    }
    #$block_id.layout-grid.has-masonry {
        column-count: 1 !important;
    }
}

#{$block_id}.layout-carousel.carousel-direction-vertical .swiper-wrapper {
    max-height: {$height}px; 
    height: 100%;
}

#{$block_id} .swiper-button-prev::after,
#{$block_id} .swiper-button-next::after {
    font-size: {$nav_styles['size']}px;
}
#{$block_id} .swiper-button-prev,
#{$block_id} .swiper-button-next {
    width: {$nav_styles['box_width']}px;
    height: {$nav_styles['box_height']}px;
    border-radius: {$nav_styles['radius']}px;
    border-width: {$nav_styles['border']['width']};
    border-style: {$nav_styles['border']['style']};
    border-color: {$nav_styles['border']['color']};
    color: {$nav_styles['color']['text']};
    background-color: {$nav_styles['color']['bg']};
}
#{$block_id} .swiper-button-prev:hover,
#{$block_id} .swiper-button-next:hover {
    color: {$nav_styles['color']['text_hover']};
    background-color: {$nav_styles['color']['bg_hover']};
    border-color: {$nav_styles['color']['border_hover']};
}

#{$block_id} .swiper-pagination {
    bottom: {$bullet_styles['bottom']}px;
}
#{$block_id} .swiper-pagination .swiper-pagination-bullet {
    width: {$bullet_styles['default']['width']}px;
    height: {$bullet_styles['default']['height']}px;
    border-radius: {$bullet_styles['default']['radius']}px;
    background-color: {$bullet_styles['color']['bg']};
}
#{$block_id}.carousel-direction-horizontal .swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$bullet_styles['gap']}px);
}
#{$block_id}.carousel-direction-vertical .swiper-pagination-bullets .swiper-pagination-bullet {
    margin: var(--swiper-pagination-bullet-vertical-gap, {$bullet_styles['gap']}px) 0;
}
#{$block_id} .swiper-pagination .swiper-pagination-bullet-active {
    width: {$bullet_styles['active']['width']}px;
    height: {$bullet_styles['active']['height']}px;
    outline: {$bullet_styles['active']['outline']['width']} {$bullet_styles['active']['outline']['style']} {$bullet_styles['active']['outline']['color']};
    outline-offset: {$bullet_styles['active']['outline_offset']}px;
    border-radius: {$bullet_styles['active']['radius']}px;
    background-color: {$bullet_styles['color']['bg_active']};
}
#{$block_id} .swiper-pagination .swiper-pagination-bullet:hover {
    background-color: {$bullet_styles['color']['bg_hover']};
}
#{$block_id} .swiper-pagination .swiper-pagination-bullet-active:hover {
    background-color: {$bullet_styles['color']['bg_active_hover']};
    outline-color: {$bullet_styles['color']['border_active_hover']};
}
";

$output  = '<div class="walker-core-block__carousel-wrapper">';
$output .= '<style>' . esc_attr( $block_styles ) . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
