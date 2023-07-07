<?php

@ini_set( 'max_input_vars' , 6000 );

/** WP 2FA plugin data encryption key. For more information please visit wp2fa.io */

define( 'WP2FA_ENCRYPT_KEY', '6lu5rYKmf8dVRDX33t/iUA==' );



/** WP 2FA plugin data encryption key. For more information please visit wp2fa.io */



/** WP 2FA plugin data encryption key. For more information please visit wp2fa.io */



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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'spaceit_platfor' );



/** Database username */

define( 'DB_USER', 'spaceit_wp' );



/** Database password */

define( 'DB_PASSWORD', 'a87dfvdf876sd9f2jk3h4' );



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

define( 'AUTH_KEY',         'szT)}UhvA[Y[;qdiPq3#B^5,bYLRi$r98u%xk:xz/N1uyhVDvC CKk#Fg]a$t{%D' );

define( 'SECURE_AUTH_KEY',  'gB t`}j RW2)|QRp_ef;=|It,V5/zUb{+_Y7P@=#I9bQo>*hs!Qm*vN.Msz;iZYk' );

define( 'LOGGED_IN_KEY',    ':sy=wQ/X{+.bS8|j(,$O>LL{pZ-ZxGL16v4j/K<(bk*XOXOq]I:Z<5O{S;.^6kM+' );

define( 'NONCE_KEY',        ':>sKI^ZJ*;c;V]G`*zvZRbH9eW%7Yn5tx/3VXwE;#}c]cUH6at>!%QC3C26<R~`z' );

define( 'AUTH_SALT',        'Sw<3wqR EW&t{5Vm[48*$Kv#4-7v@VS-w]OH Zu8Zi^c6x27`/F]*[`AKj,kU,>p' );

define( 'SECURE_AUTH_SALT', 'kOa7R@[)1Z,!&2.gififxlcsAH[sbRGrIwa-*l..`FWvnvw$J-4dIYf:XRN9{| r' );

define( 'LOGGED_IN_SALT',   'Sv*3ayN)qaq1w-SvG[8jiWF-KNU(kYn_O+CKT2+yQYzNy*/y:F*Tl{fr<7nOal}%' );

define( 'NONCE_SALT',       'vR~QHuzc&}hq1ps1+V*35a  29J[gfU!S+x_rYDVH[}UZd?E[DK/:?qQbIx0U{vo' );



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

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', true );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );



/* Add any custom values between this line and the "stop editing" line. */



define('WP_MEMORY_LIMIT', '512M');

define('WP_POST_REVISIONS', 3);

define( 'DISALLOW_FILE_EDIT', true );



define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

