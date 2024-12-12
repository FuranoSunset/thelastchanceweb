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
define( 'DB_NAME', 'tlc' );

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
define( 'AUTH_KEY',         '^f4Mu#D*8-KIJFkyMi[v1g HvDOu=eyTk@D:Lx1u5iO5YQ=[H?7<i*^@U$uA3;Jv' );
define( 'SECURE_AUTH_KEY',  '<bdyBr?]4W)qVw:L$#(ka>| s[vA_O/rXOCsVJsD^U|;rqQ[>H|c UP$8)IL>`1O' );
define( 'LOGGED_IN_KEY',    'tf<!P<j+R(L1p:HCoLqy*U_2WXwys##?)j{`eO#^@w6DSYgIUn !L6pn F$]8|VQ' );
define( 'NONCE_KEY',        '*R-zEf..hVCo^UPH $X@nZ*#?E[/P_$!2qhJh&`9VA@l,b9/Dzv19Uqg(J{jkl3<' );
define( 'AUTH_SALT',        '|J4ADW=0_me;.e?]Kq@ra{.bZ%Fj^=k9b&;d^BEe)^-)p)7[}{2+Yr_vYD;E?t.(' );
define( 'SECURE_AUTH_SALT', 'AfT2[xNTxhjZFo57a]%H#:fmIv*@eps>MBVCp^77=)vH#]J:/C3D9iM[TblU$/o%' );
define( 'LOGGED_IN_SALT',   'z)&^8Z8*@G??xb1KH#Vk69vc>Qf!7$blU:bpjAsPh(nOgs25`&Bc$~V1kgyWkdiV' );
define( 'NONCE_SALT',       ']2|7h&]P?w`lQ$lWoXh~]Y9xnv?m0)Fygj3S2PD+T^Jk23Ktv<|{ol(DEd>DQQB[' );

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
