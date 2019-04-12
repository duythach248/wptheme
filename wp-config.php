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
define( 'DB_NAME', 'db_themecutwoo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'hdp/<v&UqI oX2/>Y[uon@s-XuK=.?m0.&Bqt74IMdG2)Xj!3X7fE|O!x!u@Jq!U' );
define( 'SECURE_AUTH_KEY',  'vdhO;KJ,v@-Xg3?PK7DML7C|)c~]8OoX<cn.P2}pAx)PRyN IuXB=To$,|x)YTz3' );
define( 'LOGGED_IN_KEY',    'GEQBEo@<=6|pP)j:DZMz!3>nd.}$C[$ye]Oz4rvW2[Gp>o{Ws`2~VP;}sH=SE]iR' );
define( 'NONCE_KEY',        'lq<][qyoT`,r6Tr_`QfO2 m3(.bpvuT*Z][Bnxn<1,!Mromx57c/}U`yZ.EfdK=!' );
define( 'AUTH_SALT',        '^Ys/AvUK/(qJpFI.|bY5$UD>VG~:r~,tb%bIPA&dKnYE^Y-F=dTT5#[;R$ea;TKv' );
define( 'SECURE_AUTH_SALT', 'e:+MlVqBJ(LMNU!u&YoH}S1/A+P#qMRRfo$Hi,eA:Op&y!n!U_?z|?{k`QKX^pM)' );
define( 'LOGGED_IN_SALT',   'T*yZAc(j<w9QMKECE4Rze}3,p,9Yqi[gto3C#XhqIn$lAPBsBj,=K.LQO>)rNI.0' );
define( 'NONCE_SALT',       ';8JtdcM&LDx4sl`jO~65NF-}jBJ!3~A$HL<py9)C+.de8__(Kq9hjVI|+/P:+_QY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
