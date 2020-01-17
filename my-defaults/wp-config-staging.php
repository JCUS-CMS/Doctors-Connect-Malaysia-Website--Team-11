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
define( 'DB_NAME', 'vishalm4_wpstg' );

/** MySQL database username */
define( 'DB_USER', 'vishalm4_wpstg');

/** MySQL database password */
define( 'DB_PASSWORD', 'vishal117257' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f2vzqha9tkwbiahjhlnhdjgcruoifcqizassby0ne23fuyrbv5tibsczt1gn5cmi' );
define( 'SECURE_AUTH_KEY',  'gqxfx9xclqggyxs77q6t0ikyjdpfwxoh4hcshefidva0sej7ka2yshtzywlf2adm' );
define( 'LOGGED_IN_KEY',    'rmwyr3mcwxzurklt6betlfsuhv70kygv0w5v44y2ardbipoublfgnf0pjynql8jp' );
define( 'NONCE_KEY',        'fesjgqxdoi7qioxlzrxyvtxxvrnxl1xjmwmktcv8mhdbmlgdplcemk9jnybur89n' );
define( 'AUTH_SALT',        '6eeurvjk8tx4gn7gyvck4nvdz14kuoowfj8hbwbazx2qq4gzbog6v7meg4kjnvnk' );
define( 'SECURE_AUTH_SALT', 'rha5dfg3j4zv0hmcxvz9fwrw2uirme5vhq8jfz8yuuecnvsttzdi82u3lhcywo6q' );
define( 'LOGGED_IN_SALT',   'nlb7inpmc06meeeuvcrgaktpgi6zbbegyxkprl5qyslqwldpjnj3eg6dd4tituez' );
define( 'NONCE_SALT',       'jhlio637htuhxacpiih41abyo1zrsolgwl7za5uqkaoacw5jvpwhnbehu1sizmxw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

//error_log("Siteurl is ".WP_SITEURL);
