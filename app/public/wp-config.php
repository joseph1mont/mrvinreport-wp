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
define('AUTH_KEY',         'd2rr8sNlzDKU/sh6cbIZom22wrQ4vyv3MU8tAemw6Y2/ogsU4Xw29JJuIRQr6gkafuPqDWK4vET0KuaMBfySGg==');
define('SECURE_AUTH_KEY',  'T900PPB1+YSMHhruRQfzdhyPo8BnKiko6/DHrL1Gkm87zOsKfAql/cgtLAeZ/mLnA88iRVfenOYKbycta9L+Jw==');
define('LOGGED_IN_KEY',    '12XzyCPZPzP8iRceDt5Wo3vv2h+ovCWnuUIHBXk1UfTlQRBI6jZOEuQlpe69C/94xDPJ4RDYQJBadyy9QuA1sQ==');
define('NONCE_KEY',        '3+v96f9HoFHuozNkZxy+86YRNH433dd9ljXEpfwYmzr4EVX/HXGhSleeWE1P5FjIxft2GiVoKzXMtO61f5w9kQ==');
define('AUTH_SALT',        'JpYz31YwnvjTXAH55Hd1NHEocVuYIkJ97qu+cV3ihzC47ZhfCP6/+gQv1SCBiyaSmo+6Mm91wbyQ23FCsX2xug==');
define('SECURE_AUTH_SALT', 'lh2f23GUX2nGsIaxf2nIBozdHaCqoNHns8O+iun0sPOLa1HoWId/4EM3QqCjsCKl8B9PdyMEFt7Jwx8IoRHirQ==');
define('LOGGED_IN_SALT',   'grQeklJyfUPLEsfh1WcFaNWjiNAI3Mpcv7F06gyx9AlD6K1E41FHpLwuIh09Zhb3wXRS2ZPf4Jh4j0JiDUF/fg==');
define('NONCE_SALT',       '2HyIFO/x727ifBgH3PZ6ze41tNtcZSxHHzw5+yPFRvF47y0u5kmzkUpBnozrSRVVWVRtwt8JuWXapmyXYby7nA==');

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
