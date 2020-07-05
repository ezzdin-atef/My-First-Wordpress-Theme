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
define( 'AUTH_KEY',         'gMU/}Au?Ex|T]-7w-qB^ze@HVFa4{,{AxEA1~ULw+gbIs=m&MX^{Gv->D|H6Vpan' );
define( 'SECURE_AUTH_KEY',  ':@s-HvUWi)wOCk23=?55-/<,0O9T+@c+2LRQU|J/WS/`4?%KWMr#yyD$3=z:9[=Y' );
define( 'LOGGED_IN_KEY',    'i!6,OX6#qA4GND[s4a)}k/8s}!/7wK>b22s%+IPc`3^/v_bCGio/LZO8W:)*v|uy' );
define( 'NONCE_KEY',        'aP{wk=2f/<T8`mYlm(n(=D7W8[L5#h7~V!IReiPHL.0.@NoL>6X7)pV9@K/yjkp@' );
define( 'AUTH_SALT',        'tobZIL]7xYwJ5+)9$C(ppF(Ra{0)AtFN?,nH{~Dno^7s5lk(tC`Zys#lg6Q8RwP6' );
define( 'SECURE_AUTH_SALT', '/3`kwzCM/MI?0F`F$]|#afiI.~?1[~@(Eso,K~=1oBw?er)p/C/YNbHpQ6QoEkI}' );
define( 'LOGGED_IN_SALT',   'l01W7A8DvL|_;xtCVU1!1$E^7)VG|UzCJ1 _PMwZoH)1*/`8H@VG>@;>>8Oc:j<n' );
define( 'NONCE_SALT',       'l{NK=RWpB0Gj|gE@Y/LF-SuD$q`r|Inl_k;[_{ropME7s8vYei%uTrZxhcc?E J5' );

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
