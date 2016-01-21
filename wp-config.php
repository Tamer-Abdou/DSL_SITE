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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'ex-std-node673.prod.rhcloud.com');

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
define('AUTH_KEY',         '|H7#`Ay,Jlqz_gz<r)2&[|yt#LAacU:S!~Ii+sk/0y+2|s.(cz5b_7vu,pKf-c@U');
define('SECURE_AUTH_KEY',  'fxX?htKH9-3K|pm nCI[UsG&M,Ub1V&e==je)A3iM[:KT_-g$7{+-B&B1Tp9j#|v');
define('LOGGED_IN_KEY',    '%bH^bvvDg0n?[@dkZkNr|kX&<y1{/p@-6(: B^2?pR`~4_Tu0<i^y||_n|ZX[4YC');
define('NONCE_KEY',        '22_i.[oKe;(QRC]lZh ?iXze946A* _o*o@$@c0Gt0r}:c%rn25zUtoIo99VSJkH');
define('AUTH_SALT',        'ut+FHOV[qjX-ry= ,5Ib%5t]Vf[_`pAg$sI?>d$!/if jO[AJ^R`X*p(m<N=Y-i~');
define('SECURE_AUTH_SALT', '04V%(sMtY9X~nvwsi:5&}7mnn?YpOh+-&((gWd! Djan91-V!n{Xb s0+69)0Vqu');
define('LOGGED_IN_SALT',   'zbg{KjxtMg.d`[+<N$|favp iO6@y<7?9J|{uA9!d0=<`OQb|+/sx<|W`h!0wBcB');
define('NONCE_SALT',       'tZT|Ee/qszKOLL+Mp3=X/noXrE/(9-|7|Lg;W7/M`XJ[zn_=GJNt}l kVFO+2Iiv');

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
