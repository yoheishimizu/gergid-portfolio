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
define('AUTH_KEY',         'oqAyVkmte4Y0tFtdKKzweF+I8HxZGYhLWPzhpDJHJBb2wgOLYh6CE5KwBieCrJy89LpjLjtO0yZUL22CUtIzLA==');
define('SECURE_AUTH_KEY',  'SBua+b8FRSKg8KthJDbR/9wyl59w/oRSA97wei8YM1zjITnsqr7RW6/t+WfsWohh83+4uBdXLzLrOe+SP8tVpg==');
define('LOGGED_IN_KEY',    'I3fIyIz1jOeVXGu0ceAkC6gOdKO7UC1YC8tgPjPzOnmGF0XGY37CoM04eJNPcQJpHfa+FXzVE0qgKa2TKlRjNg==');
define('NONCE_KEY',        '377KcO0p1eyB55gmA9uZtwUOlRcIzFmVFC8O/ndbMOQd1WkwYh8rsUzIpy4xSwthTxOA6Udb3qhHTAzi/0bWjw==');
define('AUTH_SALT',        '43fjekZxetNLDUbhzPnYZuWh4gFMlnuHMwpkZi0WxmcF6Ru3uyI6qI+5gsYlKbMNKO59HTkYlU2P8Wy5jB76Qw==');
define('SECURE_AUTH_SALT', 'DZ0XyoKqmBpQHuCyiENSM8RnWX6GMDeLO9InIVY5tstmlvWQHp0uCuEZapMkNffrLhi7XclGOYFwQQe+etuQBw==');
define('LOGGED_IN_SALT',   '6ycb3TjK5sugdMsLqAyOiPPRDwPCJIS9ITN3X0UAnf3XBtYhZcYPTLE4uBJilEPwmBpNJzVZypjnDzL+fqFJ0A==');
define('NONCE_SALT',       'i609U1LbcG7fEh/t8xxhy7lBKhHth8E3wdd5GE7NpaZXcj+1/XQ/goTArVDjvsExXDjORavnpczeEatziUhXcQ==');

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
