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
define('DB_NAME', 'boomerang');

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
define('AUTH_KEY',         '9DAmg#&Jd#XxXC{xV, R?5e,0{ Hf$+#Z)SsQzKG-nX;{X}r[h[4+/3j8*~haHpY');
define('SECURE_AUTH_KEY',  '@v:*,ESc9=S`3zjp]0kd^a PV3e{oFe_$3fc@S1u+q?[S#@]<VoFJ>G6JLg_m94w');
define('LOGGED_IN_KEY',    'F@7R}1x!]@Im?BESdz>#iMWR,PD_>VVMTz4C&,Jmy0Z6?O&Nf)Ls-~Rh$3ejc[w$');
define('NONCE_KEY',        'A,|SSV_XPn)EZ=H?AD7YGf3srCKBRHnD5]Qkk7u211Pbsx^p:JrUyb[r GDxS~If');
define('AUTH_SALT',        'k*$]a+KrI~pkV2G=-/Ps{c?GXv1,gc`rI^*b<6;WU_aQT#uN8Zph^LnXDrCK@|bl');
define('SECURE_AUTH_SALT', 'a7w<<Uvm<a0b@;[FJ92aid4]k{h:&<b3%291Z)<g>K2=#uz&AcVX*UMnnPq~9FQf');
define('LOGGED_IN_SALT',   'k/t<_SQ|9E%6&~.@tuKdp2%orau^m,!BC</gVmCC(?$_eX~C_#w$+JV`:dxYG^Gl');
define('NONCE_SALT',       ')9<STAb0NyA1)cf=Q~W-LOdx<S1t~m$^j0L.Ig3r)QWt1D;2,FT&Ar*+X7iXe%H9');

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

if(is_admin()) {
   add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
   define( 'FS_CHMOD_DIR', 0751 );
}

