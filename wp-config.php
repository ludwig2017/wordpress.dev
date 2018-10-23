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
define('DB_NAME', 'wpdefaultdb');

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
define('AUTH_KEY',         'rcL!q6a+f2vJiuUUd31;D!!Uk&NO{(o>x>-.fs+b71 pI,E!a/`ZO;HH=E1<*$Wa');
define('SECURE_AUTH_KEY',  'z&:;:xUUb J+#7Yv*=v-2yc7}o_n#@Nsht7_8+GaTb}6YX<o}So.$0:0v.:9X{)t');
define('LOGGED_IN_KEY',    '~^>:!jAp(TSSmE#O!&P(x;R.ADbRoS yk{rmo-%&hClS-`{m~+r%ryhrx&h5H~`=');
define('NONCE_KEY',        '[B>Ef)>-Go,8`v:GPA+^Cqie&Sl8C,I}TO`%&86vg^!r%QvFIgS0-Dvu2y6k>|:p');
define('AUTH_SALT',        '<e0~M!4fz2k8=*uooagTKXSJR)g$a)1&Hx@IcBymdbzTj]j/*oO0p.uPAw<zhZ!%');
define('SECURE_AUTH_SALT', 'qC?Sp!AcFg!IU.+$.PK$-%[QK|`%r3{pd~,0nml?7W4b{=,M3hY/`$@{xuK06Koo');
define('LOGGED_IN_SALT',   '=p{MtM#a#`^N_oT|?.x^R4?fWvK>8rqrTLkDb=eP9)aFIR={A{O)8Sm:FLkRT-4D');
define('NONCE_SALT',       '&h4?[ }o7U)LeJhPV&AJb.uC<qItMW7jY_?C5>;Kq.gGH,Q-qSjb9).(KA_[6>z+');

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
