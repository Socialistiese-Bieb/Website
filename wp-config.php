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
define( 'DB_NAME', 'socialistischebieb_db' );

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
define( 'AUTH_KEY',         'HT1,B8k|-a3tm.s;&lF8m3!Fh466nV;dGa2to9Dv-CC{U9Ux:OktJ#p|1#zFq6$]' );
define( 'SECURE_AUTH_KEY',  'yC^YG::K#-VoK!lf/Kv[$-y2uiWlpU-E1v4>ZsIR=00200%tV5pZW>S>8vs`%f<)' );
define( 'LOGGED_IN_KEY',    'oc_H|P$FjL>WoNkVj:wm%T$ep{n0b!80SqCC[u-s&T]6Md|wx:=|O!]rl*j!O8Hx' );
define( 'NONCE_KEY',        ':CFvqNpZfNLGAQSqL/V!5G?s!k_buK|BD.2wW!t<cf>!_dIDuy1vmc~?Yn154!|U' );
define( 'AUTH_SALT',        'qY-k4/=6X}4v5N%JgpJGQ8tsD7nq+O5HPA=9?MMC]{Mp%Bv3v3sg+z?Qbz>VSiFa' );
define( 'SECURE_AUTH_SALT', '!jvDzGPG?E|ah5n24R^RPXhfP}kRLF@Ug95_ZgY)`yH0eb#.v$U$dB%pG3i%Ev8?' );
define( 'LOGGED_IN_SALT',   'b=/a;#IN$MnE=bCF#Y3eAOSF*IUU>llya4CLsmQB%vIm.HxV@C^R*rHa#z%.$i_w' );
define( 'NONCE_SALT',       ';K!Fw;Ux@[h~^uK45VYo6L9a^i[n]YG+B.{t>HPE9%fJ[g#..J~UY+G(!Lo]+9go' );

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
