<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'vietsail' );

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
define( 'AUTH_KEY',         '6XXg97sG/kaZ1)]+*{A]AYADyQpV|gyMIwdUJ^^yjTvok7-~=%wllK)-#NT|s^ye' );
define( 'SECURE_AUTH_KEY',  'h,a5>x8?o/GVeC8l`ZVb6mxuo-zF~()+SD]?3hc=4*oK0rmH^szVL0-NpWs%psTs' );
define( 'LOGGED_IN_KEY',    'z<v7BGN$R&r!<We>yh1}NbO>nx^~7nbVPy^4]&.Ys3@|{w}QiPVB^f>[3ABQjOo;' );
define( 'NONCE_KEY',        'J!g4)v0a7H%Cn^OO$~5f!~op2G|1SS^W=Muk4gd7/Gwz;%`e-nt/h?0>!dtP.56l' );
define( 'AUTH_SALT',        'ek]4T81I`KDe2T]R/)qD.7vY;9-Hh&xx|d$z?4n}s-o:5N|%&EM1&VYuPB~cG|4q' );
define( 'SECURE_AUTH_SALT', '>j/~md$HjH^{`hiY.~3H!1AqS3oTiqCzJGyag)0,xVnJ&@<_JBM<esYBDs}_8Qq ' );
define( 'LOGGED_IN_SALT',   '(>t!~aS`)J 334[4XP<>i_pqB8>7Pr`SpJKK>$-XoX46o8xr!WFW+lf#[2FL$1(}' );
define( 'NONCE_SALT',       'IxHel%ECC}&tyzq;YiR,v*3b<PqTT&m;[Y7<~;yT ^CYD|2vJjDU5H-O7eUUwN7X' );

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
