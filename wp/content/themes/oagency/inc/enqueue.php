<?php

if ( ! function_exists( 'oagency_enqueue_scripts' ) ) {
	// Ajoute les CSS et JS générés par Brunch
	function oagency_enqueue_scripts() {
		wp_enqueue_style(
			'oagency_style',
			get_theme_file_uri( 'public/css/app.css' ),
			[ 'oagency_vendor' ],
			OAGENCY_THEME_VERSION
		);

		wp_enqueue_style(
			'oagency_vendor',
			get_theme_file_uri( 'public/css/vendor.css' ),
			[],
			OAGENCY_THEME_VERSION
		);

		wp_enqueue_script(
			'oagency_script',
			get_theme_file_uri( 'public/js/app.js' ),
			[ 'oagency_vendor' ],
			OAGENCY_THEME_VERSION,
			true
		);

		wp_enqueue_script(
			'oagency_vendor',
			get_theme_file_uri( 'public/js/vendor.js' ),
			[],
			OAGENCY_THEME_VERSION,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'oagency_enqueue_scripts' );
