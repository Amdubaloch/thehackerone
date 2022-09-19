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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9XHe}hV0X)SzOMYa*r<?ky /}e)kP#VCy9WpKK~:RenVZ)r>r3P[CE3iWe#3nV+3' );
define( 'SECURE_AUTH_KEY',  '=1<,UZ(79W/vruAINszd|!x=IXg^MJ>IG,>xnr&6JjfDpnLkq1j`apsIwdWQ-Na7' );
define( 'LOGGED_IN_KEY',    '4j%&@G8Q6Tr6Zh U}|cts8:d[.+[QxbSL/x|&wEsM17:9WkXEm6J(_wJ]sP/_.A:' );
define( 'NONCE_KEY',        '{Qs{0V?EU9uC-O@V+S?5UgOgv_DmsfRw.}Bby`0x~&L:lZ7EmmuYO6b +_e}#!]Q' );
define( 'AUTH_SALT',        '/~jk@:bU7?6tC{Y@6([((!@X/ 809%*1i9k$@`?AqJQ`OG`DTfxljTw]D8)k-xan' );
define( 'SECURE_AUTH_SALT', '#F>?G]f~_DVTPvlAH<[6iJ9@oWQ/GekBxB 3]/E{FPv)yzJl}Cku(EE<H=c_7/Ry' );
define( 'LOGGED_IN_SALT',   'oAGl.oZnbn<?twJ<o!%Ao-BH42M@y3MOu<f)z*;4[{[o56Y,^UsvK,<B<Lt:1AWL' );
define( 'NONCE_SALT',       'ixo /YB1Xij)q}~yA;CS8!(Vg5nYQ*&;G5|ON/nC}Ac%|Fatnmc9UOtGfCwKmH#f' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
