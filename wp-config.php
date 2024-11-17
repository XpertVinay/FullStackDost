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
define( 'DB_NAME', 'fsd' );

/** Database username */
define( 'DB_USER', 'innovikaAI' );

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
define( 'AUTH_KEY',         ':YP_k|tVc!(,Q&Yj_(D&;nh]B,lR+vR!/D{)P6!a-j?2`S1D%_$V9Vf+4K<o?N(6' );
define( 'SECURE_AUTH_KEY',  'G(&Ym$G{`FsUDO<>-/)ZLI5<YVx%6P;KnZ&G+s:BQ?q.utC~Jbg&/i02].b+WT5u' );
define( 'LOGGED_IN_KEY',    'J,,8T%pRi%;8)OFlTatW[oE8E?&sp{p/S16zR}=fR~!$?}t*DKrr^cmICd~@6[pz' );
define( 'NONCE_KEY',        'C>p%zqP}xF+R|AD33aO/7q.p&) 1O3Wa+{w?t?mpkbBP4?CbD1 &RwXo$JQOe(en' );
define( 'AUTH_SALT',        ',N>hD]|q|0SkOs&in-YFslkjxc,=w ?be1n|ecZiplqdo |i) =~;ts.x>FS~Q>>' );
define( 'SECURE_AUTH_SALT', '&^aG_dV(o3Is3G3HjF+f^eR#76-%@a]mf4d:1?8`WLuLcccv~&vVa{A B|ysN))F' );
define( 'LOGGED_IN_SALT',   'vI`x.Crc/QU.]|&h@WqB2I|.&#VsoEP7!EMo?:PU,In_iQ|?jxAi(<&!z1{xlu_.' );
define( 'NONCE_SALT',       'HDaAb*:TOQ1wa5A/bM.&8:i4u3<Jh,CKo}VRtEu#o%>z|t#==Nn+XEe$7 UW(`4O' );

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
