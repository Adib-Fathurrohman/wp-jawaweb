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
define( 'AUTH_KEY',          'MG3wAU{}rhs|kkaw2lk}GfCEwL;SEz<`|]6F*pzSw,bFY(,Tdapbew)a!L(>JW$+' );
define( 'SECURE_AUTH_KEY',   'Xr^uzjG$|m=uj$EGHCTatxH+z9Fi4z>3%D~+/_T)[6ZVOzVkcX/hr3m(^2}7xZLN' );
define( 'LOGGED_IN_KEY',     '2-k;VdW!}ND[#J8<$$Vw]YCncvM Yo^2>s&}{uB!4~8T$_^|DWi0JN^2uy>E)<zJ' );
define( 'NONCE_KEY',         'KH&LQ7Dkpc!O85;egD1P{yTJQ0Dj1~h O|]hQIM}>(p+9yiB=Mo%10r[CvX=3v~6' );
define( 'AUTH_SALT',         '?QfE#mU:,Uno~.UxM9,] z1t[v)Pdb#ZV VJU[icj_z5*TM3Y}.|KqzMe1AeR[cW' );
define( 'SECURE_AUTH_SALT',  'fwAF.o!e2HPh-.p~JPS]7l[[uYpAqx|`;JxHcVXrLZI6$G}G#drYA;ikrD:$=|rT' );
define( 'LOGGED_IN_SALT',    '~.9;_F4tiL@.mhUDim!/r7JfUwm<w=YQ0jrl{Oy-AfNfkN`c!3m9[J,RVDLF+ZuP' );
define( 'NONCE_SALT',        '#V3qjn=[]x5:?,xattV?#WY|9rk_*uXl}0)x!CljP$ nri$EzSv,OF;-?b;^xkM<' );
define( 'WP_CACHE_KEY_SALT', 'pCH|MTa?]m~|vaK+]vD93`6f[?u^3|(QpIq$EF^!H=qK*y2z,=bSC/yrfirXTiIY' );


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
