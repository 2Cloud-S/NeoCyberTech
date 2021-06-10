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
define( 'DB_NAME', 'neocybertech_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '&)k(b>h{.{^9Pg9Euui$..T_5&.$>TV$8:N4a^*T7ORC8*^W~k;t[H3^#?k=pK=e' );
define( 'SECURE_AUTH_KEY',  'xRvfS^!Q6Il[or:hp`6=!XaAlzC=VFU~m U 9Ek&ey,%aRwU%749<)q`;AwWn~E7' );
define( 'LOGGED_IN_KEY',    '84RL4*(P+:60,oC:]=Jh,dEAo_w|}AQer39~l]` |ynz.9yzm%KZz+x?dhiE>b+}' );
define( 'NONCE_KEY',        'xWh81=Esf2#w,F)g^=-vWuL/E25#hOM@bwah;hyQ,ySk/lG126%UePrz36tbX:E#' );
define( 'AUTH_SALT',        '>Wqk0{NnYkcB#%R`1>vuLXDT?!3#3R2&]oLu6DYyUbzlR|G]W0q&6YNNGxq8+I&C' );
define( 'SECURE_AUTH_SALT', 'n`pC#e{rmsER^{]Jg7N`1WsbM<x9Ypin%G+ewTK+X!:ak6LMDq;7?ET(qrkZ&u F' );
define( 'LOGGED_IN_SALT',   'rY#5~*ePc&%wa)f-&Ky{6n._Nw15le9_zuoC=oAp=cB>lN@#[:n-W0ETUxl8i~H.' );
define( 'NONCE_SALT',       'D^$.3hQ0Rq?`6.-=?B^6g,m[RX9Y^&2ualqLzj;_ 8j<or(@CRm6*ICG U9o[XAr' );

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
