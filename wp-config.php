<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing_page' );

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
define( 'AUTH_KEY',         '0N e@m0c;0-@/E[1#/.9j%/E(nR@(tB11Gd<Rx$;2zd9sU5O+BMB$(H(r HlGx(P' );
define( 'SECURE_AUTH_KEY',  ']90{KAb#Nc6TVNc)%D[^&9<@Y6_|;fCKYa)2LJR99#$6Tz:H-ni7L)9`^#jKf*FB' );
define( 'LOGGED_IN_KEY',    'xyZ,OO$6NDetq`CNv8p@U/6m4_W_QGyf.oo?w>%%:2)Q~ QsibM~ ~b4t<daBg}}' );
define( 'NONCE_KEY',        '#n`U^t71kJt~ue0Q `cStu:~X=g%,Q!GF?G[|QX2fTQ224;wXq-;huMg2|q(&$=+' );
define( 'AUTH_SALT',        'SL|m=H^?aF1_FKM#SeYVnGlcuc[K?A9B)C+:^?/c>(nu&0Mi@U^Rz$eDZb]Q@}h~' );
define( 'SECURE_AUTH_SALT', '!]<SDAd{k$JP[Q%wmc. :QxB0O/XjOtRxI@,>nDC0t,n8DSh$*UqDLh>M`gUk50&' );
define( 'LOGGED_IN_SALT',   'vB2T/ay,vN-zV:[l~a~g!! kllq|%T1YADG;?m}h|?T/x,:=jmiI1kx}.2<m?,/b' );
define( 'NONCE_SALT',       ',Hrc9E_%28+HugNK% [;h@2ru:Np^1]|D853/8m4t`{<EG:,{#,fOEL7( HOPuxd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
