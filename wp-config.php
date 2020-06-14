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
define( 'DB_NAME', 'wp_multitec' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '8BHdp<H~wg~[WR!BH0am)qJ7o_%//I&H/<&boY;bNIaJpvehh0)Pq]EBqcdu,D=q' );
define( 'SECURE_AUTH_KEY',  'g@]:#$C5.1WcgZ!/3J]JU]X^zDvny@BR58%zhDtfN}Zs#C#b=&o*tCY[>7r_3S>P' );
define( 'LOGGED_IN_KEY',    '3Yt}#r,9=::?_h1<LT&Z,]d!Y12^8{k0vSBo<Sm.h/{BGk@fp:vi+@Jy6NxE7s;G' );
define( 'NONCE_KEY',        'k:W0*Rpt<L.X=scuVh4npl~C4;{.tXbV[`uxMGJ0Y/LYG|ikodAlNt*GNx4?x|qh' );
define( 'AUTH_SALT',        'OHfQMF[`C#KsE5{@t}A}[Nt&moLGD#Q>e+io0N>0BMz<`scu&B(Yv%&{hXFOIZ]I' );
define( 'SECURE_AUTH_SALT', ',GMx#Jr!D3R_;I*W42 = /N~iLzVv7:a%KL(8_H]:%2q&U)qYuqQgS9=`pJx&4$W' );
define( 'LOGGED_IN_SALT',   '_SK$:O`Ekkq`7,YF?C-7zaw0]r9wJ3Pg a5w(XnbtNV}Ce.L6=PO#6c{[:]@w53O' );
define( 'NONCE_SALT',       'zR4[BxZ*s;Dj~<H:L,GWaRax&j^}VgH&R<c4g_;ayVF|($.16B$#4#U0m.7J*1%1' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
