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
define( 'AUTH_KEY',          'O:8=pQbH:;f@7?&V^jctg!>Jw#[ZjD45IKCdEe/vEqi)l#fYc5Ds7Au!b7A{i^hm' );
define( 'SECURE_AUTH_KEY',   '8k@o{L AqLm)}9lVSX4f>$C?8ZN aC1f_s^6@RRY.1FBZ{n:l3s(r2x}|pC1m^S*' );
define( 'LOGGED_IN_KEY',     'W)1xs*{{3%bqFYI:i+0A$mG4{oys)JYx_ZQfB iF?#K?.?5.UI+Fy_QL?&;QD4~Q' );
define( 'NONCE_KEY',         'Z~;8B8Q>y@Bm{@t4~p]TI7o3Sz%+1{.3SG&jv 7Cx>$0eVr3CP<Fqyb`T*ckBkC+' );
define( 'AUTH_SALT',         's+],Vy77Tl:6H5`7=CV?odU}ZT&N1b_IC}tM2*@JmdJI n+F)nR5!OZ^e]38GO_J' );
define( 'SECURE_AUTH_SALT',  '|+cEc9V`xa&!(f[~4` RGXreX%bby~>BbG]6dPN1O(XA43}aoq|h`yDGhv(k&lSe' );
define( 'LOGGED_IN_SALT',    'W {rf{j7MvZL2X B3[!S0Z~HZ$UAUC^gc o<Io3sK;=m.n@!|n{,=E:unEx_WA&6' );
define( 'NONCE_SALT',        'dk9{2uNkQ5$c6$F=Y&{~3a*B58F;:$#!F@%kN@M5n-g5t}yl!~`x2dId1=Rui*B5' );
define( 'WP_CACHE_KEY_SALT', 'lUc!ly,%0(nkO1#mw>ouCw1;bbNG!IE,lj5oT(LH61Q{K9)k^<1OL8GkRU)/D:lD' );


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
