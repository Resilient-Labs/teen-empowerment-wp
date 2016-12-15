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
define('DB_NAME', 'teen-empowerment');

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
define('AUTH_KEY',         'c_R;#ERR&Da+-IGv:MR+Xp14`(w3D)S+s5c^hBg}g#E-sso-&K1o&= kM<)l`OP=');
define('SECURE_AUTH_KEY',  '5z=6(!cPD]d)XO%}wVye*M)e[u.R9/+-W9uZ*T?5a|m$Gxl7iz8+WhZ*W_*{G<i+');
define('LOGGED_IN_KEY',    'NkJ*C,& 7_sN7}*i@jZ9_9FT]+br8C%t[ILqhv<Y%J-^WkIR{vO}o)EVz;#RV3hd');
define('NONCE_KEY',        'x] 17IK}@)%-6o?~zH|JlB_Ds]+5;|hOeY6w1<$`Z`I.lqTg4=wp-$R; @|Tv=br');
define('AUTH_SALT',        ')e~+}_sT|_5YH}?m_u~m@>Opdk9k~f4<0L~1+D=/q(=tugjpqBq]`/)iT~u8oug;');
define('SECURE_AUTH_SALT', '&_*a*2OW)X5<_K<,[h2F.J$Xj+!O62zT~Xz`ad/8E95m_hnff=<pU8]/MyCE%J+W');
define('LOGGED_IN_SALT',   'exvJV^7+N]zN>uhVrOKXxU/N`CBPkK(rKT@`R #V0XdDwl=!6K>|97o&J_wawgP-');
define('NONCE_SALT',       '@ysC/n_?g5U1oFxk>tR2{BY#Vhl_;3?)e+@4-Ir70oi-kBI-)SQ,y4SW)e}u4Y-t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dig87_';

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
