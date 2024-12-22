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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (isset($_ENV['DATABASE'])) {
  define( 'DB_NAME', $_ENV['DATABASE'] );
}

/** Database username */
if (isset($_ENV['USERNAME'])) {
  define( 'DB_USER', $_ENV['USERNAME'] );
}

/** Database password */
if (isset($_ENV['PASSWORD'])) {
  define( 'DB_PASSWORD', $_ENV['PASSWORD'] );
}

/** Database hostname */
if (isset($_ENV['HOST'])) {
  define( 'DB_HOST', $_ENV['HOST'] );
}

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
define( 'AUTH_KEY',         'Kj9(mP#x2$vN4@cL5)hR8*wY3&zQ1' );
define( 'SECURE_AUTH_KEY',  'Ht6%kM#n7$bV2@xF9)jW4*pU5&yE8' );
define( 'LOGGED_IN_KEY',    'Gf3#dR@w5$mX8*nB6)tK2&vH9%cL4' );
define( 'NONCE_KEY',        'Ys7#pW@m4$kH2*xN9)fB5&tR6%vL8' );
define( 'AUTH_SALT',        'Jn5#hK@t8$bM4*wR2)xL7&pV3%cQ9' );
define( 'SECURE_AUTH_SALT', 'Xc6#mB@f4$vH8*tK2)nW5&yL7%pR3' );
define( 'LOGGED_IN_SALT',   'Pd9#wL@k5$tR2*mN7)bH4&xF8%cV6' );
define( 'NONCE_SALT',       'Qg4#vF@h8$mK6*pL2)tW9&yB5%nR7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = isset($_ENV['TABLE_PREFIX']) ? $_ENV['TABLE_PREFIX'] : 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );
$_SERVER['HTTPS'] = 'on';

// Disable file modification because the changes won't be persisted.
define('DISALLOW_FILE_EDIT', true );
define('DISALLOW_FILE_MODS', true );

// 添加媒体文件配置
define('UPLOADS', 'wp-content/uploads');
define('WP_CONTENT_URL', getenv('UPLOADS_URL'));

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
