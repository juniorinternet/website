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
define('DB_NAME', 'juniorinternet_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'R+!/BE]7a|*l`D+uBBZq7Bh+?nz s,.|D^60xmfo3&VPH^kELEOzy!wpd7WL;/+X');
define('SECURE_AUTH_KEY',  'k7{q@*rew=YntJdhfZYuqm/tlsp2FD-|b@p<}CkNesl*S@qc-*-f-Fp#5=H4&hQ[');
define('LOGGED_IN_KEY',    '?J?{&7G55:jY0KD9F{ux3Kr}^s2Td(JPaU;511xXN>6b2V:ODU*$O<wy|<%XsV0{');
define('NONCE_KEY',        '#FsN^~}<OLiOZgxWKR-UATg+H#O-D_}-4u65]us6nnkZJpA~`?|p*~q(WBu )xRd');
define('AUTH_SALT',        'I5zlLu6i%U:_<LOyqXGS7Xe(w~$l|>mlCHJ_w7([)Ek/WM;P`{[%fIHi%sXT{:1]');
define('SECURE_AUTH_SALT', 'N%6w};Sc_GPXb?b0-ek$klEm#6UKZICX!vhH(D.KRuvB[DYE|gSmNorz=uN,[u`t');
define('LOGGED_IN_SALT',   'uH[X?FFmD6H2}hI7vA3.[0n!yzZ9O[v)$`:|X]MP+Qt]kouB;E#gWaGA->rX=jLI');
define('NONCE_SALT',       'jB41jPb3?WMk YO3=Azv`.4o+)/[*`QuY-c,$BAV]$iw;SVj>O4 !-j$F$Qd^k/m');

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
