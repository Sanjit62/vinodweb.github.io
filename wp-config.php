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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vinod' );

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
define( 'AUTH_KEY',         'mg ~[Z9U1T;u:X&D=jA>[da+C{w(,UOITK)BYsww$GWaTSA*9b;:-l]+TGk*5V}o' );
define( 'SECURE_AUTH_KEY',  '11fZ!j=:5Pcd#jgb-xaZbOx_8dA+Pjn$g}C?pA<ZI)9bOd ]%SOn/]+G@yr<MI~x' );
define( 'LOGGED_IN_KEY',    '_!n3d.%L%c+N|2#CT->W0QB+}--sOyM;UG|-?BQ?Wj!]&DeMg8Y,{xSS$[_0HKWw' );
define( 'NONCE_KEY',        '@3`8+a%Rpfqo)`XhFqV=D}Xo2s6G=R@3eKpbotWjH~i!g6;^uDnCoEf9zZ@qz36~' );
define( 'AUTH_SALT',        'saYF/#skt%p.uNBG0$asDJ9E`K%/b]kG+zevN3BkUY+YbYHE^[4S*2!e>B{N+Sad' );
define( 'SECURE_AUTH_SALT', 'by`^KpX]mb.:[q1:]gqG-}hO }%ELw?E]`cD3v5YWL-f_3u _$*^bm,r7Q3 U,Q6' );
define( 'LOGGED_IN_SALT',   'oy}Sj<@qlr0KdC)0;6*agKkh3]JSWoq@y~ymkZX_i~P]K=O?9nvURj=_6YmTcw4g' );
define( 'NONCE_SALT',       'Y4l)hHzD<o0v {&U2,(T`>a4kZ(yjs&@)&>0=rRu@~f~;/Hg=;5`,.Ew&V^Kt4<r' );

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
