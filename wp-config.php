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
define( 'DB_NAME', 'projectwp' );

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
define( 'AUTH_KEY',         '1LzvpyxGT.%B<f]t6Akf?2b=4LSYw*jFU|}t.Qj6mn+l# ~=(,:gExf7pK>CO_KA' );
define( 'SECURE_AUTH_KEY',  '.q&^ZxI)$Ti*w~rsh!0Hv;i;fDY@h3<rMC:5U4BGspI>MqLE:N2+ft_ExB4FK ,!' );
define( 'LOGGED_IN_KEY',    'nur{m5t&$8TQR-TYxPTg*gZ:Q5/S+fj}H2m5;hqifL5:/J6spsOWNo5n,i2f)<Zc' );
define( 'NONCE_KEY',        'bomZntKf7 ]WA*8L5<R=kwH*j}Qo,-+_F_86,o%$L}DmM;^<5zX{Q+9WacVmhfhr' );
define( 'AUTH_SALT',        'W|06ap=h6q{?QSKBXG,J%j2<w=i^tPYiDvz_CL)z^^!o|;!tQ6d(Gy2&,z9Z@6i/' );
define( 'SECURE_AUTH_SALT', ':gtvhR@}dZUKfCvWx@+4U.!9@?WX/^MLYf0GMrtxs RA:xFUuJ%BBQnlx^ZqKS%;' );
define( 'LOGGED_IN_SALT',   '8eC?,%7ip!xC#CxcAcv?IIXv0@,hl$n172w~H/f#a0<?8;X|W:+L3cdIKO]l->-=' );
define( 'NONCE_SALT',       '8zO-13^t].?L%8{o_EGq./FKLnpw0#x;wx}K<`K>^FvD`7pmY2)4#[H-@%B&7v@f' );

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
