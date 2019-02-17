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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'i2IIJN0ph3dTz0zpD9XipJ/9B1AkuQVVy60P5wb+BCOF3Y+u4mNKlpTeCuVG/QvOnwb8N4X7L8EBzXAODd5cXA==');
define('SECURE_AUTH_KEY',  'zDy1XpVcR+7upTtS/KEzPh4Co3u4pknwQhmy2ypBCEaeSdRcukxE4haz4Y6qbGZmfr1euYFz2rtieDjWzoaKqg==');
define('LOGGED_IN_KEY',    'HpOg34tZtlswf7XlhczQghd3+IGVG+mX5mLnikyNzzrWMbHMRiNbhUilGz/4FLTz5i9rxlParMJepHXOZW/JFw==');
define('NONCE_KEY',        'utCvIyYOV4T5g3J4vQdW2WUgNEJ6+P4RNM+r/36TpOjujR1iaEo/TMPXsYcXQTdAWW2d1SCfHM9e+gqU86Depw==');
define('AUTH_SALT',        'cphB6Dirs66rreqYi8st3kEOW4RRRRDYGnor41QG7ia2hbFSe1M5hG/5ddYjYwedAqhlUxwXyMD8kWhrAUbWMg==');
define('SECURE_AUTH_SALT', 'RUwG3CW1RTaPRIAm+EaYCupG4nIpTd8VSEjbRTDMiBB0qXxpDZIAvFyWEdhsB96fxSg9lXBNDz7Nsd6ahcHSKA==');
define('LOGGED_IN_SALT',   '+a7pII81/Ywe/buy/4ZkKRSb98GngO93Rjcjc+oIQjltsoAPoAS9bzdFU/uRdD/wiIq30oOrOU+F+yobSk9y1g==');
define('NONCE_SALT',       'YbMab/q+VSzIy8aAbMiqwSjvYxXdPDsIOhog3/BdMN1W6G0t0D1NK2SgsaVVojA+GyG/JM2U0qpO7K/2Bpaf1w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
