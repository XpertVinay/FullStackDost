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
define( 'DB_NAME', 'FullStackDost' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Tradpe#54321$' );

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
define( 'AUTH_KEY',         '!oJ }p.jVX&)#GEm|V5s!0Ea.q<gW@A `B=wy)m$_<j?25>`?^[#[~MiVi1_#xY<' );
define( 'SECURE_AUTH_KEY',  'Z}L!SdNcKfK9EqA;-ST#({uZk-aCTM028)c;P4_%B0~Bl|,* LL(o~~H9/J-D*R4' );
define( 'LOGGED_IN_KEY',    '**UyK]wG>U3>SzLSy$lxWwCFK}Cd<94S}KpE*z.t7]t+faPs+)bv&@#hhYzip_|z' );
define( 'NONCE_KEY',        '-^bW2Lo`J!}2Qs`/ik4w{he,/Q/fH75FZ};H2zCO|AIf33.xyBZFz&Pv;M:l=n(,' );
define( 'AUTH_SALT',        '3_pG3XtY|}/sSnfYlW@Z%[Xv-*XO^U3,^l ((cq}>|TyzBW(bGU[/-?Q)~{TI/<W' );
define( 'SECURE_AUTH_SALT', 'LuT6B{0$p1[kZ$fS@wW~i0N#g82|lh+q ~3~ae&4rL34O$w_5k|?Ne@(v x#}[,P' );
define( 'LOGGED_IN_SALT',   '$I[^[neaH;HkUIf~uC9_/Qlxy~a.FF9i{A}69ZBKDtKqnQ~,d}G0d}O0!= j2;%{' );
define( 'NONCE_SALT',       'J4a09D~=Mq&/]koxB[_iBzn|TtoB;PoC[/74@l/>[QQPfwm:L146JF{TT],%>e)4' );

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
