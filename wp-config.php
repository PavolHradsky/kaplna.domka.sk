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
define( 'DB_NAME', 'kaplna' );

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
define( 'AUTH_KEY',         'vkLe(b%#t/p?u})#WsB1sQxg!f%lEdiG2VOSlPUs16F{o(Mf=K@wl.<o/js_S@Lw' );
define( 'SECURE_AUTH_KEY',  '6z]6qMxCa uC(5VQuyCAVJ^tHC![K>Ck:pu7A|iT@]Ro=KX/5Mcj$a$O7PtAh9e}' );
define( 'LOGGED_IN_KEY',    '^x3fgH;)gt-h7e2YuIa|uAse,Us_!7_D+t9LBu~$U?x`y?tG(b:|FVF}Jr@)K(?W' );
define( 'NONCE_KEY',        '+LKzH2/>iR:+o5gM l-#s2^?#@$[L,)UJ_!e0e97V~:$/1D;w(K@j]XxLT~Zd=d{' );
define( 'AUTH_SALT',        'zLv_i)JR-6)g1d,pojQP5FtXfB~dEYjMMy(+ORYT)w1>w+V*x<C)~+}0UW:Dli$L' );
define( 'SECURE_AUTH_SALT', 'YhA;RUB]?U!n{!:bFA*2o`bJ=^J/CcGe@/:e_{sPI]`86D/#AHaeEL}l_)SyNe=B' );
define( 'LOGGED_IN_SALT',   's/~4/nO;uLNAYyzY!>7([ru?{Y+<dbA}rdbC0JAN9-Z=~ b1]F:FZ6X exv,6FKw' );
define( 'NONCE_SALT',       'p@7+4+*Je?q/S5u?xu6*gp+&#}Qm/I<*ps8_a!,y<)V!-6L1Ic(hQ!; hd/4lD8U' );

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

define( 'WP_HOME', 'https://kaplna.domka.local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
