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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ngocngan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8h7l[rje^GeS$#1hZT_)x-xgN|ZE`H9;z5BYp$sJXd#%OH>&T|YMi,VPSv.g6l`q');
define('SECURE_AUTH_KEY',  'OHgaht(Z.>{-Y{d}O8*~~F6n;!^8?9~|qEUA?#9r;zf}takk],4!/><fq XN>V;t');
define('LOGGED_IN_KEY',    'x:3nlst}~O3)rj13{#3Q%ZlPn#$eH:Jrqu#_r#;#Imq7s,=*C3(nt[Wgzhl)khx}');
define('NONCE_KEY',        'Gv NzE@&o#A{qpj3[tB30%S)hA88o{s/Ul/Zgr#Kfm;q0Usr6sPZ[r.4PI>p1f`o');
define('AUTH_SALT',        'JX:FM6d4>7DZJlK82F@Fv1dK~3dc:upp*{`YR^gd^C+Pq+$z/U) 9r,&|+ku2^D#');
define('SECURE_AUTH_SALT', 'wW4B}bw|bGD$A_r#$R8%`/o.H/UAA5t1j}Dgn)r>u?Jf>ag1riXv*6TF6i:=gQj ');
define('LOGGED_IN_SALT',   '+Z#=,%+WW88}r&Lj@)chHYocvJX(<tKfRg}u:Z^p)izNV=/]s2u+G_6t[UuEp,H]');
define('NONCE_SALT',       'D<o>]OnvJzT9V_c!A>aUF2GA0`TUDsrq_hay,1YbAh rFW&ix6LUz;gc*BMUFuGh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
