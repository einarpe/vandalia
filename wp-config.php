<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vandalia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lKarA+{)~~7~taZRLLtL[o)c}YMQiW/wbN!gi]k_cjsd7-?Uiaacg{/G3%H()%|E');
define('SECURE_AUTH_KEY',  '?)0&.Z^EFA]jyU94p.LIr_K:TsO{}@/eSD!pR<</a3q#,FsbV,zi4sC$-^w.@v*.');
define('LOGGED_IN_KEY',    '23$b]+viGPTYnV.:doAzi6M8C/=J$<iZ.j.J:[x%mieG)`/8-86dS9gKu?1(=Nh[');
define('NONCE_KEY',        'VUtgg!e?]A|!,bX]xOb-3*# Q BV~yy2op~EB[T4{yp-pBY-02rtT2dfPVcC+n;~');
define('AUTH_SALT',        '{5U-Le$ u@+V+MD=-qQR>Rt]$2*cR#]/,k.V%tQV|V2R8 kx0sF.F|ekH?1-=n9s');
define('SECURE_AUTH_SALT', '|8gGYVg2|MEUdW%Q2$ 0@U|f;s9+]XU@C4[Zsdxs`g?V`!)XShPy3-Z.OPc]oSj|');
define('LOGGED_IN_SALT',   'iv+9$cj+<=rC9#n{wmr{g Eq:y*N 7T)w={Ei_U<2R!S-DynOE&f[<!ViJR<JyD%');
define('NONCE_SALT',       'Ux.&0`#<NWR[@O>yUow,5ZyX @R~qcC||<TYo^y*4zc$,7m8v-{7=#(=!RE=X|s)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
