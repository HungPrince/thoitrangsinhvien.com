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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\Xampp\htdocs\thoitrangsinhvien.com\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'db_thoitrangsinhvien');

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
define('AUTH_KEY',         '6iT~W%#C3nOW;B6#`5o9GW~b3fCGIHCF+[0*e`~7~;MdtJQeRV`Owp1L=y!=LogQ');
define('SECURE_AUTH_KEY',  'Ul+ZZ?F%}wp?*U!Os5X0tWnU5OW5B;M_n3qyJ:DAlt/wxWx_<;M{^i1yqCn0_hM<');
define('LOGGED_IN_KEY',    'wH@5rx<$Ac{W$I9(x/?P[N+PaAHEz*Y/y7/]B&Sz?%A}@:PL[bq}3-f*A]i/{(m5');
define('NONCE_KEY',        'g{k81[g!0<Tt?NgVSFB{_h1Gt{(EP_5|{9SZ)]OVet#[tT1ny1CXwf7mvS#DX`h[');
define('AUTH_SALT',        'o6k`C`20x)3aQSe)2x(xNuQ0uXWaF*ARr:?9OtH O6*zfwBkf]U>M{zyT&#lV2#b');
define('SECURE_AUTH_SALT', 'Z}gEzC/Wi)zJ&j??2i&XuuB;uv]IN}h`hmV_FS+d~y_Q0au+zM*K(Z@1pm_r*Wwi');
define('LOGGED_IN_SALT',   'z0w=+6S:g/paNXeYdka5~3lx{|WlF0*U1|ESReAW>cTAR;y}KuW=jg_0tkXfBga%');
define('NONCE_SALT',       'WlueDy2[{V[b_?YW3fMl}VK((C[P8,n*Vur6,$o*cx7$Q~|1e>KFM_KhIlZ;[zXd');

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
