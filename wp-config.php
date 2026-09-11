<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-nguyenhuuchuc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'y6j38K1fMmqGozy1jVt1rUWyc2tV0BteAJWl899xdZWGl8OOQVPfZ2VJMvskddIE' );
define( 'SECURE_AUTH_KEY',  'NElNHNNnHY1b38ydzRRKUQfv4PQCRsVkxNXx01nHCEV6VQ9OqM9zgzVTLIVhRWeA' );
define( 'LOGGED_IN_KEY',    'MyEY7GQQcksUvVHqdxPxcMQBAwYGWG4DcZlA2m5U1tKVbssSvPf7eepeMsqV1TGt' );
define( 'NONCE_KEY',        'IOg2HgdSAn9rrhmoYoHAcXgZNXwB8wPt3ckB6PmRozwBBw1GIb5HnawRjlGZLol8' );
define( 'AUTH_SALT',        'JzUhvM8y9oYLGiJe5tdKDMrWuOqeEXCv8SVbm8fbMJR1hUcRJ6PHgbHyzxOpB5aD' );
define( 'SECURE_AUTH_SALT', 'AaQbj5Nap8R86eWWUwY5ldGCmYqZVn5T88vaEIaUa8BySs1q4KmkAnqtCyQTZ942' );
define( 'LOGGED_IN_SALT',   'RyeZiMrwooQcuZbMCRVbX2AqoUzg6rcJvGJS5xBbz97wSWczzrj0Li81QbVEjAYz' );
define( 'NONCE_SALT',       '1CfxGTI303gUOTu7wzEPZj8OLiBdrGEEei9vVAfZYKwdenTdlKF4iL3767wfT0lC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
