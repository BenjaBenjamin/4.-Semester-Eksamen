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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yihu_dkeksamen' );

/** MySQL database username */
define( 'DB_USER', 'yihu_dkeksamen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'julemanden222' );

/** MySQL hostname */
define( 'DB_HOST', 'yihu.dk.mysql' );

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
define( 'AUTH_KEY',         '(R)xxa#J3DVQmub7e/ax8=*{x8a:p4KN{WY;dX54zEJWb7ftx?Dpoo3g<^XgjqB@' );
define( 'SECURE_AUTH_KEY',  'r@df}JYP*zEq-pCF*FTu/]}.wgZe+&G&uFswqs=K v4tUb$(2dl=/!.^Jz[?Mejk' );
define( 'LOGGED_IN_KEY',    'Q0uS5#q98ux]~Av~LqXTzAcNp{sqK_`WRq~9C7<v<Pm5h!EiOYmMZp$~Sj!g6@>M' );
define( 'NONCE_KEY',        ':=TyrT5Ukx@~1<[2,$9>so7[s/h:F4Jz/AQ2514(Jxod$ux>A>uo|7)>iT[!3|yn' );
define( 'AUTH_SALT',        'gp>^7^+C.|IL;!Gfy];&4t)P$&cJ#]ad1a=BZ2P!,y.=ZH1DcOM0?-F}jFX Jj9x' );
define( 'SECURE_AUTH_SALT', 'xq8ZBMoTI]7>Rhm3,dO>$f(wVRL)tj*YI4nZ*^#G?|N>h8Wh|I5[{Fc`*y}F|x {' );
define( 'LOGGED_IN_SALT',   '(GPyU?9X|=`MKDn^cKW;g:ijJ)6I3^_NU|_^py73CkhsM6(A*u$]o^~fP/[5j[D4' );
define( 'NONCE_SALT',       'VW*7p]yuQqYoriKzF>Jl5KDr5;x~uWn4;>LwpV05`DD7,Uo:O{_s0qHqI7V&+gnC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eksamen';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
