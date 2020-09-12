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
define( 'DB_NAME', 'monikabyrtusova_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'monikabyrtusova_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kxhdpeHgtDfE' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql106.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'y(2Q%x#1(zNv]}zW].s?&DAd,h;@$|iSBgJ8&jXIhe|gNxlCt7C?;% bf]#=]6!F');
define('SECURE_AUTH_KEY',  '%Eom+*1jC,AAMPG{|fy%+HL9[%~-w4+sU-Zn#M<(MOu>CCI^|A9@Mlu>,U3|Fli%');
define('LOGGED_IN_KEY',    '.R&cvgy7nKxX~-u|PQi_EpT^z5|0jdfVqh};@HgN#+u*`oAxk88[nDYw}NE.~Y0t');
define('NONCE_KEY',        'I?cTNI])#bM6P[`U7zBh:B+zV0|llS-x(J_sRd,i$X*pq}1A8F}dLV9OsLO3xVgV');
define('AUTH_SALT',        '+;gdO5RyTqH>aZCwp+E*h4ymt#v6!~,!ufe07Zksv344mQJa|0?CGocVTx+@g.DY');
define('SECURE_AUTH_SALT', 'LM+h.uLP- :00)MG9r.t;{7cd$4dyVxS|On#C%+@i.9@~a6suPf+6_QVSrjw;m$-');
define('LOGGED_IN_SALT',   '_jcxun8,XXc{F1yZ<4Xv|FB@Oh6?B;1(hdSGmNyFMCSN5{UE42;G/Ypjyv}z+]d`');
define('NONCE_SALT',       'OB$k.#hrVk~2; o//7iu!7{K^Jy-JVinD<R-%bk(|hF~q2^si+x[~{u@ FDFF_9%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'personalbranding_';

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
