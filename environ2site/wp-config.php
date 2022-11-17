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
define('DB_NAME', 'epiz_32976826_w383');

/** Database username */
define('DB_USER', '32976826_1');

/** Database password */
define('DB_PASSWORD', 'f6p[70-21S');

/** Database hostname */
define('DB_HOST', 'sql302.byetcluster.com');

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
define( 'AUTH_KEY',         'qpmjyybql24tq4sph9hdiduf21ocqeui9koq8am7e5btteyppxstrcfhvl8gbzfq' );
define( 'SECURE_AUTH_KEY',  'casfusanvzbtlknsvxtqfjhj78ti4rxkicje3key4d5gdaempty5z3nyy3wazj7o' );
define( 'LOGGED_IN_KEY',    'qo2xtxv0x02eu2lazldgl741lhhovdopvjfbkgheauf3oc56epdui9jubwgcauey' );
define( 'NONCE_KEY',        'd7ueoyitkfytdjdldeiihgoy7laq4buoe71hi2zs3yedcqvlc9w39qsmdojqvmy1' );
define( 'AUTH_SALT',        'phsocafbij9ntem5dolshxf64eggceajwjtp5zknu30cybmmkfiv47xqfx1m5wuz' );
define( 'SECURE_AUTH_SALT', 'lgjzwpgmlrp8sa8p7c5inqhflmhx3g4tkj1ol9kp7u7vyq4vtrrdg0hpkge3mzcm' );
define( 'LOGGED_IN_SALT',   '28vmimxci3zr1lbnudiyilzhr30fvngfocderv01tryijj0choyvhtimdj1qqer6' );
define( 'NONCE_SALT',       'ppgn6csnotdy7hoj9rwtcfi9wyebf4ftn7gmfe7siu1ebqfyex8yqzbbpwnjsyj7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptn_';

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
