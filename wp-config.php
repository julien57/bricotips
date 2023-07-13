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
define( 'DB_NAME', 'wordpress_oc' );

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
define( 'AUTH_KEY',         'h$4D,r=DI7fvO/J^%><I,1U:9mNmD=32QVr/UEbn3}3_0h7VBKT=~$6Hja=dW+3g' );
define( 'SECURE_AUTH_KEY',  '@oTUXbqMqm#*#uI4aT;9LJbP)^FK-f@(ch-F_hDq~^LzFKS 2R*,@Pic=8/QHqG2' );
define( 'LOGGED_IN_KEY',    'R!4DxxIO[&jh[F=chDSO)wD5fV[rsT]^h:4j$+A${iA,%p}@krx[)[0N7[Kh64cq' );
define( 'NONCE_KEY',        'nQ2PHHLY5S#W8RDf+d=9~Q05D)D48L3H*|mi8$,@?l:0FI:_>#4jo0$m9S-nlwG1' );
define( 'AUTH_SALT',        'O*A]=XtSEnVYgCUB$>Cd@[Q%y5=2^@9dv~k5l*<ZYv7CeM9S.w(BC>Ko;@EOND#K' );
define( 'SECURE_AUTH_SALT', 'x3G=(2PaH]:bKV^B]rhHqGQ8Zh)(Al eaS:QeSp-m[rN%S[J!Q3%uD~dAJ>KhHum' );
define( 'LOGGED_IN_SALT',   'IZ(^qzlf]vDw5. :,3@ceK)6:iGa6FB!2DX5QH!H%Im@Gs3UI>4s)couc.5m7ykk' );
define( 'NONCE_SALT',       '43%CAY*`]>O6lR>]krp7(l6{[8Z9+){1F<#uy[=tdqAfN[;*jySEA(Q6~;JSBj|V' );

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
