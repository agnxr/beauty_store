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
define('DB_NAME', 'shop_ex');

/** MySQL database username */
define('DB_USER', 'shop_ex');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'rc@DR;/vJqn]3f:R,3|D5F@-{i`k$XIw>;>d>YuC,p5AV{YItQB4Ci&Kc|(Gi8;q');
define('SECURE_AUTH_KEY',  'D=FOIU@rv.;7G~{|H*#Z*F9iNlD4@/,)!bE*o+!`|*=%BhN-R{a0;PhVLNNQk+}+');
define('LOGGED_IN_KEY',    '@~L^*6DCpsheCgXgAw^=*PGJocItEKXLmC9P6Xb(nsM[gaRrnP<-zg:I5Y]=LK2H');
define('NONCE_KEY',        'LA0[/+F.GG$p3!/MBLl87Hp;93SOS?,XgK+J5Q)0ihK7K9Tgy1b?5;$!A >|->M?');
define('AUTH_SALT',        '8wO. 0<&~6=:yxqiP_Z5]C5,69Q{M;n)!@Znwz2w{R,eTy(&8`(i% ib`9rEolB-');
define('SECURE_AUTH_SALT', 'tz=`X ?8.MKEAdhoFC#1Dh_J-]uj1NuT]@2lL/~c5u=+l(>+z0yeWm%g_uynjO?F');
define('LOGGED_IN_SALT',   'VS5c[}!GyM_.bA4M2+P@_sU6M>0L@Rl-qyY%A E~RaY<1/J~!8}aUg-B[OGY<41*');
define('NONCE_SALT',       'HwGU%fT~<t{:7weqV$jRkm)Xrf`#CStMtv$|OqBH|g^yn<d[Ob2xzS+[zbcWY-T9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sh13_';

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
