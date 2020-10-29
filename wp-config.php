<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk4/3578319/www/rpdobd.org/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '3578319_wpressc769ce41' );

/** MySQL database username */
define( 'DB_USER', '3578319_wpressc769ce41' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c7Ws_oYJAu5rZyy9R9uZY1ePMBWHBoR3' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb30.runhosting.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L{PJ0A2I,Of#7 %#-C#h`])4Q8*rtU13t-g~J,Bn@Ni^OQ%(f+P.wnCjb:Uz^j/o' );
define( 'SECURE_AUTH_KEY',  'k`C>hKcx^MhVV.EUD<M+K0,=jwmd>/gFxD*6(|wi{2qgCe`3.S$A]7NQvsq&0KN|' );
define( 'LOGGED_IN_KEY',    '5_`wrGH[B(_{ogGc$~dt>;jkIv+lD{#9JSEBGWW(=xER{LmQp0G]25Y~%CzX;jb7' );
define( 'NONCE_KEY',        ';~f$^!R#?=ClBvB-Vxyi`1I,{6`k=nb(x1nI-3WR?|njQ+3)j~H^__3|Dr^f8Y7C' );
define( 'AUTH_SALT',        '+shKP+zHQl{4I%6{|8 |@` AM&~N%Xu^VM?+oQO-?yOom`vSv*m/i0f7S/0J>>a)' );
define( 'SECURE_AUTH_SALT', '3pZ!,{9(JM r,k+@aPZbCwq;$1[cvQD7A^jeuumQDl7drwFcVZ3L4X>JIGfZjzMV' );
define( 'LOGGED_IN_SALT',   '08!:uP,^i1KB.5^%ye`7pC|.PH{dv(aQ4w4XL_5xBHsH~dp<#2g77~$iUX*gJ:?!' );
define( 'NONCE_SALT',       'D9))+]Mu#ihCmlMaJSS/~8 )Ov23%cw:*nN(E6C8kns7VpoV>HV.1uAu/_d9:$9b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
