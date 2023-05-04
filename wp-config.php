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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'FcLwEyUDIL+,P, FhvludCcH|?_&k!{%*0_~cOWWaj~rG8tc^:!x{dxw%*wKVDT:' );
define( 'SECURE_AUTH_KEY',  'PKPw!vU*Wl:j7XykF?.{U/IFSW*zsb9qq|hH_ByvsB~1$f*f*SYDozJXK57Rr? e' );
define( 'LOGGED_IN_KEY',    'iL5:VM{/|.s@ec,12bGWy*Cvd}(612]A(/j$N`]wMzhaCf|3~Pum<nQn]e-` n(R' );
define( 'NONCE_KEY',        ']*?_S|7H?})Q.8I!HAq0|2hB0mfd2#7a<OE%Tkb<O9SoHBX[X(:l#9X832:TSt14' );
define( 'AUTH_SALT',        'jrYz@/;0.f<PKR,%YCzLr}5T/f-V?oiVfrPOxHQ ]@=K~zhCXC]@RaegHB6A^ht=' );
define( 'SECURE_AUTH_SALT', 'sZdJ`)ycm*QI}$U7SO=MpVnwA}?Lk#DCw[{R}xMSofbDgez~K^8bbXG?Lt{Ic8A^' );
define( 'LOGGED_IN_SALT',   'kivd?+=ZQYQ_cGPc(nh+c/X2Q9;|{6^J?,SMk+X~;#gAYm?7rXF/$TM(nv+7W0i)' );
define( 'NONCE_SALT',       'Fydke+B4a.+]$vooG:<;:,|I?Ao_STkF1X)rN!v$l1s}x60>wBHet<}8ob)bvO/5' );

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
