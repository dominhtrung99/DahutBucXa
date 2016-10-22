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
define('DB_NAME', 'dahutbucxa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '%r~qEZ1SbFmg<2,oT+)*&z/OB?a`IpcA*p(@gvh&[^_:8Y,gPd{9P<J$+<or(eJJ');
define('SECURE_AUTH_KEY',  '7s2LtwS@B{&8-yH[YYr>~*-)GxFX IEDe9E/[v~6tMyGYRAdv_o]51^6$3X-+*1m');
define('LOGGED_IN_KEY',    'nD}5S#ld|PXShQ#gsMO@|<*e]nsXb[:wCrQ!o+~,bS#C3Ug8yp_qff}{%CN:a-%c');
define('NONCE_KEY',        'SBe|.gi{i94cl#A9PmrS-qDul!9~fJVXzQdt+md)#H5Mh9+EjaSKx!VJj,/!Ki};');
define('AUTH_SALT',        'b`F7reAVs_zAMA.J[OYM,|r{~&!ZE}-r1bFHomi~j>!QvJ<CZK7x| Bj]^#0]?Pu');
define('SECURE_AUTH_SALT', '&6XpH15<byPXTUBMaF:|sV-%rj1-4Z9sZ[1&TDivRvE74G8e/WJg^)Ac1Wj&&HBH');
define('LOGGED_IN_SALT',   '=m/TFdwe(C5C/cDX_n)c/10tqdn:MC*qm9JZMu@CJUf*95Bcp]y>4c@44bPnpa,$');
define('NONCE_SALT',       'bV54. tx;REMEkJsELjujMBFN^K0@Czs|PE5~cHjK7#8C+~LWAKdaQ(z7 *Z2eUg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bx_';

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
