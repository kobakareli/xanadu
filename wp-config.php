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
define('DB_NAME', 'weskillz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'ik4#i+WlxuA}k%lB1PyeVF#D+kdlCxVA)?WY{n+Z&,$~/Fa>P%vRGY@GFt[-DpOC');
 define('SECURE_AUTH_KEY',  '5zq,&r~lUcEm=-X+;7FyyR|ZK?WEhxE#SqTo{uNj&[zmKTHT,9;Ke@M|Rm#,GZXo');
 define('LOGGED_IN_KEY',    ';cGJN~/j>acH,Ntux|`T]@,%[G6wP#th}$OBb>?oXqgJ8AUmf UmjD;Ns{Q0sa>,');
 define('NONCE_KEY',        '4e*8EG_E0#I!,ZC|~:@,-Hj[~`:TV}w!**VU {(2!GUXl*j)(KJD[E{@7h7o-]} ');
 define('AUTH_SALT',        '{fa0?ar3B?[F+|gMEZOL+9V3@DiIi,>DUfzb+WO@iscy+rM<#.?aL+jopfB[&C^<');
 define('SECURE_AUTH_SALT', 'JzNs-AYD9dp7]],e`!PY/D<EkKZt4cwaAHyx3m.! ^c/2Q]lzJSqxiyk!.&HXnYP');
 define('LOGGED_IN_SALT',   '!sRX`(ys_ZqB^!#uC5NDbc@)sZBY@|ABh#3D6>78~SH52Ub +_N- W4Of|(m-4U?');
 define('NONCE_SALT',       '1;YDM}966$*:S [G4yY+A`0%|b~aF@)%L%I]Z]eky.@0|H?V2~t57)=_T0^p/+Iw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rb_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* In Production Server */
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

@ini_set( 'display_errors', 'Off' );
@ini_set( 'log_errors', 'On' );
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);
