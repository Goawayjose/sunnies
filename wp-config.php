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
define('DB_NAME', 'sunnies');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'GY_VS @xt#@*i!s?D6s-]%AW&yG,-)YNqVCEy|&QoyT8%bm5Vso|9oz=:.ZV|- i');
 define('SECURE_AUTH_KEY',  'SYo=[=yw)@$Tx}=}5p1K`#aQP_Nq8AGKy!j6 SD*rMP<8RaclYb5*!O67>WQTS!t');
 define('LOGGED_IN_KEY',    'N$1tB]P`~V>&R+NZ2uwr(Q|0|I;C,=EijXiAWb`Jr2;]A;nnm[R,62U^pFP?kjB+');
 define('NONCE_KEY',        '+&YkPFNu.W[`isJ`/EG*-|DJG%v&7:~<T41.A&Z{4(EU-}bTv*!}Jk!jRG}uaErI');
 define('AUTH_SALT',        'T.2i^7,R=N,H[/6+7`e!N1O.?P9ft~|=xTgr[b|rffHTJn(3h1*LxR(j]at9 yN$');
 define('SECURE_AUTH_SALT', 'Z?eQDX-.[&7+2bUXz-#V-@l;hu aT&!2?zjq#8iEI0aWT+[dLP$D%f-!5v}C-J;J');
 define('LOGGED_IN_SALT',   'Y)8T9#pEIBXgqgl]#in!O5]2,<Ba$4d.F=XT2@]ft*3P{F_6$< FPADA-!?/r~v+');
 define('NONCE_SALT',       '>R2Um> vOBh/nC%%fM[iJhi`7z5|CHz/vDAx-CQvyZ}=CbjvXBR00 jRoXsmkg*m');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
