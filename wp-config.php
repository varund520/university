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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         '%SL%AsdM3uaPMMlB/QHei|PFz<@kn%0u6WR?CA(0d35{D6bL4uR,;wA17wuzZ8Bh' );
define( 'SECURE_AUTH_KEY',  'pQH@rRxR>dxWmnfwaOlp9[PX77tb$S#~9M;m*!.%RMCLx=~$<w4!/xrCh9GOsK2|' );
define( 'LOGGED_IN_KEY',    'HL01#RVnc3y(QEgjZ@bw1huDYuAZ?cLA.<9caOm{T53K0qX*B$5u-2+1 9%5JGy ' );
define( 'NONCE_KEY',        'z8@e+L[HF+dT@NN2*0%R|3tXe|m($o)a4mj}hn,F#Fow@6r_H~34pE:%!Sy0-~!m' );
define( 'AUTH_SALT',        '/j|=sY?l2<MSPIb-T(jeGcV&/ki0fGfr`/p$[,s*F=So1`{v dzIp:rA7I[l_3;W' );
define( 'SECURE_AUTH_SALT', 'StApakwPxw[0@vP7)RZ,k-pi:YsEoUQWcy GiBV3}p57X_<KWb7{7*hxB ?w>&c4' );
define( 'LOGGED_IN_SALT',   '?L>Lko5p%u%9q>kqBKtt-A;}Ur;Up|BO=sEI;GCxDqwkM[6=kv;F3gz@,BE,b4S$' );
define( 'NONCE_SALT',       '/f3(l^][m=fHg$=[O{1+e-j1(mc*bL: rWk!^-D/vk2<^+Ou}gC4o(g:*Psn4*F8' );

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
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
