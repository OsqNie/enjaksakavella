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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/home/inkubio/enjaksakavella/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'inkubio');

/** MySQL database username */
define('DB_USER', 'inkubio');

/** MySQL database password */
define('DB_PASSWORD', 'UXZN5wLAMT');

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
define('AUTH_KEY',         '_h4F8hCfzC|!Xc6|e,{Lv-E!XkEvVWYhPx`M&-h[nU$3E5t7UO=ZmzWT8i)pSrqj');
define('SECURE_AUTH_KEY',  'z= otVyRt5F?+q]DR3#q+X||QUnFdUaeJl{1AAxe@)W.Ie~vi=?-gn8q41-dJPLO');
define('LOGGED_IN_KEY',    '7Z/Re}e!$eUul8/|*`;)/+pd_}V&KW+U+!VU)D#_/Eb.d7t16qLX(-adHf0#|dnH');
define('NONCE_KEY',        'l74Ihki{_[FB8}fj2DphB?)r_~1aLg+C6f(/4)x0q</Mn^qPnk+GU<~^ScFTqs5:');
define('AUTH_SALT',        ',v)xA8Ar*L-opL7F3?_^E-u@|R^YPpt{YSn`yg,F_V%!C-2+--4QUo$%W=|W^GKn');
define('SECURE_AUTH_SALT', 'qK= =#?Ueoc3[0Z%>y,&o+}k2-@d_](U:@Lhm+Uw8S+ mwC.;cD3fsgyLPOK|i[1');
define('LOGGED_IN_SALT',   'Bh%caLC;;*^Y(BsBnz5p{+sXVc#5=q8qy}D+~(09<&yt2~E19HOyg%{ki;y|UE4*');
define('NONCE_SALT',       'MCh6)&PCpG4oZ_I!l@$uuqU/|V#q$fo?k5<^GT|}eU(+94nRPB1wO@tM8bja}&E-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_pyora_';

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
