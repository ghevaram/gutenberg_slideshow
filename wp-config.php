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
define( 'DB_NAME', 'gutenberg_slideshow' );

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
define( 'AUTH_KEY',         '6U+^XVBbRa-@BCgy6t+yy3auV2u%CE5+&dvP]xZ7()%2Xx2Hq%P|zI$-u!EnT q,' );
define( 'SECURE_AUTH_KEY',  'G,kx{xX|+b,tH|3Tvc?b/WPI^am<PK#m/3^V09wBg79eBl0imK4l!{WcUPF=*!l_' );
define( 'LOGGED_IN_KEY',    'JO5Y?X7ef(SBWQ|WUOVsT14rhc)Em-&J*$AGsMap2= ;2ZAM_)+Zz`?:c9{UyV*|' );
define( 'NONCE_KEY',        '&Em+;U!.5m1X}8qc)%NvNj@E;yO7`EfV0Yv#.Q+KpHVUw2/sD^XYNfWEM<Bu{11!' );
define( 'AUTH_SALT',        'AUkPqv@egFd,}_Y,J6%A0~V^YMm}Q&Z^IN(/o$SujyX~MAt1Z5}c/zP-+y-I2+IU' );
define( 'SECURE_AUTH_SALT', '3Hv+6D6xa:v7f);xxS3irgpRbc6C>o#rvDTSa3,Z)TSKr6C*lQ52S=Eahm!_ESc0' );
define( 'LOGGED_IN_SALT',   'OCEPG&_!aH&(/2(]cm(i_(AfAv{Oz$h1Zb&_*dS{D1:tyEd<Z}_k|y9MsGoArI2>' );
define( 'NONCE_SALT',       '*7A q2RLX#@.@8F9S1yNwVh*hDJrY]iGB%(F}74y4gI+]uDC}dcK?ujlTgka3yZu' );

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
