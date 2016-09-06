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
define('DB_NAME', 'b12_18817826_vlfdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'wva1dbigcmw2hyzlkvf0dhfiq4ydjg2vjbibqlirdmia0shbpmxpdeduwpo7igfc');
define('SECURE_AUTH_KEY',  'uhhc7sppyophjjsz348e0lygytlt397mgxyrvbzkzdsed5ipfwfdhvfdwpbttfn6');
define('LOGGED_IN_KEY',    '12bcqjrw0wam53d1btcroofougrkiafmkebpkts0a1xth8zv3xdo0lqewgmquofa');
define('NONCE_KEY',        'qmkmuvrwgbhsj3ru5c1v6i1thbkchqdipfloaasepzuj0wlumuew7bcn9gc95nuo');
define('AUTH_SALT',        'dnwosq1jmnwlh2nukno6tzmabdw8obu8ew1weidcg9qn7tzw2lwaaauhbysqbnp8');
define('SECURE_AUTH_SALT', 'jsec60nsvvm37qbhchrsiu7lt3q20rpwqplbkk4wwjx55d14r3gicbzv1nk5p3i3');
define('LOGGED_IN_SALT',   'khjgmk6wovov3nf3zbc9adxpygrqdegwizcaqet6cnftpgts3ezwjapukqus5pjs');
define('NONCE_SALT',       '1ngwwlfiknrqe5m1lbusbmh6wjxkyejw2daivn7uryjsurxkryhfoba387vfmamx');

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

/* Multisite */
/*define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.laizu.22web.org');
define('PATH_CURRENT_SITE', '/vialisa/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
