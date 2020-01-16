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
define( 'DB_NAME', 'doctorsconnect' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'malaysia_boleh' );

/** MySQL hostname */
define( 'DB_HOST', 'a2team11-stagingdb.co3jt0kipxzh.ap-southeast-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '<J(W=:F @Z#u#RF0)Q}b&S:QZEG(z=4Yu~9Jb`nI4jjOrq RRV@[to?wgqQLGjvK' );
define( 'SECURE_AUTH_KEY',   'FvPN>P:g!:iE4wI^{!p;dXew;|}Hdtz[R52FG^QG=5I3dVzRu=Wkh,u,3E|AU*ev' );
define( 'LOGGED_IN_KEY',     'nqHgw9a8p`U+s}h847;:u!@.Hd]%^Y`uQL1Fmj?Wchz]0R9~}Rfe/r)OZiBmd`/T' );
define( 'NONCE_KEY',         'MFboC[($}x}{loTH~{AFaIa*0ks^d2XoK=/5*A([N8}kPo132/?}tXoB$cLx`&+W' );
define( 'AUTH_SALT',         '(h3cvbl-%2BBn.AA$$;fbtR?Ko&&SbGitq%SXfL}Vd7`4-4+2s((+lahv/70B4:Z' );
define( 'SECURE_AUTH_SALT',  'V|U|r_ZuND[|>7#*LZ.!ja_-CvS*2u$``7$rf]H95%k0j|a#$0C>k|,T:IR4<$,/' );
define( 'LOGGED_IN_SALT',    '8e[Q`3!L#pDBoc{qozNYp8]-fxdY0?sYyM.Om/S7[G^qT,G_Zr$hJaR/FHbAV<sK' );
define( 'NONCE_SALT',        '9<E1K;K@e- cVIS<y_mx/O.](#B@7`8k;0jDc$dTr5Q=v0k]DvcB|%LJ=.D_)D?I' );
define( 'WP_CACHE_KEY_SALT', '9t2j=ICqS2ijlL>IFI=_?5]g@-^%HNCU,[<f-jxm0~ydx4Kr~a]g@#eOm*ZB|zl/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
