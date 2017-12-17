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
define('DB_NAME', 'document');

/** MySQL database username */
define('DB_USER', 'document');

/** MySQL database password */
define('DB_PASSWORD', 'tianangyy');

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
define('AUTH_KEY',         'p%<JL#;6B 7*drr}}O#I eh%.Z54O6REClCxl $1Hi(TBytQb[3x!<h?5Fb2zv].');
define('SECURE_AUTH_KEY',  'alCV|^>53B>QaZ9?45%]wfgn+?_(N8_T_a+Fw5d(*^w8b=k@-sPhN_uWD3!rZtx]');
define('LOGGED_IN_KEY',    'gw~Xa}MHuC-cXk+;WyAh;1)t],ka/93sD]];uUSWDgah3{+R1Lz3p^i~Y0MS:|~*');
define('NONCE_KEY',        '1PaO[{UeY`i(|^e0ahFlm^PyLGV(,u^j0=;u^hD#&d6$#8roZ7z*fYEv%?rKx#MH');
define('AUTH_SALT',        ':T7V{)D16:;(N6c-5aJ#)0_/QC({]n/I[CAt%y/?.?M;_|:siv6t.?mN$mta,[uA');
define('SECURE_AUTH_SALT', '<EZK=nR;VcgE&5Pj*wwi`;hd$*$&h}h_y%.|SLH2-)R|+pqKc^y$Vp7F?G^#;+o8');
define('LOGGED_IN_SALT',   ';n3-|Ws$.67C58>:<6I4(3G+]BIqDWf>)CYt~q|H<_U]fiGuo<3zR0T;ky|Ht2LV');
define('NONCE_SALT',       '}}0w`qx~xNS)guDSgR3s*Id[!mvFC+BANeq21,OX+Z<Vg{V}ez-zadw[Q;zjIJ!T');

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
