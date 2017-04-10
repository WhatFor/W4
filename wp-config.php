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
define('DB_NAME', 'localhostss');

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
define('AUTH_KEY',         'DP6>JxifP!P!u4M(W~[bU0@x0E5.ykV?I,:0C!QoCy/-#WXX?9qHWPudKy2a~lH!');
define('SECURE_AUTH_KEY',  '+K;jIHZSjuOL#y<n$/GmBq92ao;[gboz-h7[%x{qKv_RTG1xJ ]>ucZPS zSK?J#');
define('LOGGED_IN_KEY',    '=VABSOM>lSG SFVL:6L4EXuyZ]| z(OV`HB50m`YA(a8e}u2-!r21=Q|@k5)*=j%');
define('NONCE_KEY',        'P_>)%.L6tlSLn$:dZTnL?u#lMMyxfV`W~jHF8oTB@!*1QJSiaLuvs8@D<Z4L*Bjy');
define('AUTH_SALT',        'PlYm2o876A@LvM.,Zh$)5WB4T{|/h[^oyS|4ZJ]dd;DsAumY!_/$9FRBdwT,+O~%');
define('SECURE_AUTH_SALT', 'mVk^<J1RkulwZ2sUvyWZpFWgIg%K)X2x$13zw#VT>c!a (b,y>H`Xj;Y(xM+!NX0');
define('LOGGED_IN_SALT',   'usvM2h=[2P?K{9U/31t1(LfT0#Gk(ta=DcUE@^TMhL>d4s5&OL}(q 4]N5 Ts=|v');
define('NONCE_SALT',       'FY3@=]&aR?d 88GBz7Wym@(~1Y;,u(1ZYeeF^}/I4^mX95u:CYC#!F6_iD<&ty@Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'w4_';

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
