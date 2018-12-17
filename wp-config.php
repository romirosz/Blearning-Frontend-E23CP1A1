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
define('DB_NAME', 'base-13');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'VmYSraB~Cyc7/<>6+)b/!x(K-DA9lRS,)VreuCAQ$lw6T(sRHCldQ~e#Nwy[eOJB');
define('SECURE_AUTH_KEY',  '|CgS|(b@SU@$~NXs8WH]`d8kfFYtx2917,CAT2qC*P4v2Cg>zl54k6;bajux<Ydv');
define('LOGGED_IN_KEY',    '3C=-?PXNAdZjg(3:+ewxyA0mn>.rm-9S|rA9D-#b{9MpnfDV%)p%><yK{9AWp!6E');
define('NONCE_KEY',        'FN&Ea7]I1A,.{YuJ;nUpILK]G&Odxu+8A@lNj3S(^Rm0u.7D36zi!6z%%$Z8_g6#');
define('AUTH_SALT',        'X3!b&pmGS@(9<#9]EqFYhlRd->Kj:Ee$%=,LNNz:vy0V, -H`_>Z&)gjb1U_18uD');
define('SECURE_AUTH_SALT', 'na/TuOyo%h2<Fy_rmgNej Qnl3VA:N;*8Dc+.APc*,Vz{y04(K3Us]?GZ]ZSbVo#');
define('LOGGED_IN_SALT',   'l9q9]SJ_QkYQdC!AZ+u`/QG{TF!Mb}_cym~ rWz*i`>G!6xO|`bl;ryM8yY;|/;=');
define('NONCE_SALT',       'N(*aEIC,}e187Dd{%ZeHab(&SbM#Yc%7``+qr?>nI)_;Al>>YCv1olnIo kR%rlT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
