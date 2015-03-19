<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'alexlearnstocode');

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
define('AUTH_KEY',         '`wHta!30 hm(~:9XVsbD,&6K8}z_nk}1+r }bK#B%A(y;9$z3Jd7~Dhb|0@*dYA>');
define('SECURE_AUTH_KEY',  'Wl_!i4pQ|h1w=+c|e;PhyQ;2nf<tb_LuIcDAH`%^-F+.AH1aT2P[7sipm-LJH^h{');
define('LOGGED_IN_KEY',    '%iYkz=|YaHqpaU^{~o>s|5=`q/8SI7=gvt0FW:c9t%:Q[+XSD8A8A>;n@Aci,`bU');
define('NONCE_KEY',        'bCk6r,&5[Vykfnk7_%Ry?rS!Od1hO!lJ/->2mY-BqzCJKoEgjF-843!VLN<?h||k');
define('AUTH_SALT',        'cz!?HdOqc[(W{WZaK`J=/+?)40:u<2Brwv|`zlW}[.g[>z7+GZ&;QdFUh?A+`@od');
define('SECURE_AUTH_SALT', '&5<glOUU0?wDZlQ!f+9*_YYbVR~L2[}6Q*7X)1kSl>*|bU[~Fn[d}4-xG9[8j,Z^');
define('LOGGED_IN_SALT',   '_An+-#Mz%2KfL{N9dh+~thndu=Z<HwLNT.6HvdbSd<f)ZW$zQq+<LT 5+>eHvX-n');
define('NONCE_SALT',       'x^`C5FGYjx|Sl|0WMwYAZN&h]ljq<P;P1b@{g[H$`){}0N9:p;:b~9wMcK<]+Jp0');

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
