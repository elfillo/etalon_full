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
define( 'DB_NAME', 'etalon');

/** MySQL database username */
define( 'DB_USER', 'etalon_admin');

/** MySQL database password */
define( 'DB_PASSWORD', '}P%BAwQ6K$PR');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7e2238ee84853c98dac60b36050eb411f70a23a2');
define( 'SECURE_AUTH_KEY',  'f838fd1c3efbfa11fa9e86dcf1a88f43898e955e');
define( 'LOGGED_IN_KEY',    '3483ae389c3e21ba58ba7b452a7f1378d9bfa6f1');
define( 'NONCE_KEY',        '7bff1daaef83210e25ff8156020a873d16ebe61a');
define( 'AUTH_SALT',        '452da244ee02bdb775990ccb92cb71e3c501d0f7');
define( 'SECURE_AUTH_SALT', '64629740d6021f74bc667a402185a419db3b1701');
define( 'LOGGED_IN_SALT',   '9c21f9c88a35378f6da7cbf7151858581187f56b');
define( 'NONCE_SALT',       '5416be2c6018a51bdcef89734f9683ca1e766168');

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

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
