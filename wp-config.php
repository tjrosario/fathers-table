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
define( 'DB_NAME', 'wp_fathers_table' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tomtomtom' );

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
define( 'AUTH_KEY',         'NJ>_IbCElw@f_)K50<7?)_]kPge_Q=ENWBqtb.g>&eil8|:Sbvuov:,I@6l?tt%D' );
define( 'SECURE_AUTH_KEY',  'Q )U>IG{Q038 ([Lr< LBvf%L7T4*g)IZJa<5y){WM/Y#{(2<Z-m.miE+-@dLw;Z' );
define( 'LOGGED_IN_KEY',    'EMb#scYxM4x{X7a;h=UH(`{Dpwwk]pK,v~t0z|sdiiM5slz#lr9A{P>*{ c(V6:@' );
define( 'NONCE_KEY',        ']W[qC*64czc/{RvH4v>*p$?~{O*.rIf13EX`C>/Hr},;/q,].ic2@i[,,v&sidr9' );
define( 'AUTH_SALT',        ']mc+~<MpW*`!,C62V9<,=zhU2Q`p9vWxAD+!_|@de($W/]eOj2Z%u!kM%@+t#O*<' );
define( 'SECURE_AUTH_SALT', '_M8,~gh2%u[+vJU6eI` ,R&v=2dF=B2hkZP#.?k@T4#eGDf]s:s>WK64h8uB(lGx' );
define( 'LOGGED_IN_SALT',   '.VAZFTI}6T 5nNz,&K>6S%**zt1>bv]k =gd6CBA&7Gjz[]P,1QQ53vpCic?c[;w' );
define( 'NONCE_SALT',       '[N$4&R?&Eq+C}G1Fn]]Ad$:l#p,}G qSxWOd.{Npj^rjT2j+8.Mt6v~ai2:ULTDR' );

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

define('FS_METHOD','direct');
