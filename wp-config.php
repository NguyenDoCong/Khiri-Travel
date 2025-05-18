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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'khiritravel' );

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
define( 'AUTH_KEY',         '-YntS~u) F7aO[K0gDjm.N>zp2<zd3-Fz`Umzpg6{:mJe~c&YK*SLw %y(a4xVJi' );
define( 'SECURE_AUTH_KEY',  '0e-8A&lZ0<]r%Eaw-C,cqz=h#;D;QnGJNZ{9f.0/$A!zf.t l`QJ7PK3k4](_EEy' );
define( 'LOGGED_IN_KEY',    'o,qm=!O`.&Mf?8us64:z^Tj`b`X~$w!<ji>3M3]UgNpb2-GA`0FTI^aA)#cO .?>' );
define( 'NONCE_KEY',        '.;^a2bsN~Ns$j,8}dtP$k[?-djH^at#B1MEzi>}/#SB*{Y!=[-W=BF*NT{3-R|~O' );
define( 'AUTH_SALT',        'pbXxS|M.=@C4j6=nfY7;7.$Nw4i)|_e_d?Xh>ZrgeNT}+z+u25oT.(RK}OV]<ybv' );
define( 'SECURE_AUTH_SALT', '5cOIzpYdgkjOpb}e5KvS^Hqd cpk!MGe1?gJhZG[3l*kjaIz{GVzOei!H&aUUsNb' );
define( 'LOGGED_IN_SALT',   'hN*^~hIa.Dok[HG@)B,aqw3l!k-4_fb0h,U] ,m?8LXF(P~@7YP152+TfY~Tpcl3' );
define( 'NONCE_SALT',       '2,S{bGT_Qi~,M9kV=kw9IP`T> &&nqAkVszwL.P/eEO)_l[3jTd7ppE4Q=45pl.=' );

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
