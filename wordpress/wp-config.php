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
define( 'DB_NAME', 'main' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'Os|m&2U.~OR,HiY//e6ibGY3mUU2kq*/0q4#O?9WFGG&Q2`hzJKQ}R4=`?yz+%z ' );
define( 'SECURE_AUTH_KEY',  '>=@(pdl]sX/$-9zaW<h5Go8SWhJyG~&$E>M=98Be#%!9Dx)E^yt~rx 4_[P5*bP~' );
define( 'LOGGED_IN_KEY',    '1yO2E>8z%GISY{dOLZ!-u|}gV$P]_bHKsrzQuqhD1=^1DU@y[W=<}3m4 4ZDZSGW' );
define( 'NONCE_KEY',        '@f/)yrRhLr4#(+ZT*D:T?wzYJiXVVGT!,sK)We2,8,qOh3pWhsf,g?7E]:NtVvLG' );
define( 'AUTH_SALT',        'E.F(FHwTGOO)@3/$Ab(`#P&0l:7%Ke%N$)wPPPI7hEQcNx@W7yM+uTFXQuHpidis' );
define( 'SECURE_AUTH_SALT', ' aKD)jUL|+S7y`qt50Wrkog*+23|e|#WK;VYe08P+yk1tbJWhT[Cr@ku9hb.izcw' );
define( 'LOGGED_IN_SALT',   '-#7G#Yvw.k7h v#9/BKv1}uDDgkZT^OqI*,^]tnZCr}8smsl_t<RjR_l (af^:-g' );
define( 'NONCE_SALT',       'v!AD(OfrXlb3j*tK>~TTi*90x:u,<~fH;hS{g^TZ1a:,F0gIe_U?tdm6vnZhF/T2' );

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
