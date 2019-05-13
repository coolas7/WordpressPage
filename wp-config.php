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
define('DB_NAME', 'horion');

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
define('AUTH_KEY',         'WhXBVyKw{PmMbCCJw-(]?Q5SI9ZPfsHedjn@5gmx(}.n/(+$vp&kRHPjt)j@W_ e');
define('SECURE_AUTH_KEY',  'YRo(@U/*RMA,H9-DSh!.9]{h=a<hi1W3wXgo[{(E[|PuL|d[nU _&O)?@qOTS-TI');
define('LOGGED_IN_KEY',    'OMXi:ldQ3}Pbo:C3O>g&@YzzrS9X;jnm3v@h$3z|xyc,ZDTYf(mER A-m.CM),$B');
define('NONCE_KEY',        'DE]&g7A-Y~@U{*NI8:*:&}Y14.T}6Tmg4:c~4@u)^?0?B^,OYW9Ji223|m4>d&{M');
define('AUTH_SALT',        'f_Z&hdXvKbOR<=_xQ<+pbb35/f3#pyMTD_>k.?6wm2SRi,A-`(>ZlTD38rFu03*S');
define('SECURE_AUTH_SALT', 'w7&M%73Tb3kaG:6$Zft~.>sO5j<TdCflSd5%_y+P.i[` B<3l[M)J--yP[K^Y8M1');
define('LOGGED_IN_SALT',   '=*(RIvCS2JmUAfTi+0h_i$DtnpatG53hy(q.F1+(c*Q{U{mJC0KAgZ6~*U|M;v/O');
define('NONCE_SALT',       'Z2f7b3*hQL:?hn)`Etd%NHe*A/n6KoV#GBBZIs7mL6)dW~%U{V!iy-TH!3CprIgj');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
