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

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['p-mysql'][0];  // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $service['credentials']['name']);

/** MySQL database username */
define('DB_USER', $service['credentials']['username']);

/** MySQL database password */
define('DB_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['hostname']);

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
define('AUTH_KEY',         ';0,=wg!6Me0i5Y!vPxBu<>}Fw&xYV@l!3}f$n.A-RDy{c#AU>%:|Z^qYAK|]nM}(');
define('SECURE_AUTH_KEY',  '_e,M7aPAA%YF>-c^XW#53:FAu?p07V|wK$1%`n ^W]2B`-d`l$?dWbz,+-<d],ZV');
define('LOGGED_IN_KEY',    'J0RG5G-Umdv&uSZ!8x0sQ+.a-1k=mKj<ss~<Mxs{q I _%Nnv}xGrPdG/jCQ*nP=');
define('NONCE_KEY',        '8T-i[/%g[0HcJd1_+XP[MW=-3ge:G+YJ}.e3Joo]v>QdgY Xqi1Ucv]+^I+UO~go');
define('AUTH_SALT',        '[Mw+~.fw(7we}Z#Z$56%+G[+njL[ch(;GF%]R%F-T!7Aa=5(j?-KD{.*.*hs(@Y5');
define('SECURE_AUTH_SALT', 'v`Sb-~+c<so9>5Jy?Kc1N@E,[_H^]<gBT~VdK-Gl<T1LPP*#+wW8^2hRU=_^Cz9j');
define('LOGGED_IN_SALT',   'V@bLo-cnlhB?@=r*3Jfkaa EN0?w-|c;u/*|4|1%:}]5$Ni?|50R8u-s^x,_{GGT');
define('NONCE_SALT',       'B:)hkrl8{@|T]3y0>_IeJ{]y*d[3r`aaa|#@-Trx/*jTr=mx-l32$m:+4c|5rdA+');

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
