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
define( 'DB_NAME', 'writtenskillswp' );

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
define( 'AUTH_KEY',         'ZFZQ6x`9RLC1^E4%49 D7[PmF@e4^xR-v?}]lq2=(N/R7mN`=zA<*qki}xn5qvrv' );
define( 'SECURE_AUTH_KEY',  'Xo.h6maY?cBb6TyqidDVD~UnMv*#T?5k~Rwi4?Vai 25z,U/yhRc?H7Xnp<9Nk;6' );
define( 'LOGGED_IN_KEY',    '%Q;g}ja6i>S%E[q-ZbxmeT-jnu&~6UG|z[Nz6!Itru(E)xHc0!uu%}Z[=2~,cS!d' );
define( 'NONCE_KEY',        'zgbJ@hW|Num@0g}]eAqCR016 WlPE.*UE=QO#Ex|]FaiVBB@E-Q989,p={;^;=jZ' );
define( 'AUTH_SALT',        '}ow(RjPeS9f%&7o++:!BzkE>/k0DaUV_>MJ8bW(2-/Vl_~^Xo.VEN`6x50a%OzPU' );
define( 'SECURE_AUTH_SALT', '<m6]:DL`_*1{ehmZG`6%gY&:hJ?UQ=]/la(2i@s`ADK+.AI>m.oWA)I6P;{ciT{c' );
define( 'LOGGED_IN_SALT',   '3!<8cGOd?BtzYPTFy&Cw.Mgj?VhG{u99g/uCZ_qBbO]6YX{/F/Dp:qkLA4n^._(&' );
define( 'NONCE_SALT',       'r&5O[O6M5rh$bKM*r4P5&P$^c|j@sH|HH0Jv$L2oEOiAm[TV;9trc3b>}KM@$~N~' );

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
