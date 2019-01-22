<?php
define('WP_CACHE', false);
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
define('DB_NAME', 'demo_project');

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
define('AUTH_KEY',         'S2z!F%+CIWjh}H%ohpZ<>y~)hm?Q],I$gxV.7se62b`5ewIEP-1sL5HIqwokL+Lk');
define('SECURE_AUTH_KEY',  '%4T}j?*h+(w|KF94tp@;TGlz:!<Dsu_9!zR{fVuLB`Y:Q).pNmi1=JxTJ3yT_]=p');
define('LOGGED_IN_KEY',    'sBRd3`bFe~<b*p)usWg+OiN^xx]C&[8$OH~ejM3v(pNK)1IXeMNha01KjYH^4rKN');
define('NONCE_KEY',        'W/Sdu@Pr{lf_|uwn##/g&n@?i:_zEpC&>`S2ktG26KC?&Xf4@BxATTn~V^<9{rSb');
define('AUTH_SALT',        'Uh.hRcT^A_DMD2(w#oYwyT=AqU7BuP)4#U}[tCCNoVze{B5];/|;:wNnw+|U;FP[');
define('SECURE_AUTH_SALT', 'hRT hJh=/hIg:af Gw!cE1l)#^Z&V^x~ZS!Enp/o!0V:5$?(K9]iz%zQr&z~>9cA');
define('LOGGED_IN_SALT',   '$rSOqROxmI7vjw}Zt#w$~AXx{?>np~9O-@t,I(qD*9A.p:t^$/*.rmJ-<p`ER4a2');
define('NONCE_SALT',       'dv&cZ%fU+nPmW-7%*r+S^)j=H.*3wz!(CjO6bc)c=?vNa|Ghfpww|[xW.g2~}d:j');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
