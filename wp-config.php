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
define( 'DB_NAME', 'SeksMashinaProject' );

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
define( 'AUTH_KEY',         'H?2@BC`co[63[YsW>:-58V|E^f)={n+NTVzBQ+pCC@W|G:.(QXUOslc+>@N8A^SU' );
define( 'SECURE_AUTH_KEY',  'Ism-<|Vcf0qgiE*#/.9IfZMkdZ>s`:|l|ol+bg}}B!Z+xX<_&LzPcjIm-0l/q@iO' );
define( 'LOGGED_IN_KEY',    'yt6/Y/gfuxRXi~Qd^(i.UZ1/@J,8.v/V_y/co>btp/c@!g;lAUlbGeN MGR9kW>y' );
define( 'NONCE_KEY',        '07(4a}mkK5;nswqvsOM]sO{t#i*f{EpBm2+%dl|n3DKUDgJGfVUwdG6-La!4FNCl' );
define( 'AUTH_SALT',        '8/l5*1=^*@`Ngcb(t&N)v|zwIpSz ah/(qhZo-gAnKk]OixY`k]DKRlSGR!BW WQ' );
define( 'SECURE_AUTH_SALT', 'pN0^ /TIv:74I.58:dwGw6P?!% S/7KY_Ca,zb7/hOWEr$C>>|Spn!^3% `uM/$)' );
define( 'LOGGED_IN_SALT',   '-..jkpS-HH]NUc<Hb.y}gH3&dEX>X77oE_1U=GF)PF<uos08^fV>~AE>_|z6hn[E' );
define( 'NONCE_SALT',       'YvAsBZ$$X0!;{_g6Q.V)xTloX.FW%hPYHTbVxD_$FOPl]Yj`bdtD&Qxd%f0U_}jc' );

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
