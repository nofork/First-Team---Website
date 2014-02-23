<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'firsteam');

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
define('AUTH_KEY',         'MS;4a5N*M+t?]sPchNn`+1S|/-2S$;e`$ q}zi|#30a5|6=w7c-sllTLl^-XuWxh');
define('SECURE_AUTH_KEY',  'K?X|2jJ0oHFx-%6vXvfpz@GF-kZ],m|UvHygHJ}_~6pvtkd}-Ty?~_@{jP5a4^D ');
define('LOGGED_IN_KEY',    '<Tyx=H1k`Z T5;e6W,egsv~;k%@>sC$n|$[>5C&r9/ZA@W}]J }GE|S+G^NM(,)Q');
define('NONCE_KEY',        'Ai:Sx/h|I>tw;.;hOdHIEw%Em`G:3((&KY8&B/ un/!Ux_NeSu!hea^D|p+R[:0#');
define('AUTH_SALT',        '(d=f%N.T.G|GP1&4Lv)N+,M6IJ]h/]WJ#>`dm#NevS_>B<QfvK^Io}OZRzT<g/1Y');
define('SECURE_AUTH_SALT', ';2U6JOIp$]n0+}G+?1:hLcnXECvq<|G@ZP4fbV8f4~{1Pu&Tx<z-h4rc-S)K|4CS');
define('LOGGED_IN_SALT',   'R+Ff567jd2;Fl[}gESJtj}*eu)UPZ##ml{+C7Q.*6zx5z?,%wKvuH:GHfM+o7b<B');
define('NONCE_SALT',       'C;MR>hnyQx/PXxDab8s |8OSt:](z7sMqfv(Up]+|@z@j|?$v-bz:3]qgKDg%D_7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
