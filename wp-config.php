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
define( 'DB_NAME', 'wptheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(DbN~/f@<<`bYpS6U2I15JJ.f;*/Lt,HR=Lt$exyeW$s^$+U9x67IXkse@[|DphE' );
define( 'SECURE_AUTH_KEY',  'a?{5[6|F^!-^a?3^^#)I2M9<O(uTXLJNHYKr)mDkFUt1NzmT%{9KMY=`[G6]f@6S' );
define( 'LOGGED_IN_KEY',    'Vh}?`xQd+vx[.3cKE>pQ[+!FK),33Jm&52e=JnS_ [1;lfSMVMVqa``|146r$WD%' );
define( 'NONCE_KEY',        '7SM<UVig2]A9t|b2/.RY=G5S0vvx{ge[&QO&#J0>k4y@6nJ*6Ei=.]6vJ?JuwHH*' );
define( 'AUTH_SALT',        'Dne*I%^QPp_Z,](sOx`;i{^,^Qz`&He?|]UC{SEpaXzgCpEb1iKo,]/L5TG+szy(' );
define( 'SECURE_AUTH_SALT', '6#]0UK`4Z@<Q4E(U.G@H!<Bx+tQ0/>+A4z?u$>Lv+^&.H!VZX5R&nh&]J`+lBv9_' );
define( 'LOGGED_IN_SALT',   'TC0=m:XI`{ kx>Qh-.z0](MNJMt7JsBE?=MTmP8r?XBs_S2K_Hb)wkQf2^9vgL:&' );
define( 'NONCE_SALT',       '81}/B?cbjvbKZ923Zh({E6~ABRQ*@(9vnFGl/66*B2pOBy1X-nV)VD2O4@X~u@mF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ca_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
