<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'oagency');
/** MySQL database username */
define('DB_USER', 'oagency');
/** MySQL database password */
define('DB_PASSWORD', 'oagency');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r,neS*p8WSkpRiUuR-lo(G0O.d+9k!, m`);@0-t[24!ishlq0~VbbCpA1wvKn$t');
define('SECURE_AUTH_KEY',  'JivE5pEnW>HSC_HkPW+L)RqV;ZT+];G$:#!CKG!RU1*CIc+e3-@1s7T|Jz)ENobC');
define('LOGGED_IN_KEY',    '9S|dSYUTkD|S{tBG8CA,,|dA%wu%Kp[9zVI-%AX[0-E&$G1(1Y`h eC3[qbXWh/H');
define('NONCE_KEY',        'N,hxB@wL=KYDe&@;+jr|o-[JVqK`5E6civMI^//^iFeq<ZVr}&hHwKf`W84V>kM]');
define('AUTH_SALT',        'nq4G29kKDc.|2R+6eUq|&pSA8:0O}|w!zl=8fnxXeB`B1l0~PsGv{t70(FdhhwC7');
define('SECURE_AUTH_SALT', 'Z<Du*+kslT0e{Q9,~mX4K%hdpcX@IXhd!12sJ<p_uIpVo7a4nWg!p/n1uY8^38L2');
define('LOGGED_IN_SALT',   '*US<@,e.2jdHCg5.F|SS7UiFt/`aF5xxYF9Es37g.y|+4Pn4*}}7l{jR(Qf;-2O5');
define('NONCE_SALT',       ' Ff69~SA|!<Rbe5jvUYp)zzaC6Y9;3WMK$;0oHD^n`qdww/I}:|KWGhg/dv5NEzb');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
define( 'WP_CONTENT_URL', 'http://localhost/hyperspace/wordpress/eval-oagency/wp/content' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/wp/content' );
/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
// Si WP_DEBUG == true (en gros si je suis en train de développer)
if (WP_DEBUG) {
	// J'affiche les erreurs
	define('WP_DEBUG_DISPLAY', true);
	// Je n'active pas le fichier de debug
	define('WP_DEBUG_LOG', true);
	// Bloquer l'installation des plugins & des thèmes
	define('DISALLOW_FILE_MODS', false);
	// Désactive l'éditeur de thème en ligne.
	define('DISALLOW_FILE_EDIT', true);
	// Télécharger directement les plugins/thèmes/langues/maj
	define('FS_METHOD', 'direct');
	// Je désactive les révisions en mode debug
	define('WP_POST_REVISIONS', false);
// Si WP_DEBUG == false (en gros si le site est en prod)
} else {
	// Bloquer l'installation des plugins & des thèmes
	define('DISALLOW_FILE_MODS', true);
	// Désactive l'éditeur de thème en ligne.
	define('DISALLOW_FILE_EDIT', true);
	// Je n'affiche pas les erreurs
	define('WP_DEBUG_DISPLAY', false);
	// J'active le fichier de debug
	define('WP_DEBUG_LOG', true);
	// Je limite le nombre de révisions à 10
	define('WP_POST_REVISIONS', '10');
}
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
