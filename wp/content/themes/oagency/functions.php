<?php

if ( ! defined( 'OAGENCY_THEME_VERSION' ) ) {
	define( 'OAGENCY_THEME_VERSION', '1.0.0' );
}

if ( ! defined( 'OAGENCY_HOMEPAGE_DEFAULT_NEWS_ARTICLE_NUMBER' ) ) {
	define( 'OAGENCY_HOMEPAGE_DEFAULT_NEWS_ARTICLE_NUMBER', 6);
}

// On configure notre thème
require get_theme_file_path( 'inc/setup-theme.php' );

// On ajoute nos fichiers CSS et JS
require get_theme_file_path( 'inc/enqueue.php' );
