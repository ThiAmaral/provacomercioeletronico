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
define( 'DB_NAME', 'aroma_lar' );

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
define( 'AUTH_KEY',         'cu-b|RTyyEj#O9|@c76/{+|9S[j@lLm40# 7_!V{C=|)d-3BC,BL_gtkh8:]3dXc' );
define( 'SECURE_AUTH_KEY',  'EYL= utsXzi]L@{|SPDJ#e7Fhz>!]XDn3X:Oo?I,)zn,K.Z&$y-hLiVu /HG$gBo' );
define( 'LOGGED_IN_KEY',    'DujZ}C{l3Rq;q=AT0.CDb].>.>b]KR+^;V+WG99O,3:jmH5s[&HYZmeQ2MM$1o@n' );
define( 'NONCE_KEY',        '[.l7*.bd4Ne!$w;gk{`&S;X_jO]@CGsN|u5E&Ab[50w*7xtAHdk#wx!Yt6xs?#(.' );
define( 'AUTH_SALT',        '},)-*{dz,5Qoiq5hvI7XbpUc4:S?WwBZpo8VAe+N52>13R-4V;84!m{0]!@<HkD+' );
define( 'SECURE_AUTH_SALT', '{AZESzLvgl=;8I7z]HxK/}n_TA{[~d%Ay0L2[^[J=un7^[,Z$>cS+#ALphv:>R:@' );
define( 'LOGGED_IN_SALT',   '>A$akzdk!Cy2tPyc}nB}dR-.((](Vq^RBS1!4ad9wxv,!ZIb,mW?3t7OF24!WXzz' );
define( 'NONCE_SALT',       'nl+$_g,E[AkuMPdV(V%{QBf$,O+AAm<xmVWvb^ZpDJ.Dk=ecJm3g)MXJa_fJx;J_' );

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
