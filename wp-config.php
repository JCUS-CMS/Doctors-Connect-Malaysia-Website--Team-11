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
define( 'AUTH_KEY',          'x6$O=0<S5nHZ&iemOx%WVQDCOYURwktbN}7n_!DD]B%#tvV6&/+ssdr7<FY`a%_w' );
define( 'SECURE_AUTH_KEY',   'T~M~#S*,jVjq#``z?P`czkw*>3sK -@K=Z.t!;iP(Rfao4gtQTrf|y>v[Vj#;P,4' );
define( 'LOGGED_IN_KEY',     '6;:+BvYZ%(rTr?H/m?<0$?e^+gL%(|@CwUVf6q^Cr=>!,)C!l/4RCt5%eh0r/sIE' );
define( 'NONCE_KEY',         'uY$(R2;ff4+5P B_~|cGm)x]by-7[#OwB`SOulW6<@s$(@NbPS:.GTz 1:2BET>V' );
define( 'AUTH_SALT',         '?uaC%9YunI:W^q-:0}Q}gkK;<8jZ-9/!_h>2+kR8636o~}bU5?luj[+YC6jc8V2G' );
define( 'SECURE_AUTH_SALT',  ';BX`v$~BLRy{cE.*4!_[%QNZteJt1f] lVmba:R6M1!uOj/{b;H.-hFN2}u)Op_7' );
define( 'LOGGED_IN_SALT',    'uu*$(R,m2Oq`8h@c{5w-YK`h4h;u-/DSj45N~AO?Po|?2]#V+}zf<J:vUb-DO{b#' );
define( 'NONCE_SALT',        'OPV;7/#cs0h.[IOuY~&2/8;@0Q`A=s> bN*Oi!Gd63-Yfcs21~wfB?Qx1Tz$(#dL' );
define( 'WP_CACHE_KEY_SALT', 'WN`^IOzb}n%L$XXf1)(XHpj?J$@,;&Um9u22>PIO:*Lo/yR&qBMG9ZBsZZ+f0~E!' );

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
