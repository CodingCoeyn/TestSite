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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsitedb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'a4Yi_WC[=3#@$q)?Z@VKPndLx{P-W}T-Bt>p&Q]@<0$0}?vDg@j>yvJpJ9.P;Us.' );
define( 'SECURE_AUTH_KEY',  '[iWW@}Kywd9^ieh6Ri$IYAhg_nxv1Fj%}IeV]1W?zzEVzL`i?Z&jE=c@qN`RvIGU' );
define( 'LOGGED_IN_KEY',    'mQ(+gFZNFrVk4xMHLo;gbJZR|O{*a?-6i@n5[fTcJ~n $&bSp8U!S&^q`hfoqfWC' );
define( 'NONCE_KEY',        '/>DH?pnRm7of]!|Zt@O! :rRoNx.I+j9&YA/uoTt[-W<}AP.Q6HJ34W9`C~,?8pL' );
define( 'AUTH_SALT',        '{eG,A^LM4U0AD54EppT]WWI&vx8aJw790^ut+M7sr]JZ<mBsp!rZxGA2XcHRg-4Q' );
define( 'SECURE_AUTH_SALT', '.%Ls6^!V=1dZpv.X^)Er[ki2+l#dg>K-,A_7(5s-=b^t^~&OeKq.~#|KKm:yvyKk' );
define( 'LOGGED_IN_SALT',   '[`Jg@M:<.A*ht&rK?#TwdWPB~PH#H4)4`RP|+I{EJZD:THrY18-xZ<-`RC%5vV5C' );
define( 'NONCE_SALT',       'd.:Y]Ks:1d23AljcTyjcwQmHqPdsa-mhPB HInj1>F.FxVh=O[vEI~}E[hkHp#^&' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
