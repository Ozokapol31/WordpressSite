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
define( 'DB_NAME', 'yenidata_db' );

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
define( 'AUTH_KEY',         'ohx$TY#x~w;eN;>?2vV,Iv_^hyB6S;(LK_g#ljuf}HfLm|}Bq+<jLQ38qjBLKbPh' );
define( 'SECURE_AUTH_KEY',  'u%}8[P)sE]d6p`c.:Zp:$~^>fp2!$_fd!+Vx)ES$(d zO`>}<Tce0=7 .ELu9=g0' );
define( 'LOGGED_IN_KEY',    '@ebY0i,PJW+WBK>($z]RKS%kg3sXVQ>p61tsJnJ7~!mF+HIxR//*5X[(V%ru?kQ.' );
define( 'NONCE_KEY',        'NVD&:iBW?^2eFX1I6 5Q5o5EAmf~^ff m`}d^hAkN@kg7 .wv(h#4X,cW4<B#<{>' );
define( 'AUTH_SALT',        '/=h1Pu-kBbs9hH HJiwB8svqEy(9#t>P9BTlmex7&0Ox(&(p  ZEJ18/pbx{ C8v' );
define( 'SECURE_AUTH_SALT', 'J@2s(h:[-@*z*?3|n6<GyOe#+Gt~UZR>p.m4-vM|zp.Dpo=UO{?xVrV8o:WYL1=!' );
define( 'LOGGED_IN_SALT',   'Y~nTP|.kpAoD<JRs[!<8ctBSZ] *5Ys{ynnsaWD>gn]s;X6kv/$M6(^cm,}~L&JE' );
define( 'NONCE_SALT',       '~k)?_E+b{y6KN-XApWk>|n!y`7EbP@Tho8_>/Li>]d?yRm/7z1N8^O`?}r9$?Cs3' );

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
