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
define('DB_NAME', 'pirmas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'zcIwdd_iKII[caJ0Gpz9l@#:To)-Y)v:_!7;E`@>],ZzgvSPdop~t]n_*Hxa<~#6');
define('SECURE_AUTH_KEY',  '6U S^y{dvbH{|o)`IPEULT;V{`R&GNeH!l36**5Z$,lqS[*Ktl/K2O_b7l_q L >');
define('LOGGED_IN_KEY',    'S@l*(opaSbg[9rbyn70|Et<Z}e:6:F#Vgvj7f:,0z,UVJ3R3(!3lhAXt&`2&nZ.t');
define('NONCE_KEY',        'KsI}^>6p[*tgU=|fd`Nezn#VzD}}h^pp(^,{$[,S,TL!H1]s=t^4|pFe>geh/$!O');
define('AUTH_SALT',        'C*u?/Il(p&=+#!u(42D0]Yu^n=N~07M$&q~~VM a{9/Cy>PhJZ_vS M;ZImr#[*h');
define('SECURE_AUTH_SALT', 'wDBA%h.Ikg<~sv88=K8$bBw,ROIwB .6Y_G-%E|RT~!|c0V<#iE-ng!yg#25_6+K');
define('LOGGED_IN_SALT',   '1l=:u(&wU(#3oV;]PsW(@g4}IEUr`^%g^q)LTGGyT`~M.u`^-E:2vO?[1!kypbL>');
define('NONCE_SALT',       '~ttfeD_.<4?-OKg(CoSVa8LL91SP-WzU8%-zDULVi)EqHP-{w?n1FXLZ-bN~+fLk');

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
