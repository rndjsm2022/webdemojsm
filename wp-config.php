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
define( 'DB_NAME', ''sql5478951' ' );

/** Database username */
define( 'DB_USER', ''sql5478951' ' );

/** Database password */
define( 'DB_PASSWORD', 'a5rjiMVCHT' );

/** Database hostname */
define( 'DB_HOST', 'sql5.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'rc_3e5#W7zJ(K=e-X~F^Q_XL)1Gt/^l^C]VQ2j%(y+FFS;`,&Ro<_6D%.Q/EDHU4' );
define( 'SECURE_AUTH_KEY',  'J9pZ~awNKm(=.tAr`3v?|v%gSEzGxz3@}AH/3u;;bsCp:>=mc!(1u>EiuUUY/9<D' );
define( 'LOGGED_IN_KEY',    'sMu5bm7JQ[Z5 2} zg@hJWlnZrWHF]GmVWX*gP 1QA[lAbJAKcop+OA>8U1|FDY6' );
define( 'NONCE_KEY',        'Q^ya#j1V:DO#tL(Qd4FkqIv&TalkhGwCbo;K)Ow:6=@l`76OZ,6mWb.Py?Gq(D-t' );
define( 'AUTH_SALT',        '(~HuWYuH)TC9eodGBB_R;$LFx,Q)}Rxu{ay-kf?mi`]4{,p=a$m47`lSV1[FCn{I' );
define( 'SECURE_AUTH_SALT', 'ihd!sofyl7cw(V[CS#n:Y>Y7rK5Ux6<&dOw8%l7)d)1e4/iR(gueFTeT@)&h^viV' );
define( 'LOGGED_IN_SALT',   ')q]T C4ee-bYqv-7&CK&F9tBbV`Y]A {sUonJ?_V;&MJBoD#F0Z~Ij={a3:~a*Ar' );
define( 'NONCE_SALT',       'n[7)c@6kmX}V[k,i!vTG?AxwMpSaoVyV+vVTXcjgEa|g9vp|,q8m{5q3$<hL0I<W' );
define('FORCE_SSL_ADMIN', true);
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
