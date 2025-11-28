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
define( 'DB_NAME', 'root1' );

/** Database username */
define( 'DB_USER', 'root1' );

/** Database password */
define( 'DB_PASSWORD', 'cx20030324' );

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
define( 'AUTH_KEY',         'wbSxPM3eF^HIE6L.>QdKLYNiQ+J~;(}pdxu@}N!@DPxY:prqljVt$.LEts:5R];B' );
define( 'SECURE_AUTH_KEY',  'xx|IUO= %P4t9J[7c@:DzkM,eAtlJeckRWqwoq:h,GY+kqeZ!<DH[o:yXMQe0/|-' );
define( 'LOGGED_IN_KEY',    'N4j>m]Sl3|+Gz-o`_(]Hz%mC]]bhL4z%}Gw.|J=74.^3XBlH6Am)5lT3io%qTlex' );
define( 'NONCE_KEY',        '9ck%qkD%I`lz$js1=AW;1#@&[aXe$vYK;Dr*AhdM>LO)y2h9QAxnVyTHi(Egnf8:' );
define( 'AUTH_SALT',        '7m^`D!-I%Pyrcx+bA5WWNK?YcZ@At~w*izW_JW}?f-`4TsLg77wLj3zz:&9#k:}W' );
define( 'SECURE_AUTH_SALT', 'Wv ^bNi%#Gz]A>qC.I8<&1w9v3-sI]x9xW}re0IX8ZLb`BNLC3a&jKhIQSnnev%S' );
define( 'LOGGED_IN_SALT',   'CEOwk*p?Y&.^g-!D~*kKHJ[(qx(1?MYFOZu_q<1WBO/R?c1IM~pq65!(%_LJfOsw' );
define( 'NONCE_SALT',       'mQ5)gpddz;_lTG1f8Tl:%V32sUs!mjzr,P{!:Ora=<=pa:#K_?(` g788t6)f.Xu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
