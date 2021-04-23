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
define( 'DB_NAME', 'brotherhoodsoftware' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aobregonr1918' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         '{H}.HBHn1P!;P-#tU361qiBrvYyg9B9vS 9S5n4Tm>mywpD}oIPfHy1s8(F[D^+_' );
define( 'SECURE_AUTH_KEY',  'G^{C#,6-yRm$Q)T~Od)x0vL=h GQK68H,l8)e5MI,vKv*a^Ms4VbWCXfaw%@b5+f' );
define( 'LOGGED_IN_KEY',    'L_pE_^_np}D$l9;L{BV%G!;Ibq3%#=VW?kt5cFP%Hy#ut$x{</2{3B$e.UrK#zfD' );
define( 'NONCE_KEY',        '>b=wg28y-;AN++Fq;S~#D*pRiQl5Yfm7}D#r_p?.dpQJOR41Lm3K1_,uWk=yY0lm' );
define( 'AUTH_SALT',        ')g~}fpO[L=G)TG4c+,#p[2l]t[6^?`I9y1AFInI_isbmVi.~R~[>Y+C,8HpQ4KvS' );
define( 'SECURE_AUTH_SALT', '1VjJbZq_EzJC{nn;5)a}LPPVsJ; nDuGX=ZNA}@u=na~TTY{@:8G/:nxECtgN{OT' );
define( 'LOGGED_IN_SALT',   'eCexI0i?|EF@SmXnE?:(_Xa28w2,B)xba;}x7TE2PN95ghv8hrXo(%rXrT9p#z#u' );
define( 'NONCE_SALT',       '4&gu0y&$*QiSRUApP5mX}IDRNv?a.FsiVD8C`ZIU{/;rB_>o>EL}!?S.:9RbSw|Y' );

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
