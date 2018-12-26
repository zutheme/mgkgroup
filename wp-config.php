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

define('DB_NAME', 'datamgkgroup');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', '');



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

define('AUTH_KEY',         '$)n=MpZh}{Pk|o5n$&qmk*Hc/Prb#9VF*^J#+Mo}M<1qaiBe+@.$QV94yk+lQH)d');

define('SECURE_AUTH_KEY',  'XF{0Vx1[*jK2W2?HRkF:.ZL#hBY/<?HtcZ9oY;zIK-VPlf6+ Dq%v6rQh0);5ayA');

define('LOGGED_IN_KEY',    'bv_9vtx&z<5GUa411b:B6/3;:i)JjGvhi@M?8pA}5Ug1*;o+@*!n(bjx}1NLL?R4');

define('NONCE_KEY',        'W>#]mYJ./:Q7xB?a185$<3T1111G6f lNU(-|iW/2(YSCgL#1ywEA2V6.^CO3B0u');

define('AUTH_SALT',        'iZfi65C lU=~u<qS*Jm?f=@N~i/B88.^5PHD:Mgs^N)G^}k<QIfMndE.U#wvSV. ');

define('SECURE_AUTH_SALT', 'LB8oqJ[Z_~Q-*F iR_RY^d-L*-&8;Z^Ut>F`(Uk;o5Xs-XPN:F+sSEA;|8}`*Ye5');

define('LOGGED_IN_SALT',   'Q`h9!_z$+Z^%]UM`P/a()VMmH/KlC=9|/`sayoyF]SiQAeTQERh+@Kgf@Y6DXRoS');

define('NONCE_SALT',       'zp!KC95.zT,5AEX5U.L>YQ>pVaV%crfUzag4:{QC&ycl=4ONj}?RLZn*pb^n4Yr~');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'mgk_';



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

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

