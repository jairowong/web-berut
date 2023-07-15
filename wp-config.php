<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beru' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'v(MxK3#hg`.8sT#V8qun4FIzNtxkM(/(H!egayIcQgiN+>$u{hm(==xj<n_Q.ZJa' );
define( 'SECURE_AUTH_KEY',  'V-7ZLG6q{W^+x.Uib?B_WDD (R$JMCWqd5yM%BvEDZ~r$i#=!bR:1->Ed!*Z`6tP' );
define( 'LOGGED_IN_KEY',    'S.z-xziXS8`7B;4eNy._@u?rc1|I[sK#obAnnv?=yi0Px4P(VXCBzjzo#oUqFZrM' );
define( 'NONCE_KEY',        'ry^v<e*s2W#s4HK)[PfU$xG%,PqvD69x|F%7;H1R<7< 0]4u&TnWwIFFyl&kuRWU' );
define( 'AUTH_SALT',        'L4ht{/KS`XD3l9>_fD{4LQOGWLZM#FaZ]c-?poem}R.(Vf-+7?fuByNhEXwsVqAN' );
define( 'SECURE_AUTH_SALT', 'E3jSm7ynkSs4Vxy@;>Py/MGk<+tPCBz @i9W0GXUhVXhRaiHg9mEXVu)dEju0<59' );
define( 'LOGGED_IN_SALT',   'o@jj6$+Q5`r#~/TDN.)VTsyH;D`5%<jW8X!pM/)!cB&hDxH@`ieVS%sP;n7+]Hw-' );
define( 'NONCE_SALT',       '{J%vfU8%xd}Ih$HoU)l&Mq&Ofe|Y^6Ce};&X@uKn>->CEsv#$JaM.<bYkNFf|!Zd' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
