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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdivi' );

/** MySQL database username */
define( 'DB_USER', 'mhsajib' );

/** MySQL database password */
define( 'DB_PASSWORD', '6MMwh46wJm2bdINE' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' ]]l$2%qR~R]$L=lx@qpZ^C+fEws_*)csgrKUgQiPedt)=tY]V&;^)$?*4}.pQ9@' );
define( 'SECURE_AUTH_KEY',  '#blk3E%GP0ZovTc{!$MxZh}sB%j)6I_?Xg^7@qJA{gg3LpY$b/I5:V }nA0c)N(W' );
define( 'LOGGED_IN_KEY',    'e2Vu_%z%fz,3WuIX~MVgl1$`AU?Aw3Cp3RorL1/0]1v:[eb&Gd@De&0H-?,fKvbN' );
define( 'NONCE_KEY',        'rsVroZqFkStWOu,L=yr0rjfUYX}H5VD?@kqwiZ 77j_H)(RPM$4(z8x,>^&R#x:t' );
define( 'AUTH_SALT',        '=RD<RJ?psrauozQZBWSYT63?EkRXtH3&h:uWblHVKC;U!dn;aqgjT]yf}QjrORL!' );
define( 'SECURE_AUTH_SALT', '>3T1@T v6]8mbQ PpyjXO}C7_3l[1#eP]Qlf!d(28WFL3WO9,dt>7WrxY6C<m!EY' );
define( 'LOGGED_IN_SALT',   'I_7!Hfc@xV|nUKcJ3Wrb#W+A(Te?*nN1,ooPL59j8QlV;a{rgg7hK*Twz5f7d&k8' );
define( 'NONCE_SALT',       'vP@lh,K5t{kzD=5-=,JN}x)BBJpE:3.GwA}9S%;akzJ:!KZCRH|<X2jc_7-D?+La' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mhs_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
