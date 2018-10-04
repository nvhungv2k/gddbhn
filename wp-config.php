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
define('DB_NAME', 'giaoducdacbiethanoi');

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
define('AUTH_KEY',         'Zf_1dtB3-Vla?jhgVfDpko[5n<V39po!u3w{._)TfG<ppn_cp-t+H=U2{3W{op)p');
define('SECURE_AUTH_KEY',  'k($$5W8+/40G_W]sL[#gD~dTsk?`ktg]^`Ov$)Qn*HJQB!%IOz*Kq5xC-&vYWxH|');
define('LOGGED_IN_KEY',    '$dP@*:+R:g(dJ-COMwz1rXB>COdV/o)ILUsRaDM3LrHh!p=6d=BKzs2^O$Fb$P!Y');
define('NONCE_KEY',        'HM&;Os@@rwG&!:?!2BgZPD=jb27G%C}WKy`-DB>=m1b+LbyV$cax(rKM2TH/AD]b');
define('AUTH_SALT',        'L?^0D{zASg^baz~ptr`R2p1vhcCs+aEE&po`}@bDh/[ew HB=lX7jO,&PAyP<oCF');
define('SECURE_AUTH_SALT', '6hV;V`@mC2x?qpM^Y{rfu6CtgYY-cZ4]s&E a1{D+gcU4_<85E3E}|J/Ro^y,R/3');
define('LOGGED_IN_SALT',   'UK!D}Rcd?: hV#4i@yUsS?te7VUfjB3Md{%gk:||dz1l}Y&[KrX~_SaG)hkr2*TS');
define('NONCE_SALT',       '-L;;CTGJFET: %C S,jW1cV{OuXz]TJ+FYRo*1UfV[G:evEX;>g-XdgRc>5<xQDi');

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

