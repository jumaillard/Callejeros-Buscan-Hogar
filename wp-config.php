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
define( 'DB_NAME', 'fundacioncbh' );

/** Database username */
define( 'DB_USER', 'fundacioncbh' );

/** Database password */
define( 'DB_PASSWORD', 'fundacioncbh' );

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
define( 'AUTH_KEY',         'fo9#Z<OMIRo}m%FL6sSTgE)ZeN7!9DDr*(c+P>8Ls=_uT0M-r9mB1g:>/s`5[t0Q' );
define( 'SECURE_AUTH_KEY',  'y0iG^-iXsBcnCS+.Hb5mDi/5k_hFYcxT{M[nK!E3GJ^o?PVIb%{[VM?6Ictq7)xy' );
define( 'LOGGED_IN_KEY',    '4gqp9`ey>>(n{(HVsU+[t9vsd2h6km[=TJ6Tl83{Jgh+S3xjV@UT=IUfK${sR47&' );
define( 'NONCE_KEY',        '`HaYr`6ak`F1ZPdA+HTdf2PFhhSMmPq4)l%sa&O;dZDg@_=X]8W?rL&MvZz^K]>A' );
define( 'AUTH_SALT',        '|#o/0NmmCc7nrd)#f_%9Nv<^2Q&b^>XbP>r=yQZ @} $zrG|c@-yJ<9mRU$})pDw' );
define( 'SECURE_AUTH_SALT', '?<&V^&XX4aaej+{fT,js}%@coRC2aCO_LCf16I7/CvfwHhCY+q1SMPyndp;orE5a' );
define( 'LOGGED_IN_SALT',   '|~~X,H~Z(x?nWqeY[.3RWlWt#jm+H5Mj+E`r)ijT&iz=[5N>c_Y`G8/!HBQ:%r`u' );
define( 'NONCE_SALT',       '5.Bw+MGlm<yF`/3m(N vL:_* ,Wdh3G w>@h,d^vZ1)2*eSUE)eB&cRo[:4f+;Ru' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fcbh';

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
