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
define( 'DB_NAME', 'sanjib' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S@njib@1000' );

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
define( 'AUTH_KEY',         'yy41)^dPp%6yADM/4L*&u_xa{R8V1?jlpg{68RWx&m`DrXie]uZbPOON#8_+IU([' );
define( 'SECURE_AUTH_KEY',  'Tl5Lo?M`<97B1|u#.c8i0<F4<a~>[Hnw$qe}rV _7NN=g*@%Wj-m/*)4vasi@gyi' );
define( 'LOGGED_IN_KEY',    '|~Qw5`I4H6/6jC3jMnGNO<,[>bsk=8]+w:@=hDO/hm!{MpOPqyOjnX)A-9mHeD>9' );
define( 'NONCE_KEY',        '&0*E?<DaoO~S_%4/KWMg sc-DMD =owXrUR|pl$~eKkyl9JgB#]1={a2Jf:mHDYD' );
define( 'AUTH_SALT',        'm^({_x~W5qOT_qw?rQ}#x(tcm}^|hTBahu<3wLve3vs(D0W3S9aC2tSL_w9y>MCG' );
define( 'SECURE_AUTH_SALT', '5&/4<TRE!|D~bT=~QLxg[QNbU]n(u[#O,jzs~xXc{3]1@}Rg+VKt{6cX8pF@B=vz' );
define( 'LOGGED_IN_SALT',   'cR,. ,8BX`=:Dbkpqxva1nBdhTpI=C7;(X0wX10aBe+fTE#P(In4rL7;XyHu/Uh{' );
define( 'NONCE_SALT',       '76G1SK&&@htMWglg/rrT$:hmtP.,(&Ei5|gKNHGm?7QQUC/-U(ME$5H$SJC${mIY' );

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

