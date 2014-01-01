<?php
	add_theme_support( 'post-thumbnails' );

	global $et_theme_image_sizes;

	$et_theme_image_sizes = array(
		'200x200' 	=> 'et-page-thumb',
		'130x130' 	=> 'et-entry-large-thumb',
		'67x67' 	=> 'et-entry-small-thumb',
		'960x340' 	=> 'et-featured-slider-large-thumb',
		'95x54' 	=> 'et-featured-slider-small-thumb',
		'40x40' 	=> 'et-widget-fromblog-thumb',
		'67x67' 	=> 'et-widget-photostream-thumb',
		'248x162' 	=> 'et-widget-recentvideos-thumb',
	);

	$et_page_templates_image_sizes = array(
		'184x184' 	=> 'et-blog-page-thumb',
		'207x136' 	=> 'et-gallery-page-thumb',
		'260x170' 	=> 'et-portfolio-medium-page-thumb',
		'260x315' 	=> 'et-portfolio-medium-portrait-page-thumb',
		'140x94' 	=> 'et-portfolio-small-page-thumb',
		'140x170' 	=> 'et-portfolio-small-portrait-page-thumb',
		'430x283' 	=> 'et-portfolio-large-page-thumb',
		'430x860' 	=> 'et-portfolio-large-portrait-page-thumb',
	);

	$et_theme_image_sizes = array_merge( $et_theme_image_sizes, $et_page_templates_image_sizes );

	$et_theme_image_sizes = apply_filters( 'et_theme_image_sizes', $et_theme_image_sizes );
	$crop = apply_filters( 'et_post_thumbnails_crop', true );

	if ( is_array( $et_theme_image_sizes ) ){
		foreach ( $et_theme_image_sizes as $image_size_dimensions => $image_size_name ){
			$dimensions = explode( 'x', $image_size_dimensions );
			add_image_size( $image_size_name, $dimensions[0], $dimensions[1], $crop );
		}
	}
?>