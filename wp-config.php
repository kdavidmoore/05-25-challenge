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
define('DB_NAME', 'customplugin');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'testPassword!!1');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '*De~f2Bd|G~MnogbXlzxb>h$3/KKwX(~,9qn|J%o=b|[_bA{3OYdPRUJdefc<_l}');
define('SECURE_AUTH_KEY',  '6WfM!1]}dS)O4A}LZxX7,, QK8J<9W[ads;yV=>k<~uSrK0g`v9S091zIbaG)>HN');
define('LOGGED_IN_KEY',    'Fvm4R:_#D$G1hy?:rL!-U.~uT$blvRFZ/xh0?bGn/ AfyQ>$CcOiDor7`Z{.#$7*');
define('NONCE_KEY',        'x|JBPfpF`Gn3YgSN(!#s3!t?D8~?<|Rok1mUUQBVO36B,>CK,VqJ5f`K}q-%N5k,');
define('AUTH_SALT',        'yD~4N}Bc>].hA~B{ur>Nx*X$glT63)C]Fa]Wd%Q&gjB9,lQYqRP[I.Y35]V5US>x');
define('SECURE_AUTH_SALT', 'OP2?HLl#U8]>UVM:_~DubD}zM /J!lQuQ$Q fy9sGr2/[.+^_4qqI>#q&en.#z%~');
define('LOGGED_IN_SALT',   'mmCDfKzPHBNqP5Jn|7cb|S+C&M&Kcw<xJ%wlKOEVjyQ02Qh.StT-hvE<hS$s4q_a');
define('NONCE_SALT',       '}-ZN[,_O UHj0*Iv1X5DT:bH`J!dPLI&^<r7Qhta9&G {BAoS3%;*sNv]<#ONiG0');

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
