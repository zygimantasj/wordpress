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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'oA4-D1zX%ye$%BB64dOS~jRzm_u]$FE|w&)<}>uCXHjJo-/|wUXI,xn,_oP}zb6t' );
define( 'SECURE_AUTH_KEY',  '9gY @B2Q5b2N[t.tcTcXK;# ><UWM0PRK0YjE)SGUhf$Z5kkz&aVf=q&VJu9Tc*(' );
define( 'LOGGED_IN_KEY',    '93YPg#EBk<XIzD=wiO:glCZGyLT<y2VIY)xHvq)HgqB#qzVTq%a0y+aE3j8JY53o' );
define( 'NONCE_KEY',        '|`fhzT;(gLk3TxgY*n)*b6NCHk<E}pbnr%<zM^hq^:oa^M!(+pR}958|JV#*!a|b' );
define( 'AUTH_SALT',        ']8B`~xZwF2U~G9tF4Ji2:2>&q@qyCZ[y!M3Z2ERerH<&mXD*t8r|-X@,lE/HZ9jU' );
define( 'SECURE_AUTH_SALT', '8FI}f@OFo7e6T(G;`dA[3)XTK5:/Sf(OdXL5#|z+<%A.e2jJ}AcABO% K&laYtWP' );
define( 'LOGGED_IN_SALT',   ' ;7L&O*9%jYRx15,X5-aafWND(@t2qH<gX$X1X4ktYF`motc>OODo!dXHn  g6gx' );
define( 'NONCE_SALT',       '>Ke3~dXu1>CxiDw3lNL?I+0KY6^1ToZ#[wi-A-V{Ioh8Cj`983Djv%NJ.b8=|Ld^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zj_';

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
