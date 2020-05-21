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

// define('DB_NAME', getenv('DB_NAME'));
// /** MySQL database username */
// define('DB_USER', getenv('DB_USER'));
// /** MySQL database password */
// define('DB_PASSWORD', getenv('DB_PASS'));
// /** MySQL hostname */
// define('DB_HOST', getenv('DB_HOST').":".getenv('DB_PORT'));

define( 'DB_NAME', 'laprotectora-wp');
define( 'DB_USER', 'lpi-admin');
define( 'DB_PASSWORD', 'l4protector4del4infanci4');
// define( 'DB_HOST', 'laprotectora-wp.cnox85ipq2vo.us-east-1.rds.amazonaws.com');
define( 'DB_HOST', '192.168.158.1');



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hOBP0!ysJ]LvPnaBrJ]h/%gF78e#Me@wRl#A(xda&9k8tReG#Vh130nWk 7rApM@' );
define( 'SECURE_AUTH_KEY',  '@i.#o,a-3I>qu~yd1A[)Z8HIf4}`bB:D F{0pZ05aeVqYBk7Gq#8Czgw~(347 nN' );
define( 'LOGGED_IN_KEY',    'DgKT)Atzk$I#JyMtPNPo0HKoUbf4v9J/KJ0q>6DDYD676bA|gwTr+YBwMhi[eOiS' );
define( 'NONCE_KEY',        '=q>n  bGwi|N&D hq(WE &QZ96fuXACudNXWL2#B/tY!/@>mM<5n5#ou0{5lN?%3' );
define( 'AUTH_SALT',        'z).W4^w5U~l>w8qc~:YL%4=.owUpoGCWUvQN``<`}zBb(Y1HO/jn]+O{fEjUX<f_' );
define( 'SECURE_AUTH_SALT', '{DJeU]_&iFBJ$1.MUNXw_4PTNQB}{*##w|{3Qtmt?aL#<AdyJFDBB<%^<cxXVJt/' );
define( 'LOGGED_IN_SALT',   ' 6)#hpZ#Yb58fpkjLi@293ypHuV^ID[nr28/}&tl<]tYk3_RVqq0&~`?`2;r+2wl' );
define( 'NONCE_SALT',       'Z)Q&U0<NNC]0)gXYB=>{H:eKn#}$X^,E<Vz.!D1YL$<p#dNX>{3T)op:KJf&%3?f' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
