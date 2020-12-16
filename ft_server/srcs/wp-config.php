<?php

define( 'DB_NAME', 'mydb' );

define( 'DB_USER', 'lessie' );

define( 'DB_PASSWORD', 'password' );

define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', );


/** Authentication Unique Keys and Salts. */
define( 'AUTH_KEY', '[[qX|yEN#kA]Yj*o]/H`:9&R33$hf~)YfJYLB~TG&E!>x{EkT-a+|l`bmVs^+cyL' );
define( 'SECURE_AUTH_KEY', '1E?#f4mIB;_DFB[X./rg<M?b.*$ii? $G~*p2LJf_aZ:SY)Ku>Np_&5Py<1C*YK~' );
define( 'LOGGED_IN_KEY', '=V*ogGAy|`*X7x!KX?^I3<$k:I1_pNw%P3}})e>h@O,m}B+4`l6]L:nZq#Z8H5Wl' );
define( 'NONCE_KEY', 'k%9$Sm+13hW/8PFgqOCaflqKWs(F2X&+K+?:39>wLZ?h#b|y|]l@2be-p8Fk(z-3' );
define( 'AUTH_SALT', ' )RUwg}_8@8:$Dqb=%*J=.J}-*}]?kJ+l9!~pI.tHqe0uGPq-$angjwb%La=G(UI' );
define( 'SECURE_AUTH_SALT', '|b>kDM;_H$||__o_&rF:hRc]m9lpu*v:m-^z4^N=^BZd 4#k+YMEZ9!BrUM~(|s8' );
define( 'LOGGED_IN_SALT', 'eN3q90W#iB~y*mFI%,jJ#{P3E49&+27e#S/rPVE#=*KbhV_SW~LAr:[tjI>`<&.+' );
define( 'NONCE_SALT', 'TISnQLk[K]M|8&%io?E@iXXt$Xaor,H@;4M6`/,rQbzz@C6cnXn8,X=ez-)*0d|)' );


/** WordPress DataBase Table prefix. */
$table_prefix = 'wp_';


/** Debugging for developers. */
define( 'WP_DEBUG', false );


/** Absolute Path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
		define( 'ABSPATH', __DIR__ . '/' );
}


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
