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
define('DB_NAME', 'pushtodev');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '^nO;A@#FM`+XUyAP V*sV/pjnfwqOaTGz>!FC1|rU/#QI7F+.+j]lJkwaX_@2U@U');
define('SECURE_AUTH_KEY',  'oXq# fw AKbDH].E|^X9RQ1/|P3=y8W8OANY+fL/:]C[AkzdaQ6-L=Xqr#a:0F|Z');
define('LOGGED_IN_KEY',    ']~?Chb{_sWBHf$[XjD!]Y+{cD-/-oW&Y^~h<||-x?W-VR%g3&8y,MxTy5`V)%x8J');
define('NONCE_KEY',        'rc,QV4%<?jATb*jw=A^~Hr@Ie0@[pW4RPWdhS. .-b.jMw o/CI%+#[0`1p/Q|.,');
define('AUTH_SALT',        'TRDLulR|j,>ZZjl!ef>z|M{K5;&+m}X4f&.s->~fnFHrUr~f<zL!K}+AVkG=19{J');
define('SECURE_AUTH_SALT', 'fFq:gjbZWH&4Dlp#(a9n$8W#aEim&2Qly|pF(D1I;-+u-oYc_AcaYb<-pD&7CM $');
define('LOGGED_IN_SALT',   ':0Jx2+D|-PlS~!fiPXm70%~nZtDiP}WyY{R1-rqYEDGE0TV54eco~-mavr3lsW05');
define('NONCE_SALT',       's;sh?.5vDGwW>rzCeFCLd3Jy=5is71Cg!{8y@7.+8Qj5+X:B$zAuY1B0L{|*IIu^');

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
