<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thyg1899_wp506' );

/** MySQL database username */
define( 'DB_USER', 'thyg1899_wp506' );

/** MySQL database password */
define( 'DB_PASSWORD', '8pS8RA(22[' );

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
define( 'AUTH_KEY',         'wnhiruj1ir5xorm2nxywuyqanorwnkkiyl9lia5tghdu84pbdwkbx29um5bywk00' );
define( 'SECURE_AUTH_KEY',  'jzoaqbnrbccgzbxhypkf0r8cqdhtzcynwztodv9poep9huif7eh9ywvyqimp5jqb' );
define( 'LOGGED_IN_KEY',    'w5qkwu7xe3c38x6h2ldogl6qfzbvvomyrfyeqnsmgnjcprzczmxqm9tjlzooa4am' );
define( 'NONCE_KEY',        '51aaccan2raw4tirjtejfgbzj0sfvsph4tcw0hm0raqzzj8m0r1n1dtwo0vx0v3n' );
define( 'AUTH_SALT',        'beeasq3bti9ebu39ewxfmuvecdnpox253yia3gaziiitb741gtybfnzqcpdxlbok' );
define( 'SECURE_AUTH_SALT', 'bsfkatndabl7tvrfjgiinz2aclifcmacgcbphtgmwo17kl3ohwaw6powk9kd5yod' );
define( 'LOGGED_IN_SALT',   'mlj146p9pezowomchbn3td1mcdl3sakqnhwvrkiy6sieujxs3gsqgkq6iqmdkffq' );
define( 'NONCE_SALT',       '6bpkgrd4l7mb28ad4wnwxxepduhzwwhkvwe8vjk33rry6ldz0bdmwpobmq61xupy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
