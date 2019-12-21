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
define( 'DB_NAME', 'carnews' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '6I1/FGO?>GAQ/u!}$3`-VQ4c~jvQ>x_St^Z5|x0$lP=n:O_-aYB-gz2N6cJ~5KD+');
define('SECURE_AUTH_KEY',  'YP#e`r6v;#=;LzI8zpTh-?x*_@}Afn<4bC=]S)Yw~X=FhFIOKJn:to<d9r5eP9>D');
define('LOGGED_IN_KEY',    'WoM8(N[0MitvA78nHQV|]KLJyE*mqsr8>PWWDm!jFBw0wEwLq|U4({_fm+GP(^LZ');
define('NONCE_KEY',        'tu!6S%Wo-E+ 4iSX*c&p])[S`]$IjJO+~7,NS$}~~OrEM~n#uiB e--+s,x_wSW-');
define('AUTH_SALT',        't+ODIUnVLTF[yG)K}81t8MCjG)M}93-4+.6XR71?$48|+rSm4C|t.D1t3O6}w*Cg');
define('SECURE_AUTH_SALT', 'K|IlwtCuT--&^6_5x`<D0+}bcD{(|tdeC|1`Ug^-iQP-Zncf]h*C|,<+@vBcLmp9');
define('LOGGED_IN_SALT',   '%+4k&&DC X--y@UVtM~EcO+c |^xxwSM*Z)@P+-[*]Ebj24vjN|38W7Tjc6u|kLH');
define('NONCE_SALT',       'D[+j+BXz_pG->jCma~QH2B_yG%4nnI`wtb?L)2 Q-7- mX*^Egi{wYSUAw}|kXe9');

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
