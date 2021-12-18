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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'dl5mOlgTIWSY27NPprIzC6b8SYNo4WvkJi95wRSaDtEBnWSlHK4IiCBhI4nMXyzM/uFokX8evc/7VlakkQabgA==');
define('SECURE_AUTH_KEY',  'yF8eX30itzFVPZWF92ntDhH6PjeL4iJkEkuoePFtyfm6suHPJGhX1c9ZneelUajYYxAZW4mePsZMnvDJQ+vX0g==');
define('LOGGED_IN_KEY',    'wWCvBoHRKeWgUbOxQQOw+PErSx4iubo7z6TWySOXduHJ1rTlKDQdKZv8gmt1cABlbAXVQvA1jvwp6SyM01GGrQ==');
define('NONCE_KEY',        'nSPr3YWWyAntWwt9D7IHR3jipa8qR/d6uQaZof3hcR2Ikj8wiuKanyZcNzJO8Pq51kCsBezBv5SzKYxl4dlTQw==');
define('AUTH_SALT',        'yzVm5AE3wbMAGIIIkxOT3ZUPqWORtEF3PbDRJWuJ0s1AQ5XXQjO/B51M7FxtUtfJFvd0VlBrkfK4IcktXBzebQ==');
define('SECURE_AUTH_SALT', 'myP6Pvj/eO36B3gmtfLysgWaSWV6b4D2p38KBru+auQGAR7aX5y7KhmB7Ui+vHgBzAsLbEdRCjEu/jdHP4O6/w==');
define('LOGGED_IN_SALT',   'Fe/EULdDvLgS7rzE73KmuQu6R8aan7zqGW+QyAmOo3IpyjVW1I0SDgVgzhJsF+6Sp47IkyAf8f8IibXNF8XjWA==');
define('NONCE_SALT',       'TgZBQ8/cQf6mFidur6GCq5P5dfZQYOygLj8uXx2UA8SC2weaz1uOjY1xwBbL2btFzvWsvo3azDbx5uicHsQaOg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
