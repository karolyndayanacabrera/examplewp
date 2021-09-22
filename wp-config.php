<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fA#*sPq8#P?hP+k}BtiYSJWiakjW5&9!(Byj`pu>/gq cf&1rT`e~V`Lcn7E!>?d' );
define( 'SECURE_AUTH_KEY',  'Y_{}1YL77^ymMJJs$(MJ<X`[R(l~*p3r[L{:{/Jj@3W2z^D& SQV@vcL^uve1D:L' );
define( 'LOGGED_IN_KEY',    '8|pI)gW-pYw/4Yjv3qEm|Bh7K-4^4pW$YSaX)-TzPga5_Wrw:Jg5O@<g2[??@X53' );
define( 'NONCE_KEY',        '-T^Z /5;zlB@illr0QMUWWt{_vO*fA n|JAvo4`NZeP@R/lE};&6LI6%Jj.yzPo:' );
define( 'AUTH_SALT',        '^JD+[3$Zb6fSrR?laU)e2j9hg&G]%n*RO~NVUyssQC(09N$^ns+<7,v8kP5%7hc;' );
define( 'SECURE_AUTH_SALT', 'I1xc*aQ2`F:R2~Oc2p~8Zds3=x]Z[q#F.Sb`}7Ompo|b8[>_hSNs>iE:G5(WS!hG' );
define( 'LOGGED_IN_SALT',   '{!Eg.0~H=Klf6Rl#6q( QUsVf6p0v{>|uQ{A)WAD&bV2cc/3`yb1L?!xj~|lnw3Q' );
define( 'NONCE_SALT',       'PU>xmR01dZjJ6t5Hf;e;cuW%@Q3r,N%:#*9vI7~#kReG!-er7g@p7I|xoK ,vmV2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
