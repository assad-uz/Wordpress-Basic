<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-db' );

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
define( 'AUTH_KEY',         'jG/0x<<_u{B{!=,N[I-auAES)rVpn<gf&95+HFk6dqD+Ze4%mtJio*J}io:W.dWa' );
define( 'SECURE_AUTH_KEY',  '@jHg}P,G271UMAhw)nPzxZM_Fy?,-G1?eN8BhN%F3gTmSdEB|[4C[_<nvO({r`k;' );
define( 'LOGGED_IN_KEY',    '=_B/atNi&`au/>rNl-.o#l8t2&~|bQsh6KSs|]koaR0 c{lVVQr!:%Cm0R=<LFe#' );
define( 'NONCE_KEY',        'fEuaZM6~7K1ZIAT7:nEUzn,{=Ce3b_K+#A0C>JqF*Jr-_#wzy.8gt&Y)(8Q()x-K' );
define( 'AUTH_SALT',        'Q0P!H&dFtm68|OkasLsN,-D&$jXs+;3DhKQ*>q7cj{M6?~ZtGan7ZPw~E=-4=:.-' );
define( 'SECURE_AUTH_SALT', '9Z/Zk7@yz]<sCnE2GN=c|d]aZ2ucg0f#t1g>bB4f|n+[l*16qxwZ1NBBF|95U*n-' );
define( 'LOGGED_IN_SALT',   '*R?5G=QD;F1gi}B_SD|)xJURI]qm2QR1&F>/>(SLc,Q<y3lf98b*6}78e$M2b0rR' );
define( 'NONCE_SALT',       'RHIhh}mKjAzP;J@f+z-7FR*`iH0$8A]l.ylyW*QI`{9,J]7FO3#s<HF</8k4z`Ve' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
