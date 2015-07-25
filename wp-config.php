<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpresswala');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'India@123');

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
define('AUTH_KEY',         '}5[ 2B-%51..k,puYW5T_Mo2e)k|}W3A&YyUVVZ8-I%,D8*b)q`Y]so?SHjT2G#P');
define('SECURE_AUTH_KEY',  't_nG%?WK<T}_&L+uvmIFYmp[R$ff/T.<m$TG;T+A|(yHErYlb_pc!eo)Ns?}bG<b');
define('LOGGED_IN_KEY',    'B,+;v$T6EY6GBP8tzKQ(b|^L|K%/|ez?rxgLC+~L3dpi3Y|XbNwIL&3?5@a>%f-A');
define('NONCE_KEY',        'g4oWn#->A`<!<F&~Nr~>o>DFq[(Vci@#9jBTThU-16OYzNc.&=R=!.mx#(Rp@K:!');
define('AUTH_SALT',        'vjyb8x@7:_cFr+edHx`r,=`L,)8YYwiwI_fD8G=!f7PqH-fG/Jn]%:5fBvS@kZr_');
define('SECURE_AUTH_SALT', 'bV*RB+$&&PzPZi|-a-od92N:o|Yolf|wy@MB2eb>-|uismLK_6!;*sCj,/*+RS:R');
define('LOGGED_IN_SALT',   'X<^ t30ILUiBN`rlP@VRj*!*|]N{.4?G:G 2=I;M<y6|#N}]2@,4|OskKb%p3tk-');
define('NONCE_SALT',       '(DDHlIb@h&:TgO-HYgyAZHEIH~%%T+nqq|) Lof:UrAJtz04)t9={kB)O%B`Wcni');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
