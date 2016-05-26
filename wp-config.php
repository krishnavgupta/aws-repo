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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'redhat');

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
define('AUTH_KEY',         'c-TDE}#_qUIzJ4b}8Yb`hFkIi8[;_0F@/ER:;uJ}q3{`99w|!%OH=1JUts}dB%,Z');
define('SECURE_AUTH_KEY',  '_o%XouP7c6%WrB^u9rU+S}Cc(a;*V#gE]fJ!%.cMM|H-EhjXO6UWJBsdrEdLhgub');
define('LOGGED_IN_KEY',    '~e=~llXKsh+jFZ7dH^S tn.5ugT0qwR^0;1KB}Q{,P7Syto[7>HG-|u</%<7WX+u');
define('NONCE_KEY',        '[ZPFlc@DeS:PFU4J5Y!=4.Wtay?8(NlU$md0Q?t1E$aoP/mmCfRvp-PPMY=9*PV)');
define('AUTH_SALT',        '-f/9ei+WssS%hT(tn&8(7{3~q}[>(?mVH9r& VM^Rp&DkaiD8.Dog(wSl[1$PV?w');
define('SECURE_AUTH_SALT', 'WeAbpx#r[0gm;Pj].Pln4yYAt$:%<urI*vdZ8}>n,ZF`Q.Q ~YT/#M@tmHOUn9u-');
define('LOGGED_IN_SALT',   '(>JAe)uAL:p`%]VT=vJc*mS^=}L%~)XIL>tHLsfe(,4m%s{|3~zfAC;:JQH<ZVFd');
define('NONCE_SALT',       'wwk-6Ea?Z~{eU+sNQ*bT6WLHf1(6,zOO]r8f&XpC&<R:<ERx&H~W39JWK*I0-[d.');

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

