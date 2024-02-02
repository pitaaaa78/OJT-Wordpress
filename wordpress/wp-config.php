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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'percobaan' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'vita29november' );

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
define( 'AUTH_KEY',         '$+3wJBZDqq4%&i+6- >R3cv7?PTs{FagvhAkHTHqU%)rws5EMF4}+*9!YDDEbA;d' );
define( 'SECURE_AUTH_KEY',  'C5fUtR@Ieo-5!ph%Cr!bFKg)A.q+/LDsg8?=!--N|q2BIg7,%iEE=~pNjrgnvGys' );
define( 'LOGGED_IN_KEY',    'Myk;Y)N5kbT??/A[e6%M>5w5d2p5VO*ijbP4QUypOOiTOZR^fN&TsYxp+hS`7N8s' );
define( 'NONCE_KEY',        '0Ms4lFo7yQmZIyFok-Ik0pzxj535vmJmsQWIcUD2%[HK:w,?^0Yj?,AgV0F)lbt;' );
define( 'AUTH_SALT',        'vJ7Qrl8~PIq:bP+^[4!G-G!8E<L;=ju9(y);@2C*hU@|^#$2dN&AYO$DO;.~QW.E' );
define( 'SECURE_AUTH_SALT', 'j5}4~Nh2!?O WTFWV=h5fLp{~@z>VrRCY&70(r7yOg;W<k4.eh^nKcTs b6sv/6X' );
define( 'LOGGED_IN_SALT',   'JZpq[SK-Jo9Y.gp,m:NX+qWutuawl9U_g[l(?DzIb?2&xirF^a&L|Q76@u~|(PE;' );
define( 'NONCE_SALT',       'Z-%rl_LHj5J$Cx6S${076_<Y+(ct:uqtq~}o4r2!xSxsnx|G,~*nqQ+`pTd&fRa*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
