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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'PIa(&S}TuuJm^{/2nIj5u%Und7kAe5JD:;@hVRFiEM2SBE9SLjV<Lvz.Eqf==I!.' );
define( 'SECURE_AUTH_KEY',   'X>XqN-{)ZmDAb$V**wK+WldncFCBDX+};q-T}~ZP1z9(pF&a5>V4^|7e-Nx?IoiA' );
define( 'LOGGED_IN_KEY',     ';<,90z$M>uNw[%w[ pjuYL!=]b-az,iUQ<$OE/</#~t`:e|@[S|e<zjV+[].:Mh5' );
define( 'NONCE_KEY',         'I~Gnc|0we8@R |tt<%E{LYp-<%Q!3`bY.IA~s kv3.@iDD~iq=T8[H|)L|v`]%(E' );
define( 'AUTH_SALT',         'zplLkz2/}V6_<@iDSAmG8Ty@i*&S2RMLaju|V.G`aGrSWmPFL,I;Z-/+TIT8LIm9' );
define( 'SECURE_AUTH_SALT',  'qU$#s@~%>*nka7apYYx>K`}-D,00OKmSajyfqgn5vNq /S~+0#[,lV=!8t;:sZ;O' );
define( 'LOGGED_IN_SALT',    '<w|mX;)c9=uwH2Tbk}l}M+I4[mW}F-o)ZDTQ?1MBTKp|]z_Cq/,7w^B>>d2,dbDS' );
define( 'NONCE_SALT',        '!?!K/j82v8buRxX*Q=39+lz/;ieADu()ACfExtP@Uv2R8TS!*u6-/pe]M/MO/a48' );
define( 'WP_CACHE_KEY_SALT', '&5pyv0)7b,XI8Bl0#@#Ksb2nT5[aB[k-V[$5`jD`~*!~cVB/ lcc5D~Q*c|.be5h' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
