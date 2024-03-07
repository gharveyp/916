<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress' );
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
define( 'AUTH_KEY',         'Ij-O9>sQ&nMsMy+?,1HwB<_7%i sk?!rLP CJVd%UgZB}6QrZx|fio3M64u6L`^E' );
define( 'SECURE_AUTH_KEY',  ';K(k@qf~<&U.g{k`&+%*p;G:hG-Sr*)Re=Ej GKF,M*lO.*+9 p>H!SIG[(5/ytz' );
define( 'LOGGED_IN_KEY',    '(n#^GrP3gxycg^GHYD)6(an=rWckU-Tfa4EJV[x3XAf[n9SxRu;5JRDP!d-3:=v ' );
define( 'NONCE_KEY',        'e4L9}TF<M<xf*YJ]bBt9F}&T]i4kj,0cq[09(G$XU3J<o/[M{),kjLMTlfh4w74s' );
define( 'AUTH_SALT',        'g%WO1Ss=AGy|_i DLWF]Gk`%[nr4zqi7@7lu4iap hUb1gEAq^.#{n,7(cr3|nlg' );
define( 'SECURE_AUTH_SALT', 'KODF=& wMZ;>2jhv>^9R9OPf.6/m&n%o,g<0?PX:RHv2LQR?f!{b/9 v-0xL)a(l' );
define( 'LOGGED_IN_SALT',   'd$k_j E0ss.6BmuMQ#DV5%P5k67F8FHDmyz1mm0[:-}qRBzMbVGtM27!hss$Exq-' );
define( 'NONCE_SALT',       'CmuLe7`J)uQs59b#z=~SeOBhC<;#}/Ou.x|Mp%n)26ypj9?>-:.]9v;&(|rcy3]p' );
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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