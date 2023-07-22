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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nutrition' );

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
define( 'AUTH_KEY',         '}23UH2]JwakVE~:BU5G@c5H89|/9@p!lv!0&8;8>LlTL2/d!/b;$IQS;7GB>|sZU' );
define( 'SECURE_AUTH_KEY',  'j@9 -TV3-Ig`$~d<;|+Vv/UL=@7i:|P7_l/K=m,F9$n,c6+Cl]3I)Tq1?OX-W2at' );
define( 'LOGGED_IN_KEY',    'fWW$4a8%;)2:x#N!Xt!^SrU?7W0+`+0d6}ch!lJ63!.q.w!hB3FRG?$VK;jdIi=N' );
define( 'NONCE_KEY',        '?&BN|M>^|3R@LD0QkGoK{WfUYNMo.)577U0JkWE[kwM|Iz:P#do%!QjHw-25$kSQ' );
define( 'AUTH_SALT',        '$K:0*y&oZtXF:fQ9#j,(a-bB{4@vtc]bi[F~q+C{lnF.d`d,F5ecqvp.yZd0eZ)z' );
define( 'SECURE_AUTH_SALT', '4F5jmlF`{k6=mlP8c^,+QHj@X`:r,1}A;(>z?B}9MwRQklAfVZ<lv(Y&Z+-Rj)+Q' );
define( 'LOGGED_IN_SALT',   'HkUvMtnY+vG|EX~gw]}cyRj:W,l<#~|mdh&{JeDiB+30V9r<{b#!rYCm70*8x|wQ' );
define( 'NONCE_SALT',       '8qZ4p2sAXcCL`sE%Blq<vp(?1)%Rs)dVev2V)tvRc<|TD$.;Be]k)@{IM1HXkrWd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mu_';

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
