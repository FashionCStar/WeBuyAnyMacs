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
define('DB_NAME', 'woo_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@Zdsb,;UtKb8NYI8?BWP&eO4fw~L=V__H# ~:bV90<>Oq.ns= K*DV2S@G-bJ::d');
define('SECURE_AUTH_KEY',  'EZ+o)bqcN[R:$vZZ<CcW[D$,*QXlNw,K^v+`(jq#m-2rk4A5[8bl?3~k+nUi4G z');
define('LOGGED_IN_KEY',    'Vqln)KJY1<bnTGvHkq?^fOs2Y7$oJjx$M3;XNNC7DAH9,7O4#|=o^>Jn$QK5M0is');
define('NONCE_KEY',        '+`44,{$e%U4;oQw$Uo3HXij3>Dd%k$s4wF~(UI}A:DM(]QXuFZq%)ZIW7k,D!I9I');
define('AUTH_SALT',        'LBFCU6<@:wIa5+?^UL~j~5dh;a|1!O7ygs]d=S~x4vq4:a~7p-c1B].^%+)/`08%');
define('SECURE_AUTH_SALT', '}[W?oTobW32FB!Ll1B|aT`X;xz_+GkjWB!XM[/-/2d*-$S=y3gpTTK+Z)[Aa0Jn.');
define('LOGGED_IN_SALT',   'A52(@#%=&~(|?H~B+WzQZ B569B&qTR1Kb=bDk!xe2hFcM~B{AK1LXzFIA`KP$5o');
define('NONCE_SALT',       '*}zTrBpG-Hv3DRT8-Mbn92e~.kopjQg%!d$CS@d:r$7:0O-mZ]^-E-@IDo**!5hZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
