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
define('DB_NAME', 'Cityscape');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'n0-aC:ah&I!zZ5z!a}XH3frmOJd Nlac{nM.4N9gV9Qt#nc(#,Ce^j0.Pj6NLUuB');
define('SECURE_AUTH_KEY',  '.H ]8ABgT,y5#|flDJVK_/Fo=nP 0fMQg8f>RCXU^okd=?;2pe$tkc11M=ZALCTY');
define('LOGGED_IN_KEY',    'nk~umfy6UV9q(@4/MNVt[2w}V;Fqi*r9UZf1_b`]VFHA9>Lr4G k;/#]Px;G,4Cp');
define('NONCE_KEY',        '3Ka|`9.vKF@UaBMikKnwDOXeA||kdY4_o:]6qK/?:{_qW&XQ$qM19ht9eX;R<wSs');
define('AUTH_SALT',        'cukt4U^}_eJ~O|L~J+O8I FFl(?kqv6vUH#{o>-fI.yM/>68-ilR_Y]Et19+e*p3');
define('SECURE_AUTH_SALT', 'e|Y9XY~%4I^$BQqWWr?|CisEd;-%,9vn:X!P`Qt^{W]+VH>h6K08$EM,h$m9[87X');
define('LOGGED_IN_SALT',   'e`H}BX i/28-AaF+h0pbY|3J9^PmNa._du,jS@Eo$/c<nC)O/NEEo@f)p[ibsO|X');
define('NONCE_SALT',       'TI0e%8ud[S^4nSXh*^je<yH$QdPvD`MtuynecSgN?(H(=2I]rs{}kJ[HWRCSJ*!z');

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
