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
define('DB_NAME', 'ctfs');

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
define('AUTH_KEY',         '%?5;/7b{D0i1LcBl(RP{,Q7.Juiz97PGC}@YW=#3r,lfOs:[$wJx$7je(Mt/)/;v');
define('SECURE_AUTH_KEY',  '#uV%>i e|BXi-W**C b8%k*bo6!E73V- /]KS%kD+dGa-e,69CMd[S@Yw`P5k.F&');
define('LOGGED_IN_KEY',    '23YCVz5uDn9AWA%gmEgJ&D`xBGs+R& 5KF6s@otR=NKY~J0}]{:b*AcklbHjHt(f');
define('NONCE_KEY',        '3 {lm+?QDj}S_<YE>WiM1X/mGKAUek|k/`D9Ze+}nC*6op~W_KQ3nCK6GT2E~.*~');
define('AUTH_SALT',        'wNfua`1<5A:)Lj/U2<}_  zlV7Oe-l`-W6}k)2zMV5OZ=HxFa1J2E{&L%NJvpa{:');
define('SECURE_AUTH_SALT', '{t<[`.Xj{F<u#MtMlS7o~x5@Q$uU)=epp0el)HtBM71:~nO`T(9~z4k|QqyW(%jU');
define('LOGGED_IN_SALT',   'rLp.g8:jICGFQk?59F[$m&jH $kQjY0fB} X]eQB`EuOqRO|qB%,H0tB@sJ]S5pO');
define('NONCE_SALT',       'r`fO=7T~xfoQEV_y z~N{1r :Y68d*6+8s|l,QI9EPcA?NWt`z81=WgO0d@A=W_S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ctfs';

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
