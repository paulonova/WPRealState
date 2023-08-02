<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'hlcgeNssIt6BwVMYGJUGWlYALJMYhJq73AjgBE6XKBHGVZMhShwUdCU6qT5u9esMXFJbXrXApThv1W1eWvhUKQ==');
define('SECURE_AUTH_KEY',  'r2ST8P134kKVARbqNFgS9zjKDB5RYvVRUD478D/ae3i70f+weTBlPqti8rJJCLOUffxcMLpnzqg2Okd9re/ndQ==');
define('LOGGED_IN_KEY',    '5gH3YO8Ccpfhpi/8+Xi2Z8zG1xShucp1c1HB6Rvk1AfhOfbn3/7ua5J9E661caR6Hz1+HCaMwDpnQ3SGNms2Cg==');
define('NONCE_KEY',        'TTpLfveiyApcZoHeaVY7m7+V+8JB/JI0XJ2khHqSqu0Kv04Y6lI5Le6vuVZXBIH6AeQw8sxbFNLMu4znz56FrQ==');
define('AUTH_SALT',        'i03R4Hdczvgaxf6Gg2d6tg7SGYccrHByiMZ6g3aDbb51Tl+HZT8cNKsfslwJlDm8gMLvSYk4FmRoBS71oVq5EA==');
define('SECURE_AUTH_SALT', 'SnqKtUxkRQ5LZfeC43JQD7N2H+o68GIsSmch9921/NGdkgqtcmcQfRMbPE+61kYlJlxRTX2YEGkGeFz3FTyORQ==');
define('LOGGED_IN_SALT',   'nJe7/fyXko0C5XeW4hcTDR+L6eM61xe5cR09ZeBOJ/mHT6G2YYg1DvoFjlpuek/sDfECzMZTm2vzlXezs7Dqqw==');
define('NONCE_SALT',       'DdaefZtV5H+Sju6uh2D0QoalC1BFMu4NwCje4EVe6yd34X0xYLs4YhY/T2pXXGjrZqqnQoVT7Q8qQmBknffOxg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
