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
define('DB_NAME', 'a3726727_pblog');

/** MySQL database username */
define('DB_USER', 'a3726727_wp');

/** MySQL database password */
define('DB_PASSWORD', 'DBadmin01');

/** MySQL hostname */
define('DB_HOST', 'mysql17.000webhost.com');

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
define('AUTH_KEY',         'p<+PT9D|f)(*h]NR;KH@R!5$Om}!FwosnZ/YY?1TVN0(3 AB7i3(A6~Ss{d[Dn`e');
define('SECURE_AUTH_KEY',  'C-W2vF1CLME%bb&#9Zo%{9+n/;~V08IU&I#K`_bu*-)DjvW>-Q_SEq$Y^9cN?ep+');
define('LOGGED_IN_KEY',    '}R,_BNX4!|8J,x{@F|KD_3]-Uo0VeR[P0nlwMJkUMmRzuATv6b|#zFfgeZ&]#YiH');
define('NONCE_KEY',        'X(C*73&<248#&:SZekA_IhoX0N [^?@KA3bGX6h;@U+F-CUsb$|fHfBx6a&.-`22');
define('AUTH_SALT',        'WS8+g:4b>sp8,Wpw)bVj7lXBV5-wT}5YP!iEBPQZYZ}_`|4,01o!.E%0+Si?_mb#');
define('SECURE_AUTH_SALT', 'PA]TcQO5=:&-6xiCIs|g%S-7]nUk`]`GV|E<XU?bgd2l^1goI7<@V5kLfg01AY$j');
define('LOGGED_IN_SALT',   '5I.^0{Vi>2LCfag&k]W#4TuN<6[Z-C8>G`l1;`.ERn3k/d_6Br8CX$~f=m-w-cp{');
define('NONCE_SALT',       ']SvK?mz<hp[x/ym;I<BijKtJqm/CKc)@sF-8m-(<`.s|-f2D>PrkY{R)+K3l|yoj');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
