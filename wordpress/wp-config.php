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
define( 'DB_NAME', 'gff-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@Kkne<j0F75xT.da>h{oU6aV8L3 |#{zF8M+<VxVd3#akUUoL sM2=MAwo--l^dT' );
define( 'SECURE_AUTH_KEY',  ']bi`,yH,Rc?VVW^~6o!;o$1U5iS;bu9uSy&-+<h1;Z^pt5j,`E7b2U5+U/ ^LQ4^' );
define( 'LOGGED_IN_KEY',    '{<K2;YbMl6Tj-U__BKcGTUhjf^VSLCIF`u{Tg?.t/gSuN3YD_Z=F9;8-a&?msEeo' );
define( 'NONCE_KEY',        'KVsKI{GeheUFe+}*2Orhd._@eOR*pLehqs#LUTo1GFG.msQ,~_~|3]zHiKAaU;oN' );
define( 'AUTH_SALT',        'D&7yD=-Di[/_n.@9ltLU}0:rWt2eJ,N bh=? #oGZJ1;x|H8)JPY]o#E;,;ZExuf' );
define( 'SECURE_AUTH_SALT', '<1nhD8:`?F{qEQN2Cu*bMVZyc,loR*7_D@4]Z>0Cx/]{VK=*%;[bGKqYUt!l8o[d' );
define( 'LOGGED_IN_SALT',   '5mlPz8S%ZqrA$1h-x4^MR>O1%xBHsI[6x,x[Y_tc<9nPhiC8LY)c0TQ#a<[bS[?w' );
define( 'NONCE_SALT',       'zO;j,)z~>wj4t3{hH>q.C jF]DH0+@Kp6CTo/6McheF0#O>e!:<eJ$+jv</=)mQa' );

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
