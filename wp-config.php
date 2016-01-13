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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '[:?o,+pMFVr[/MV5?/le.xqCi^yF6-M9+fGno7UdC: BjA3[V0+HX%%`!gZ51m~P');
define('SECURE_AUTH_KEY',  '0doM|Lb1w~C jx&]QFU~n.8}0e1JnpSG-*~Q:(0uoA)jQ!VT2_+@4F-7&/vSKXoR');
define('LOGGED_IN_KEY',    'M33+nzv^c3smMKDX%C[bQo//pf/w(^(y9%HjEw.-S:v`*q+w_AqQb`GAEWc2H|Y+');
define('NONCE_KEY',        'NVpIA4/|!%cUpE>I_NkEB,ge_]/nTaqun<&K46,Rwz<3x0Ay:!,oy-TEYGxoeS,/');
define('AUTH_SALT',        '&mBm~2DSvIYNLY$E9ax2*)Nc*MoSS#6VfY{$2p|g%#f%pKRhk1P1;_CNIUNI-M#[');
define('SECURE_AUTH_SALT', '*u n 0]P-|U3 @jcFl%gXz0}A{?dL|+lrvFHBB;R}oC+fqehz~XI8[@?+-=48&=o');
define('LOGGED_IN_SALT',   'qV4w.T~%BDU8)T<(-rL=eYi<T2|HUY- &?gL)Dv(Fm?Arttq>>8]P}k)}BXPHB|4');
define('NONCE_SALT',       'dKR(%lWA4n#G:cwLy6=2vg0g!x5Z01%;bDj(?f,ecxLU^nkI&LW`$S<(g,EGEyIi');

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
