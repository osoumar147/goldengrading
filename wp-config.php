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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'goldengrading' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6jH7AkDHK4u7onHUY293OtMmQLh7QyP5yeS6oHFPQ7dWjIyFkUkDmAVWuyJKR0uM' );
define( 'SECURE_AUTH_KEY',  'uFeXrJA65XLLP3i9K3p95FxLzluhlTGpdltomsobvQO4ZHnMCy9XHLsTfrLwOU3a' );
define( 'LOGGED_IN_KEY',    'nUXCx9cUtHljaYVLQ9gWPZiCsCqB9MdqSbBVBeQu8xxqAFiRXLVcyMiPQXhR8n3R' );
define( 'NONCE_KEY',        'pjoCBM3NaITPm1IvdgUBlGZKazgQbF54AtK4PHgpK1TFgsBxZcWOYBAxGES0QrXH' );
define( 'AUTH_SALT',        'wcQQSmoi1ID9RHd8VCcmh1ssoVsOBbWSycvIfZfGnyNDcywzPcUQ8wVieEkOCH3q' );
define( 'SECURE_AUTH_SALT', 'YnIL9pcUngio5z4X932PG4OIhEryyItWDNjxBFaa3FUiiidO4GmDn4aBfXZnhaYq' );
define( 'LOGGED_IN_SALT',   'zHi3oHcz27UD9x4WBuC9Pt7f14kdMglDMO8VX44gIzCPtRiEXq4NcpQHuqJTmgQA' );
define( 'NONCE_SALT',       'eHzrrhTELgj5JWv0YKkbgEzv4JN2UdyMLNlm6jkAnbnuuW8IJR3URuTueLJYONvZ' );

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
