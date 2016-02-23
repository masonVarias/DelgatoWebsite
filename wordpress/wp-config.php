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
define('AUTH_KEY',         '/1s(hNK@Im7[%mvVlk-7=!u) K$Wd0#S]^aE;.5vu9P2%x?N_@!V.3W>,Bkfnw h');
define('SECURE_AUTH_KEY',  'I`[3lVlF1Y?_an$j!rR4&Q)ZN8N(6;&w/ sAHyR|{%bPkd-,=sMAaOm0ijUSP1L8');
define('LOGGED_IN_KEY',    'C-Jk_$NiR8Ad7lw|><O/6ry.Y|`w.Y#^/aaM3*PidurXbppudfR{C6YPee+8oI7n');
define('NONCE_KEY',        'A(;r$Zwpy*sf^X6<cJ_:QMmw=_ g&!D,17!nyF7@A8l?3|hePym||w@)W(_g;uLw');
define('AUTH_SALT',        'C1NRR;,Za#tB4t{z|_MCGMz9vOv)dL#9+]u62jl.EuN*Ur1bpuBm6JhB$Q.T88x~');
define('SECURE_AUTH_SALT', '4aum<cW-<<FGjd(!Nx42U`3hrOJ9?`+MnEO1tC8+N]%}3T#:7@~$dq#ev,)7zL%,');
define('LOGGED_IN_SALT',   'QOQBm!!k5*}0=hwVqWhvo[3z+}]t5=(f7+DsoCr@Vi@[]if=f t/[Qjq0o<|pf_R');
define('NONCE_SALT',       'D KqYOIV@!1hNG12ETVZ<E| z:@~Lm5m>_8LR1]HVjmNcYbKq^Ja()J!I)v;iR{7');

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
