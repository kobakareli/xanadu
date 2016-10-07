<?php

/**
* Enqueue Styles
*/
add_action( 'wp_enqueue_scripts', 'redberry_styles' );

function redberry_styles() {
	// Path To Theme Directory
	$uri = get_template_directory_uri();
	
	// Reset CSS
	//wp_register_style( 'reset_css', $uri . '/css/reset.css', array(), '1', 'all' );
	// Fonts CSS
	//wp_register_style( 'fonts_css', $uri . '/css/fonts.css', array(), '1', 'all' );
	// Flexslider CSS
	wp_register_style( 'flexslider_css', $uri . '/css/flexslider.css', array(), '1', 'all' );
	// Google fonts CSS
	wp_register_style( 'google_font_css', 'https://fonts.googleapis.com/css?family=Playfair+Display|Roboto|Roboto+Condensed', array(), '1', 'all' );
	// Fancybox CSS
	wp_register_style( 'fancybox_css', $uri . '/css/jquery.fancybox.css', array(), '1', 'all' );
	// Custom CSS
	wp_register_style( 'custom_css', $uri . '/css/styles.css', array(), '1', 'all' );
	// Custom CSS - Max Width 1450px
	wp_register_style( 'custom_css_1450', $uri . '/css/styles.max-width-1450.css', array(), '1', 'all' );
	// Custom CSS - Max Width 960px
	wp_register_style( 'custom_css_960', $uri . '/css/styles.max-width-960.css', array(), '1', 'all' );
	// Custom CSS - Max Width 600px
	wp_register_style( 'custom_css_600', $uri . '/css/styles.max-width-600.css', array(), '1', 'all' );
	// owl carousel CSS
	wp_register_style( 'owl_carousel_css', $uri . '/css/owl.carousel.css', array(), '1', 'all' );
	// owl theme CSS
	wp_register_style( 'owl_theme_css', $uri . '/css/owl.theme.css', array(), '1', 'all' );
	// owl transition CSS
	wp_register_style( 'owl_transition_css', $uri . '/css/owl.transition.css', array(), '1', 'all' );
	// Default CSS
	wp_register_style( 'style_css', $uri . '/style.css', array(), '1', 'all' );

	// Reset CSS
	//wp_enqueue_style( 'reset_css' );
	// Fonts CSS
	//wp_enqueue_style( 'fonts_css' );
	// Flexslider Css
	wp_enqueue_style( 'flexslider_css' );
	// Google fonts CSS
	wp_enqueue_style( 'google_font_css' );
	// Fancybox CSS
	wp_enqueue_style( 'fancybox_css' );
	// Custom CSS
	wp_enqueue_style( 'custom_css' );
	// Custom CSS - Max Width 1450px
	wp_enqueue_style( 'custom_css_1450' );
	// Custom CSS - Max Width 960px
	wp_enqueue_style( 'custom_css_960' );
	// Custom CSS - Max Width 600px
	wp_enqueue_style( 'custom_css_600' );
	// Owl Carousel CSS
	wp_enqueue_style( 'owl_carousel_css' );
	// Owl Theme CSS
	wp_enqueue_style( 'owl_theme_css' );
	// Owl Transition CSS
	wp_enqueue_style( 'owl_transition_css' );
	// Default CSS
	wp_enqueue_style( 'style_css' );
}
