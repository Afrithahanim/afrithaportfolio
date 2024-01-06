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
define( 'DB_NAME', 'afrithaportfolio-db' );

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
define( 'AUTH_KEY',         '?wD%m &0V-KkNcawonGR+z{IMD$0GJzwT)36L QccfSrz^K{QxAI!%Jv5Rc%Iobt' );
define( 'SECURE_AUTH_KEY',  'qfW&+c9-j(Q:7v5b}>w3VYjmF%bKP,AGGP~@vt)YDMGv`B[5c 8P[6jFvdr0!Mrg' );
define( 'LOGGED_IN_KEY',    'CyVHLT?gSn O/+&IS`84ZVb4LL.t[/+esV]V7h3e$h5^_QrQ,^&BJDf?]vdKlGPH' );
define( 'NONCE_KEY',        '=g7*sZQ%){>Aj[!RI1wdWEm2fJybU,u7Vb]8rhm4o}Uq4KuB,>KBt[W}CKuf?0MP' );
define( 'AUTH_SALT',        'AxYM$%2d5T ];TT-st$U:Qo|M$o{<]C~A;)yWlsD> +Y}Q4A1l89V_M5HWg~WfS,' );
define( 'SECURE_AUTH_SALT', 'zb7%$I`g!&Ua&AxUTxomB9tX]-LL4umh0)[{_glVKsAJ+ omfLuj{#<lgL{QqN7i' );
define( 'LOGGED_IN_SALT',   'cZ1N4oe~Ihr(^z WAE9}5 XtdGuhN8Sy#H$$|v|HF[9Hgjrc!,{~_H`$6{z O>+|' );
define( 'NONCE_SALT',       ',=<tC+b4/M!]>5m@qV/Bq2+U%_@rl7*#tuZmUL==7fcbN7:,A}A6G7 oV8/3_Z|d' );

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
