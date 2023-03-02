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
define( 'DB_NAME', 'dnddemo_strategic_wp_db' );

/** Database username */
define( 'DB_USER', 'dnddemo_strategic_user_new' );

/** Database password */
define( 'DB_PASSWORD', 'o*!ILsB-mz-m' );

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
define( 'AUTH_KEY',         'AU#6Qz*{YIMe] 2GdygE*n|%jR2Uk]p>RDn<+Hww8]A|dR>(oGALcO|U>UW%?xYH' );
define( 'SECURE_AUTH_KEY',  '@%{|nK;+c $ 5:ZJO]`|3j@#t1J>;75 N]%.tAt_*NFpJt7a^v/g>5Xy7f(<L@l4' );
define( 'LOGGED_IN_KEY',    '?Lik{/f*KKp9}k#]_]%:8FlOMc=DlY?}[8^`tKH[:_3A40EJc?EHW-p9De/&;FQ!' );
define( 'NONCE_KEY',        ']!C9PZ[4Hcz4_X[;_ALN|7iG8RGzQK:mo0,h< nG8bJ.``lemp86T{o8{sy/#^]B' );
define( 'AUTH_SALT',        'dt^Mh+}oQIg!.qeB+v2wR8a{BR%<&1l[^)2q=vY,iwxw%):tI0^X7hWwdEN0|:JC' );
define( 'SECURE_AUTH_SALT', 'pbSoLv0QY9udtx^R.rmv+HCj!tzMN]!nFxTwUQ+w_ERKAm N}h+?HoY 9P+b$k3o' );
define( 'LOGGED_IN_SALT',   '&?6d!wQ-Lk$+YAD(O^4JQ4EQ/B*jX8l4F-7WNLMGj;-IM9vyZsdC1&L;dn6D^6fH' );
define( 'NONCE_SALT',       'U7uaq>:= gTC<|Mi@ghyN)$O02<|x@wt^.avH#]_=2L`8/jN~PO3|:=]+?ttUeF0' );
	define('WPCF7_AUTOP', false ); 
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
