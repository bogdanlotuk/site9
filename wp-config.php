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
define( 'DB_NAME', 'z67845i3_wp' );

/** MySQL database username */
define( 'DB_USER', 'z67845i3_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q9696969q' );

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
define( 'AUTH_KEY',         'z#ij,3Wh.3!_d^w&gqJwJbf? s^nn#|xT)ct3w|8wCP[p.zxKoo%*UiAfdrs{}WN' );
define( 'SECURE_AUTH_KEY',  '$AozGeuC>}1K hncqrY9]tAq(0BMiYJxI2+p*RJoG||tzRMQ(pr2gAid/kLq2R@]' );
define( 'LOGGED_IN_KEY',    ',WrpFP~flNMpJ8aHidZh/C)FZ-@P3vl66^*&9?&|=alqI02T<$<ez=;oRV7 0Ga ' );
define( 'NONCE_KEY',        'LX3A{S9-}sp<%v, <P$pU1o1coUP,+QQVIT?<>G#3XKNGTRP+LE|*33A?n`?!`7g' );
define( 'AUTH_SALT',        'p}:#`7)2uS8O<)!z3gtp j}a(]G>!2pGUHP]/RK_5~+LJjma.;VT:#.|2;f p/ka' );
define( 'SECURE_AUTH_SALT', 'U6RfXb}dTTNyJ8Nv_oNH1*=QPgGP,,*>%4`j$@-m`%{P)HRf|WYwP3k^GP+PdH]j' );
define( 'LOGGED_IN_SALT',   'zJZ^p`tic*OQMy$u2FEo&WXXKvEo+j^|/a(RNDj&s}V~% %ChRa^[WPfgo!)4y]O' );
define( 'NONCE_SALT',       'hD5G:*BO}N`/=Z%Z3)|T>CF_:(`{PX[jOqu)MlG%sCN)vF%GhnSuOR4-x[^rgfg`' );

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
