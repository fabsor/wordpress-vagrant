<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '/2W|#`nICiS8)O@V7vjoZM$g1E2}|$)E+S1C/k(Dw,/8;:H~=WDgcMm2OwQEj}[0');
define('SECURE_AUTH_KEY',  'K@XL[#g<:RQ4(h#eD=Qd5c(LR2OCa]Rz+gaAkR-{hK iTlS9<;D D{DSi]h- c1k');
define('LOGGED_IN_KEY',    '%Da;3JoI]fsXAEx80bjI8PZa_0Di7wf0lSa(/L#Q6R,iMBz8aLNio$$kDV~.Ajbo');
define('NONCE_KEY',        'k^R1L?J+:aGB,[0DA2v+vSa*[PbuG~26ZN28Y{etW sAP+ZWh(!+M>8S=#[N#;]+');
define('AUTH_SALT',        'n]}|9#`wA85$7Zir5jMU|wf8GBQNp|5us=?iM.E_?#IMe|Hs$r+Md&j|&-+|DC?v');
define('SECURE_AUTH_SALT', 'k+BB8[Q{z}WF?uxzL-r^m~Av|T}!DXuO>f0hA+zp(;G/lC(t8Z]MY8*zCXxB5L66');
define('LOGGED_IN_SALT',   'aH(mK-TbDM81WYt5V(1i-d)u9sZ:909]to2u=1xiY^4O 8U7J+bgcNQ+bPzGZK*^');
define('NONCE_SALT',       'b81E6Ubc2M~;f/r8:>)QI{D4XFL47KNQqKH2%(0E2VmIzb~G-%l*lDq. I+{;K[<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
