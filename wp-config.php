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
define( 'DB_NAME', 'villasottodb' );

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
define( 'AUTH_KEY',         'wHgi,=??N#7v]?k3|Z-:}2G9?+5,dr Q&5oNtY)_u&%lI|nptF^CcoE!3WYK[V,:' );
define( 'SECURE_AUTH_KEY',  'Od{=.{x)1UbJ7OIqK_<F^,!Q3DmX.G3Pb%8F//k~G%>N2]hgC?3]&mRW4Jy;hv<Q' );
define( 'LOGGED_IN_KEY',    'N-v4^bc8aj#Nf;1Ud}u`]7=MZ8sSfI+9/?js+6It8{TIrlPfx|!ze~i/D0}V-?K!' );
define( 'NONCE_KEY',        'JTw]z,@22$<5hi7|`I}rHczbS-1(eQCc.ywKEV%X$&XJ}q|SYNK_M`a;>x@gpM8n' );
define( 'AUTH_SALT',        '#HwId|2hKuXD07JxSUsnN||/TV4AvToYsRIk]}Eh4CdJcQq:sQ;cY>+niXi[26zZ' );
define( 'SECURE_AUTH_SALT', 'A.-qok&;O1.gj~|m2pf0KOI  %wm!$a`0Hc^Z6br9/FQ1~havg6D:AS0I~sn[Y^7' );
define( 'LOGGED_IN_SALT',   '^3r7Q6{lQS7S9}s9+Fz!{{Mt(:p7>&cIiA3rmH01drBc)K.3coFQ2F-dB0Wl$&[/' );
define( 'NONCE_SALT',       'n>v)]9.M5i5H#a<C<1CKWzD:Y)ag1wlg?bg3w.A2c39IDcU!oi?p$/Y1=_gTALxM' );

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
