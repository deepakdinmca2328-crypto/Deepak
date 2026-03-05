<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_first' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nTD%v<C;7Sc6O{a`qMWqBcng9?ft`%%~455b|5GTjN4d55.}?AK#(&3]xm,YW#$Y' );
define( 'SECURE_AUTH_KEY',  'me7}5!gd^pv]M$t}4<CX<)i`o%_<NSl^gOew9VWD(h&BPvM-]E6[c#0! }#NO>M7' );
define( 'LOGGED_IN_KEY',    '3Rx*_Vf+!T#Bw>F|d;Xb:,1G!1j#cP:yGR (*t%2r_xXHDJg! -|+/1m=+(x>e/K' );
define( 'NONCE_KEY',        'r)$5[pG_LPM`9+3v#gx}e*$p0l-Tz97;U0zEj*flCR$(M@7rAMCMqb1gmF&@QMyz' );
define( 'AUTH_SALT',        'r%miC-+DGo&?RkRanFN{0t56R+K+L>Lu*;|7!Gf{t44/.$GZ5;1;)?QK]a_&ryH9' );
define( 'SECURE_AUTH_SALT', 'aQ/GCI>3ld)?:_elNxE{dt$w}7W#l{hdvo=/?/nMC)8!4]z4tuCGG,=1krW9V>Pu' );
define( 'LOGGED_IN_SALT',   '<ne&I67yw}2gQ3-JUAAMvUl40@cU3FNe8w4/sXDF&Lc7aO/G2n&P)g:~YWyULZ/f' );
define( 'NONCE_SALT',       'H[T9b5-zRc;Z%MR$Nq,%ue?-hnF ;H?!e/cTN%U$t%,uWKtz+XRvrb151$6:Yv{L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
