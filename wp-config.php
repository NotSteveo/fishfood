<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         's]54O9:;rm_%]2_/6Uw(vWv?+io<+O^l.8`kFNnO|2cf3+NEpK+jQeF2<Z<g2~~h');
define('SECURE_AUTH_KEY',  ':u>XggN7fPf S<-MH}XJ/S]<aKdqPt06E*>ITIX:8I::]nXa8jZ,*{t@V]~jbz44');
define('LOGGED_IN_KEY',    'R%>g9@tn;}:a*=x^jVeOOtWePGQ|~}2+P5S!a5:,~1X*enU2GjtxeC}{jiJ}w^&4');
define('NONCE_KEY',        'b<Huo%y3 g_)+HjQvi.9(_Kf|^^.4EdL^Dn4-lUOxoyDwy3x#q;E[MObR/p&<3~h');
define('AUTH_SALT',        '86{Z;]sKJ+J9&=f yZdq1I!Kr$X/^v>*X[7]%<X- >]mS51.n14 f{-+)l;=1wY&');
define('SECURE_AUTH_SALT', 'FcQGq1Q^J7p~{?^*2`Iqm?]0&M:B15e7HU#uni{^39GXB2,I&BOI % 4{|MK<65Y');
define('LOGGED_IN_SALT',   'Wb4ho@8MLzLeUuWxSH_uwpU4G*xSBbK+$l;?Wr3H/FMdd-gT38]HH3x$`(d~4x|X');
define('NONCE_SALT',       'v|oyZO}xqZCHdhc`_6e#hCEHt{hn8>-R7_3nnD1IAMAaaKmcsrVt90,/I>g<c)(N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
