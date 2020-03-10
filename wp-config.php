<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'proyectofinaldb' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'root' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');
/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '+CQeu}Wcy`y==5FfXO6qF8%L$p[:XhmJ<&tH1?9`[yTFNiuPRum00U`!2nB8pQu{' );
define( 'SECURE_AUTH_KEY', 'DVMn;W|g?&X`fNfc9TFb!QV29=3RCF:d-=S[=lwa.Dq@CV&Pf<)<$tNaQ!PRCl]j' );
define( 'LOGGED_IN_KEY', 'yUQ+pi|GFr0d3yx3jlB;W!&k)6o,7!oVZqKFJq1rh(a!^CNAVr2tA.S}3<~xK{g ' );
define( 'NONCE_KEY', 'jr[x>BLu<g{vfwMqTu*/3>/#Eai_0*?WQL:#?4h7!?f{<|?K,2,;~*Fo<z~ 7;Xf' );
define( 'AUTH_SALT', 'rURAKefR=uS-3EOX VRUq;}~1%B[wL+vQy%f&+IHnXKVmz{{Vd/4bf@F:=1eXoAV' );
define( 'SECURE_AUTH_SALT', 'UERRc6 Gb}ZkNf+<:Qh}1:T]]f9NSRb!@Fs76RZkC20tA^.zB]9Ydzt%Y>O{pZT2' );
define( 'LOGGED_IN_SALT', '?k[}:l^w~3I(nbtrEJv>-j[xRS?DGH%hj09jNrSy/0b_OV[Fxlm8b&o c:BZ73v-' );
define( 'NONCE_SALT', '=}*6v.1 h)mHm51WinzZO1X1hZUKDUvKWf*p@bFE5Sm&}~e+LHO0uK=v=8..kc02' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

