<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pghs2005');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0z*=r^S.{5W#O#(o(.3^|XbbNB|,Q^n(N>_EY+3S.zdnwOAuTju)+it+z4(3<_J}');
define('SECURE_AUTH_KEY',  ']=7P7 YU|s/l-ML)|=vRE(&>leWPI(s/HV!+D(dh@,7L7cC|%K1|jtM,)-N7dvbv');
define('LOGGED_IN_KEY',    'K:FmQ{7O ) *az*D%u*?XyiJVv3QhK-)&!-u0[N*$/iA2FL?Yczn#@]`f dt2a}Y');
define('NONCE_KEY',        '0`8d6Bm$2iGGvHK7HZF#J(DX2r$>IbRU}k|fr CK9ZgFs<2F-lzc %V9b^-3,Ol^');
define('AUTH_SALT',        'lB<.mI~/qnwq[/2<OcT^t{vI$:xDOci[bfbb43B&$+v0&Ly>]5Y;e+lBE(S~qc)Z');
define('SECURE_AUTH_SALT', 'b9L:?#Ta;hZ?M2~VlR]RgCLRtcu<t8Wd5inrFztwrES4mU<r]>{fB}me^yfeuS0A');
define('LOGGED_IN_SALT',   'LL65ifS*v(P|)kmt-XSND%)MX^37t`g5gzg9a#Sv+.d.A;)+Fd6An]5#w/ N$A|1');
define('NONCE_SALT',       'PP-M!m;unvlN=o%,3ei^(%vX~x~i-Lb0/}|P&O+fGc}5C-bO)S1z&(f-PiA:8k^2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
