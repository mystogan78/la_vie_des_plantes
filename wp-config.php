<?php

define( 'ITSEC_ENCRYPTION_KEY', 'UHtmY0VjfD12RD9zJkt6VWlAa3hxOClqNGcgTSwxJVlsX01MQ2E6SDBpSyZjb0xyK3dOR3xiak5mPzZLJEQxaA==' );

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'la_vie_des_plantes' );

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
define( 'AUTH_KEY',         '=m3?<8ae]#Y.HL&T`+qD#aN&.V_q[E{i >9uIsuQF|Lp~BNN&oWcD&!;nKuVM0*k' );
define( 'SECURE_AUTH_KEY',  'tvG^^$$-51zdhLcedn,r:CEZO}uD5vxs?>Fcx`T4:e^qAL_y/@Qg&e6/sd2fNi#@' );
define( 'LOGGED_IN_KEY',    '4?5]/,r7y?]ivg^]}Ui>r+4=F~,A_<=3@zUGd]4;O0@c)Et~quAU0BfxY0Fo6$WJ' );
define( 'NONCE_KEY',        'f ReZ{^f$g?.WHdgQ8>yAnc[fp?Lh;W;aT8aWAq#}$#j{-V4_Ep^uB{otV]U=br_' );
define( 'AUTH_SALT',        'mL(R>?cs9`1Ft.jFLC7kg+Z>uK3R~1imsA-?npZJp`m+tg|1mlq&h8@s.GrQYz=7' );
define( 'SECURE_AUTH_SALT', 'cN;khTuf@]-PxEr-/)qmZug{d`:tT:~=c(Y7|&LxK+R6rqmD).AV+=eWRFba|6b}' );
define( 'LOGGED_IN_SALT',   'aG838Ieb/+m0XhR9 )Et^Q8wb&AaN1{rML0M{O.tr+*qI3Y]_/u1&hxKbcg!7Z[N' );
define( 'NONCE_SALT',       'LRR)`JsFuJ}jSz[^1>1bjZ6T9p]_WJY:<]WQB&3@abH0I4vH.HB/NzJ_K;>9Ys@C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
