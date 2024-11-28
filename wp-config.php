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
define( 'DB_NAME', 'Cursos_Digitales' );

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
define( 'AUTH_KEY',         'gqEYTS7e%)7+FSHThq> QLG=aTLs~^1q*_;{23TD]jb3#C)rd:wP+&wr$DXD[Wa<' );
define( 'SECURE_AUTH_KEY',  'R[rMcZsH{l-Nv4z2rvDYH&+n;WNPT58Ts5[SHuldV&;;{aP+NOQ_zJ+a)?0kG`Hr' );
define( 'LOGGED_IN_KEY',    '?K# UeR!3kGY2I$KZR$ (|wyq?yo#0I+f%/^5Cm<G_SI!]_F^=*76Lg-L:;3yeE!' );
define( 'NONCE_KEY',        'A9Xv/}gx=/]lc|N4be>2;*w.!jX;GEq?b?U3<*rh-f&<Z%7Q`nu0g]ZgO(f9v7F,' );
define( 'AUTH_SALT',        ' ItUnM5+Y5e4c%cD1z#$G*Gev5u1`s~BQdnf#SBhQr<]G2sdl;Yqql>]a5J=Z8Uv' );
define( 'SECURE_AUTH_SALT', 'FAv&OsCMi?(k^(,eah~/Ze=7I^^XgrOTt3rX*L$.C3oO~,J#HetT4F=I;@M>TRP&' );
define( 'LOGGED_IN_SALT',   'cF$2RAlBjgu?}Cg-C7`X+Rq65hFCCB9YlfxN+7qU`o,!`bZHCI_Kn<e+usF?_]#&' );
define( 'NONCE_SALT',       'Wf$syqN/w%MoT8S`)C_-rOQTxD^5H-#H/QW/XXZMX>QV3?J~Bv_^O|?IGg#K2^1P' );

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
