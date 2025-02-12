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
define( 'DB_NAME', 'balqastadium' );

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
define( 'AUTH_KEY',         '0~1g4(zY~dp:f]gAbiqT$1?I;V{qG!4}cldPA4v4e.LdG&Qu6%?t5f^,B=mCE]r!' );
define( 'SECURE_AUTH_KEY',  'dV&%zRWWpZI!Pxz{|Eh>=Yb kFC3a|Gc.JZ^}|E2H7%sdi:h4Cc*]q7ALx/nC,s.' );
define( 'LOGGED_IN_KEY',    'sjOU@24/;(]f;:8N;Wt[GkCU B+SM},IU5 r>xe,roI;Gnc?Z_4BUpkf,p3KN;aA' );
define( 'NONCE_KEY',        'G[{P_i5)X9=s02u`Vb!z_&n#8l,6<M7DTK0G>|D?5_A9pw?4EfF.K$ei6:44`F-N' );
define( 'AUTH_SALT',        'S!qZ#aD3B%1083[Y_V.ru5FB@5@yFi#gAAD;FxR~Y}mT=$=hVCdB]jw_rK:.A2Px' );
define( 'SECURE_AUTH_SALT', 'X6`/g&r1xFvaYBvm9 68IJ8j )<E}Z<`25-]uuLtO@yU]Y+:FeZ6a#m$SOn7,3v-' );
define( 'LOGGED_IN_SALT',   '1%{R$tfQuDAQl9ETS729(9HM=RCbs|x];xv!0Pdg?K@./E2Fs1KiA{/ill,w :dS' );
define( 'NONCE_SALT',       'h.%b XyDNVx.U}_+^3eRK.Ue7YFSsn)%FwFS)g!oM`[0E-j10y0x;jg(5;7cdW9Z' );

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
