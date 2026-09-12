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
define('DB_NAME', 'a-wor-70v-u-153928');

/** MySQL database username */
define('DB_USER', 'a-wor-70v-u-153928');

/** MySQL database password */
define('DB_PASSWORD', 'UmHJqk4--');

/** MySQL hostname */
define('DB_HOST', 'mysql3.clusterdb.net');

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
define('AUTH_KEY',         'JjwmAfehHAUR7IlU5L5gKpJ((yyURvnh6k9tfbrsnaFf0XqRf1Hq=VGuzsxHuAtw');
define('SECURE_AUTH_KEY',  '9wH6xG1V-t7Tf2kxV0)unBHkA-r7/-r3UlKrx6JTA0hFuYgKi0qwe(mqdoZfAzoD');
define('LOGGED_IN_KEY',    'XAkN0kQ_V-#zrF=BNek^MWudFwr3v6yV=-=yRB=VePxziPYodT3P=oh_Ch+_8X5l');
define('NONCE_KEY',        'Jsxg5RzN5WaR6FhRxPsl3S=MhCi+)k8bKFfuN34u#xFqSLpLVKg4eX!p6jAGQZjI');
define('AUTH_SALT',        'bXb1GyukrxoTUi_d=bBRwkDBj1q+nfHc)!U6#D=q_I!XEIU2BU4Rj1z6NAA-bUIk');
define('SECURE_AUTH_SALT', 'Zo62BWMCQ2RvmaMa/eA5oy3yJnZ/)P!sQ-Kec+pZWdr^AfsZ0^iSm^ndVSWZuHVG');
define('LOGGED_IN_SALT',   'sFV!BW8TF7uz(8JgWOEU0CVQ!Zg!kEXB+jcCvJGJJGM^OXs!XcoQY7okrzvbRcJ)');
define('NONCE_SALT',       'JYcu#zwb(ynljZOSdt/Wv-fBWT+BrKAgfJ5q3Qiaj2)L230iWXQdw_Li!fbBcVLK');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

