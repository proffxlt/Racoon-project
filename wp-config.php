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
define('DB_NAME', 'wp-projecttoa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'rrX0Z3JS*3@5!&=8Ds2}4AB3sX|,(#8M#lJX!S8Y.]2a!p&=vNeL(WKDZN3en9xz');
define('SECURE_AUTH_KEY',  'j?)Ek#7U! ]&I775PljS_[m/OvE]3seaUxr<2*7&*]t>]*=_ozMaCHTV]#D.G;b#');
define('LOGGED_IN_KEY',    'w0$MC(n/^T& ^,`{UlVfkv1W!gA0;uL<WIS_?lFra7*Y|<NM5K^$Mij4#@)Eo?(Y');
define('NONCE_KEY',        '$E`H}T2_xiW#aoo8*im@boG@ma?dK&1@?J27TN!OMVwE|_)=qPu].-4Ju-:S4]_9');
define('AUTH_SALT',        '{_DtsLPBaZg$J`DVOS:Kz7qdd:9()CuA3yAgGT19=C+HY(zkgws@vgQ0VbQ8tJ$R');
define('SECURE_AUTH_SALT', 'M#5H_[[[:8MwLu]_Vb%s GqO7p[/ yHq~sDd)Cu$Ws{2/pNF6C<M{DG?F^#MJo!>');
define('LOGGED_IN_SALT',   'nJ5&|$DnMA7`ra1X$FtJ9?tsM*>9*}_juR0$)_wa=k~+TXz&jqD}f:n%T]h?4dM%');
define('NONCE_SALT',       'wM)JT3?l^VM^NCH`|qWtPVS**#VO*fp:c7UYF8>jFy*a#q+PgyAY36]Cz!_bwjm@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_project_toa';

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
