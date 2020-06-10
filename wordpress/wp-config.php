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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wSR**^[HP,zLL$xZYs]@Eq7wL#wi</I@CKy*?yW5k.]M@F~M0N`:z?nQ*Ezr`Ket' );
define( 'SECURE_AUTH_KEY',  'b;/B*([jRLQKiOpNOq<+fX B:p NXFJ4OG(E8uU*,<@0c%b7b?!VacLfF&aHk{o5' );
define( 'LOGGED_IN_KEY',    'W>lL?g+E{y3Ow-Cb1/`[i=Gctw]UnOj&+MQF@_W`}:KJ60!OmfE@dO}ty d__YTa' );
define( 'NONCE_KEY',        'WI%:AKy&y +Vo- Yoo1Df,)_^TpB4Ks}/;}XdJs?/HHL=3ZWBa07552ges.]r.M}' );
define( 'AUTH_SALT',        '?0[>*Bucr*o?qX${0HA_ood.YO#vcmG|Hea>GD#jhJM5Mk!.QapP-TC(hg ;QV21' );
define( 'SECURE_AUTH_SALT', '!+)V[@dRb`%)7~S+!2L =bIP<Os}&.1jn=GiB^%kN2Zw>FpJmql{8Q7jcg<}T:Nz' );
define( 'LOGGED_IN_SALT',   'OyUlTPLEkM&0{$SV0t}B9g|8&7Qr0FvX[oO/s x/X:*~eYMUf;bn3]OX;eIOKr?=' );
define( 'NONCE_SALT',       '<A[CN%mFe>~NKwmDy~UBOb@_$Yx&C3sY_;9P)XHF)}3Q$)j.19V(AtF1r_9ty*A{' );

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
