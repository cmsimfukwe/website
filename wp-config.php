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
define( 'DB_NAME', 'eczfinal2' );

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
define( 'AUTH_KEY',         '&x#>!><e!Bd)F4_zEnQzTnFFu%!}>8e&zP]j4t|ep*[vg,;,L&44[?JW%%&(zQMl' );
define( 'SECURE_AUTH_KEY',  'EsXONzvfPSp+dw_*|,pN&mh:op!&nQB!jFMZr7rwZ!/wpYBkowRC;QzTS{1veI63' );
define( 'LOGGED_IN_KEY',    ',1}4|lDz5r[`A;Pj3|6QjOPG+Kg7.~m]Gb(Te(b X./5#Uc}#~;4[E-eIO%S2bpI' );
define( 'NONCE_KEY',        'z=rWbR5-mIYi:9mqEHLW?xgy{LAK_q>U4f%la7XYt dA=?|__$.LNN9EJ-2F@HQ ' );
define( 'AUTH_SALT',        'Ux;{J.-zl~K/o%(uD1O*:~N5jEgnJkYT?%gOGkf`jA^z^%{R|<(jD0s9=*uPFYZp' );
define( 'SECURE_AUTH_SALT', '(]<~q8=T2B6;}EYM)m`&.!EnLgYl.JgwHH`%4xeos98Gr`t:qUn6TrJ|(eyzGd2S' );
define( 'LOGGED_IN_SALT',   'T[/TWl2$0b:/nJ1vd$|YJLGarFce$i)/ak?5M0sz=UkZ5A>rT+FRwhz(]?$$U/hz' );
define( 'NONCE_SALT',       'ITawFz~_QTR`(DKUy>6)@}*kNd.UM<Hap+cW!i,Bij?_rf:je.:@wfhtn<}/iEDI' );

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
