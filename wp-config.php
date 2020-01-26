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
define( 'DB_NAME', 'doctorsconnectdb' );

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
define( 'AUTH_KEY',          'L?Lg!GUN+h1{meuoHyQH6D}MK0Gj&0o]J?Y)q3{@kb`gd+c22x/M7#@.*Wu{UlAz' );
define( 'SECURE_AUTH_KEY',   'Vli)`1Kq$mb?5.7~i}8Zvic]Br{72Aw3)}8=+S[-nlwAY^V^^=%C%UnFm3Uh2FxO' );
define( 'LOGGED_IN_KEY',     'LdR,$7oAjiyd+.R_/][bnlGiF(UKvbgRcu~{h6LmBG)>J@$z3_.D1,T|}&gR5@|(' );
define( 'NONCE_KEY',         'Ngj(j$* t>a2=47$0CtSft=G oN:C>V-W}oW[[, 0GWf2*=3w@TO6lU{%elxb**3' );
define( 'AUTH_SALT',         'i=sdieWbvpy6Rw>? n5)lrm-f!.E`Spl~#&)lvS}#te.F]XjoY]q~>JD=;GU2`i7' );
define( 'SECURE_AUTH_SALT',  ']}uyfrDes w-HbTN60`t>[%>vemPVO`;_rgY*=Rvo^Rp+r&jdvOomQpmDP~(+Tr?' );
define( 'LOGGED_IN_SALT',    ':u*;Og6#/j-vq]>-Q <{,mdQP)J?=?x9Eg~gaJ]sSu*+b6[-QfviF=ewB.c_)BYX' );
define( 'NONCE_SALT',        'JcWWHk(6$^^sr3t~^uE!,3*YWSg{9K~GUZ]D,#>TKb1g^@.x1]oW8`fo:1LL]HNH' );
define( 'WP_CACHE_KEY_SALT', 'aMjCSg8{N4NTeHvx~|?7_E+Z?!fcn{Z>L|L;jcrJjnl3|mS?ZPVHhm.ERj/RK eI' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );




define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'doctorsconnect.test' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
