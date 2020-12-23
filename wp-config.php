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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'east_indian_cooking' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
	define('AUTH_KEY',         'oKjG=7t@3DCKC3PYFfj]V++*<VW;quu]nbu,{l Z+)4M7dfR-UQ|B2?fg0h7kMGO');
	define('SECURE_AUTH_KEY',  '3&-Kf/Ax% +|~&]<Y>Schr`~x=`j(fmy2y]Ji;tv:_VA?F%hneTw8En9#0tPjpQ)');
	define('LOGGED_IN_KEY',    '39s*f*PDb`ar>]mMdxiSsqILmB QUs6<40|*XS:9@MWzEC-Ht(q?V!4J([m:r%+y');
	define('NONCE_KEY',        'm(5?^Ol}))Yi>g+[bIl.}SUAK+_<D>?~(ik9:Jg;AAW:#Q]K^3PekUJ9efGjj7Tb');
	define('AUTH_SALT',        'Oy>N7srU,UUV8`pMNruCm5z]OEAt+,XOKl&z1|oo_/JV8J|0PmqlTIs=#xo9kTGJ');
	define('SECURE_AUTH_SALT', 'B;E}+BM[rH+sxI;,BS<GT>K)J]A#u)`oWp)CETc:cn^1YKAdcM3Hp`I>.o<%9F@~');
	define('LOGGED_IN_SALT',   'GwC;Z^Rr3XUFee+Y|<~iW?|3EEOR<XExsXQ{}qC8V6N` cFpAUIRQR4ioOZhar=u');
	define('NONCE_SALT',       'I+!Et$5FAIaH<O0G?ROcK`m^ct?bIVUYyTiS`@Y.txjV,q7|acV&{!o$vdW4>KE:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

@ini_set('display_errors', 1);
@ini_set('error_reporting', E_ALL);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
