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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6jpBsSWoy`^gV~3X]f$HI/uA:cH@y1d r`u:J,l1 H-p|z!0y~(8@^9LqmcD&/Px' );
define( 'SECURE_AUTH_KEY',  '6aGLD@Lpe|A[~Zx+#KZ)L8.6m_:szD_zRvTFrF?KqT3zWGyTR_-/[r~m=:E:sLPb' );
define( 'LOGGED_IN_KEY',    'Qz3@h[!U?aoCgZkIz&`{B:_Ci)]O]^E=sx`WIPBFhn<5+XsKl@Vz:)2:TGERL&9)' );
define( 'NONCE_KEY',        'b|fFKwz`n&o~]o%kyk&s_4tY;[A=Z%zcGK~j<}SJadf$#6EWAkxKK}Rgx25I}PfH' );
define( 'AUTH_SALT',        '%:t6R#pa(eiOjz</aZ*E Noi(5nr!4EtXk/;APxK7S(I>@XzwRE^gkFS{c_OZZ<0' );
define( 'SECURE_AUTH_SALT', 'IfLI_Jh:rNq/BVEa|Un>S5S_FCTw`(lnHS{U_-([Jt3<{/^huP>Q@YLG9*^Qv;<>' );
define( 'LOGGED_IN_SALT',   'EL^0KE*ig3*i5Knj#)PL30yA-*0b@&[2 Xo<*ma-[2wi2s]lGFM<$mHGR6(KxYa,' );
define( 'NONCE_SALT',       '#Yf[|Kc/r7$AoVubRnETHjy6sSfcds=%cyE08S8ck@zVSp]0N+Cj,Q(|[FIlq,X(' );

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
