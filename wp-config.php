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
define( 'DB_NAME', 'headless-portfolio-cms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U&KjY$Bp]!q&neIo}3`K-l50Tr:dlqPM6Y/d8Sz:^Yr_p=wtCLXiwJ<d$SMYYXKH' );
define( 'SECURE_AUTH_KEY',  '>@r0vPh5Um.4)BcUuW6?lMli?=Q-V0bU_7;.u*dX_)-g3c](k4zP#jn!lK&*bD1k' );
define( 'LOGGED_IN_KEY',    'Kj]%&T |F;}}LpS*=mr;RO8|<d)s;DN~ugZuMvo5y*-]^?fdWaekvEIR^+lH?YUn' );
define( 'NONCE_KEY',        ']vf3{vxIuD1^;|O`t9X:l1(Dg1%8)I&b|q$yJ2mxN:LMuXEsQR^[x>WB|L9AAj5d' );
define( 'AUTH_SALT',        '5u1C^;>+0#4eMiAh(mtV+o lxC(>d}/4>wN-{E4G |YLz1w<?@3Cp%bkD }<IDVL' );
define( 'SECURE_AUTH_SALT', 'V Nm3>,w+&xs/5ymK3B~8n^vm&@Du<`ptC5I5nuZk}}aIS:?Z`2R<.lTx+g@NHpr' );
define( 'LOGGED_IN_SALT',   ')YfIQ>5ue#_k*94=6}5k<cZ4@#>ic@<GjWe7b#Zi^$j`|i-!%T*_0UuaTcF*FXx1' );
define( 'NONCE_SALT',       'cA;@M:( upG*yZL?@G0ClJeGIEmiy:HQ9]G}:[e1lg#l>O$$Nhm&pe]Nv+pJ#Qy2' );

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
