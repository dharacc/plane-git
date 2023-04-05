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
define( 'DB_NAME', 'plane' );

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
define( 'AUTH_KEY',         't^g!sS7Z!*yzK{eN:Gi3jlf;w!)xo`Zz`LQKYW7xUU9Wx{`g}!%BOUzbG2N(<z>M' );
define( 'SECURE_AUTH_KEY',  'k 1Ck1q^oMx}D:$3fj[#IA7bt3u#zjZH&zrGwSM0SNcer,=9^QBH-5M<kfJ!/6{O' );
define( 'LOGGED_IN_KEY',    'd@6eSCI(RCS-qMWwsu?&KkS,n#l956NZuSna]QGSJWgJH5vmNRu#,A7[diU}2,rG' );
define( 'NONCE_KEY',        'HShYkg-Y?}[$NE1nq,:j^:#p{I=OeyBzi](`Z6`TVeeTLqp&@2Dj^.*b(B|yu/gs' );
define( 'AUTH_SALT',        'bQ^E<)eD8Ytc~$R@X0 C@ukeV4&0e&$*N`L?0eu&RzA?pVY7YkC_w->v~t6};0kH' );
define( 'SECURE_AUTH_SALT', 'QL6~qt]^Mh:KKnv/HwIfmbm~F0$5q_{e&@4ftM.6e?0&pV`CM7>29q>jwijcTCA ' );
define( 'LOGGED_IN_SALT',   'P^e9;Tf22M0X(?*[F,cp-_7igZ!mzsmH`mJAyK5Qn>L<&BM-#_$b6+rJdRI{+?f=' );
define( 'NONCE_SALT',       '0Kf6`t.{-a=D^A%|Ldf6ns@R.4}mi-<hl*+mNe(p?$S{ Odo%#F1ZN4p*z.ox^Xc' );

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
