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
define( 'DB_NAME', 'wp-demo' );

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
define( 'AUTH_KEY',         'yTe7)1t`hz/d3 K{I<a<9ye[k%S.hZLzs25)Y,{#<xYg)nc7f}c*BU`(jEb?!Dz&' );
define( 'SECURE_AUTH_KEY',  '/3li#V,f$T_F^m<Ki^BB,G?+m>!vs045,,cp_n-jAOa#NQ/z/ydRk^pa7%%}1d0h' );
define( 'LOGGED_IN_KEY',    '97C{n^WBwOZgN-:#Nv!]8:V#N7xvLj{3ItG2Pt(f>W_vg8V*+zlh7^UY]fA|ft3)' );
define( 'NONCE_KEY',        '2g HG,`XA<eq%DYg$93-on%.oJ@9$`$750!(oq*2?u?S]!b$p}cW4=)+n++tKHXx' );
define( 'AUTH_SALT',        ';*)avQwfbO6T|`&G^0K}:Thtr<Ft9/FF1[MgHbi![?lX2-Z|esX;6g[c X]?U2aJ' );
define( 'SECURE_AUTH_SALT', 'y6f2xvw(G(6w;>Bll(?Ym-h;V>Sv@=bpwn Qi~<N(qE)(RCw7oxS4)J6t}xW+]RU' );
define( 'LOGGED_IN_SALT',   '!wFVy`PE;)?MF65DnpEkK]uEr_<YWSVT7K6/Uc8Sko/yjGb$0b&Fj3sRRBw@mgi`' );
define( 'NONCE_SALT',       'L%]Rug)4,|tQb3pi,hju$~DCfv>.,Fn9g|flk?fprMROX4tG;tLd:Uf2)S|[KZ,%' );

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
