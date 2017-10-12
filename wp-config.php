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
define('DB_NAME', 'dulich');

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
define('AUTH_KEY',         'rL|0/I@So.Ddl0T<+^GkeCl,qzjHaK;=aA&+QyP!|143Nc`/?B;C>Gj4:9a_,5lv');
define('SECURE_AUTH_KEY',  'Dd`OlH?|X%$LH[;]Y i(&@G_s=/S&EM`aR]ZwQ/i.ymG*hJD5n&xT,*k<,F]_ft7');
define('LOGGED_IN_KEY',    '3K|`y`|+d^Go0E|_s,(Sz8dQYSz(yZ*2$Hyx0LFQW[==ArKDnz7!~MK#r^$$lX _');
define('NONCE_KEY',        'E2Dssf#Mx~+NH%#q22:|Z6|7I//[%svTrIBS~$4,VCS){QxC{4%;~}tbe4V;I_;%');
define('AUTH_SALT',        '|rD`Ua[>W.MWlIs_Bixm4I]#UuXl2=]}p ]hz.DJm]4L]{yX>B$vkDaLrd)SS]X;');
define('SECURE_AUTH_SALT', '(W)IU7f*Y@0t59oomH:;}K?h=-_#^WLV1?sZ]n{c4|OK(P:w3gT/=~Q}3g^kFpnm');
define('LOGGED_IN_SALT',   'J>k_6i KxrdE]{H1 DZ&O4jcQ-0MWo/xZjOAac<T4TW@>8QL}!#>$ct$qAld! vR');
define('NONCE_SALT',       'W}X#tjVj.Mdc n>wB7.sG*H5nSwd~[rz#kd=V4M9c%-U>-C.r5t7Yr{-2g6S9y>6');

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
