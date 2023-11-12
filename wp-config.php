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
define( 'DB_NAME', 'prueba' );

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
define( 'AUTH_KEY',         '.B_;?A5v=;n:0njMD*i!i*JZ91C4}5:z:BRz#1e~n#7Wj/v78l#oK@HK.scUeK1?' );
define( 'SECURE_AUTH_KEY',  'NjnOlQKpmLIZwr-+.u~s[ET.;@HYcG3+k]D*[VS^HGLf.m2GXi+Yac|Fk<dg6+[Q' );
define( 'LOGGED_IN_KEY',    ';zb*iaAwpL8*!f{l&:PxGllIpgA;jmic2kE-D.rBAXK<9>~6!)&}U^3Xef#m KSd' );
define( 'NONCE_KEY',        'Gh-HF0>Hm&inYLCx:t9BZ2fe>k1dLH(J.nSa9gPTJQHKe?fQO^|WGcZspac/qMQF' );
define( 'AUTH_SALT',        'z8Q;-3?hl|th4:1CPs%a z#?+6Nlde3b202,USwot*K~ c<$I-=WOTsSe.Z`uc30' );
define( 'SECURE_AUTH_SALT', 'uzR2;)f|:wR^{PYd7GbT~3lu T}~:@V6RF9]EYig3zZ*a41QT7HtViyQ{8,xyw(;' );
define( 'LOGGED_IN_SALT',   't/aNX[beJiv6*z4?Q25G2lp?h}aFi|z5mamHI:)ByBkGpN[Z!&Q6^a&1Q55L&xj3' );
define( 'NONCE_SALT',       '=s0alQR#kmY1>k*x<.^r$]c0;Vz|v:XA.kd&+:Zux|wm=[Ld/4ZJkvR`8%5Do,h5' );

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
