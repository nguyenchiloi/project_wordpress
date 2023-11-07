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
define( 'DB_NAME', 'wordpressv6.3.2' );

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
define( 'AUTH_KEY',         'Q0U*47<e.}IpO!W~2e_|:-e;q/Z#IKqUd7*Lj 6~/||>;&T<;m?Tig-}YfMP#R8y' );
define( 'SECURE_AUTH_KEY',  'L,0|<rGQ~9iT&B |!4,<fgKKZU&6FI4c|_uLn/.kx4~q1]+9-I.TZW,0B?7;Rdqs' );
define( 'LOGGED_IN_KEY',    'jqd:LOkL}2Hg;u v#3;xKoF/(M_`tyTWz?DErVc L|8x9CoAyJ.+PNb.m,_4gbKp' );
define( 'NONCE_KEY',        '0:[dFv5[S13^mo~$Sn<57Oka!7tJlNB+/DKC-d~(Y:|1^:`wX(Vgm>o:@-IW;zDf' );
define( 'AUTH_SALT',        'D;O/w|t(#k$S>PHE;%[V)s1F$96_tv$Mq/<u3:V#kRK0^^Hv:]Y n~o;=cWlhz49' );
define( 'SECURE_AUTH_SALT', 'sr7rK~b*l)Au:QYda~HbyWUP8+b|$V/=aZ22{l_F;e%w+P)uM@2r1I@RUq-r|qcf' );
define( 'LOGGED_IN_SALT',   'c$38G-{hqdEYoF?SSD6B3rz(f9>VWgN~|{V~3)G(%Sbat9G_sP%`H_-%a|o2KEKx' );
define( 'NONCE_SALT',       '+W-Om+=]+}g{D.D)Z+7$ymO_p2O >++&[A[M@mrdPNrW*0TiNZz0p61^NoVqXi<l' );

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
