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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'majdahim' );

/** MySQL database password */
define( 'DB_PASSWORD', 'majdahim' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'DX+#+EZ,<FcAh]/E{,]U,&i`H|91a}RLcZKG=+6cTu+_2BR{X~!(8[2D5VeLxVhB' );
define( 'SECURE_AUTH_KEY',  '-#jiZH:!]JBx LI6jf_fJd31,~ZQeP^YSVud41>jcr*W~W7l<`15iG@W{}= xKz]' );
define( 'LOGGED_IN_KEY',    '=V{[)EfmrnA]r.5k6,! XHDby]d=%ySQsqo@}Mu;!jvPBB3ow4I/X[wEkXCLJ,z-' );
define( 'NONCE_KEY',        'fwIKV[S%nZ=<h6TRN$MrQc%|XQ<lr*6e;*J;0jL0CoZ3>d/q-hbj6:eRis7&PLC@' );
define( 'AUTH_SALT',        'm|!YunJ:T0d%2Adxe2bX_~afHDE{tCKv<_9GqQLVXc4:s`6mqG,@&[4_={s,=98<' );
define( 'SECURE_AUTH_SALT', 'IdjO@;vI?l$UkJxYg$|.!G:|FFAZ^W.tA8T>DmJ>9wCpvSV0OsC %Lw0I5le!gA9' );
define( 'LOGGED_IN_SALT',   '_A3PZAy?iY4{EG!>9@?4S5RmxO2i# 0Gr()^IxBM{Lu%[,=(ye]_jMBTp7+LWyo-' );
define( 'NONCE_SALT',       'RsI8 7-*,s-sy(7|ycaEkxj!IE[G`!|JS2tA=B9T}:Zu]dIX_UvoO{}.P~$2/dy0' );

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