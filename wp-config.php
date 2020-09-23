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
define( 'DB_NAME', 'sitetest02' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'HS]hpd{#>aWA`pjmq;CNMc/S^5k5H[.A[brh;pYBT# i2v!Z!(*^=9=Q*reAFjw/' );
define( 'SECURE_AUTH_KEY',  '6#O[C%`^ Yh&i5.()ack^S0MT1dGECe(l8{NQY@!1>8v6CR,HDOlsFd|Ni/{Ncrm' );
define( 'LOGGED_IN_KEY',    '5y9{w9A.oL`~F@Wim>=v{yVlF?-n?c3c~3QO#tdY5JDEwfV=-=,AkOOTIYE82LYF' );
define( 'NONCE_KEY',        '#3<C%bBb?IW3}xl&0U_/R/.!UC6y!e9B(`@b*g}bvcys{Wm1|uEvR[T);SX8ma2k' );
define( 'AUTH_SALT',        '#mEH[kKy]<M-4O2O~C;kO!tBLTUsy$??Ab:HgJE]&FKhL]vFFUv+$N1Vyr,(aZ0d' );
define( 'SECURE_AUTH_SALT', 'jyQ/{~}XgrR<rC(kyXOCM`oa=VeySogW4^ G;5>K*7AIMvK wr3I5=r{-&PjP;n9' );
define( 'LOGGED_IN_SALT',   'xQ].8IY_0T6Sg519x,*)d@-ce16GR:u}(g?O4TM|1c{^tM~oP4Bs&,BbNBovzhKU' );
define( 'NONCE_SALT',       'O<m)&bmVY>/RbZ*E[tph34j<K5Y)bRL{K-L.zl?s5 [rsR,Av`PmFB+_^+:@+GrG' );

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
