<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'custom-theme' );

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
define( 'AUTH_KEY',         'T<Aqhzqj[,/(GcgNZ}$!kSk^@=:IB yVY}wxahBFhepB6:{NX*N.VMa>X:+fIsEg' );
define( 'SECURE_AUTH_KEY',  'oT}+2&iY:,I/RBg!Cf9yq0hd|aj3LkQx[d#HVX q*r]-d}8sh/z7>.og2>(n!gs<' );
define( 'LOGGED_IN_KEY',    'Or,eum.{5QRDVAYQw!pcEPnM!wN2r^qe^<j)/{)$Uh:k2Djb)Gx|j&-{Uf&c**&k' );
define( 'NONCE_KEY',        'Ca_nn,U?:uT@Kq}~0^IEnXtrZSpw68bJA@G=3}MW`)3IRswW0KdrJ(EQKu #Kba?' );
define( 'AUTH_SALT',        '(r+a/7 a,EA%ssN{ZjqMNuRF;2.e5OI8u4:89QA]2O{ZFW>#C:1X?T^s3wTd+rP*' );
define( 'SECURE_AUTH_SALT', 'XwfsjZJMM>&aGD!T<Z@6~WQwBfdI0K1O*~:Zmz,r.*2OXrUB_m[qokQWMu--r6Pk' );
define( 'LOGGED_IN_SALT',   'c4*&v?vv;{{rhe{4q~$)(VR`^8jS/i?+?Tl4zvg Y9>L.h= Q ${=t#(j!|-v&hh' );
define( 'NONCE_SALT',       ' *myqLN+0>*p:5GjmS|`VY}XQJ;xs~CoXmxkl,wKh4VC2&@75d,}Z}&F0D&1<$By' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
