<?php

/**

 * A WordPress fő konfigurációs állománya

 *

 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások

 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.

 * További információ a fájl lehetséges opcióiról angolul itt található:

 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}

 *  A MySQL beállításokat a szolgáltatónktól kell kérni.

 *

 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php

 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni

 * "wp-config.php" névre, és kitölteni az értékeket.

 *

 * @package WordPress

 */


// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //

/** Adatbázis neve */

define( 'DB_NAME', "appointdb" );


/** MySQL felhasználónév */

define( 'DB_USER', "root" );


/** MySQL jelszó. */

define( 'DB_PASSWORD', "" );


/** MySQL  kiszolgáló neve */

define( 'DB_HOST', "localhost" );


/** Az adatbázis karakter kódolása */

define( 'DB_CHARSET', 'utf8mb4' );


/** Az adatbázis egybevetése */

define('DB_COLLATE', '');


/**#@+

 * Bejelentkezést tikosító kulcsok

 *

 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.

 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}

 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY', ':D:]j5dH]e|V:-]4z&7~LtJ4uU#tC7,JQpDl!?*8F#h(jL-ltYQJlTcjVB|FrYw,' );

define( 'SECURE_AUTH_KEY', 'C/>~88$2Z==[wB{-h;e3pq~yI_P-D]MYVg%pA+YarL-1s:xj)gO gyI{?({be6M3' );

define( 'LOGGED_IN_KEY', 'Mw# :|(k-ga4wLkOijXA_cJ=kcEXyMr(7JO M2)3%}G`;4r%jwT5XimLJ}q~V|tJ' );

define( 'NONCE_KEY', 'S?Gen0CB2aTo$GC{L`H2~dv-b[#)GQ.4 _XE/$+ZG5!4#$+X^fq32SM(YX[Hkyh`' );

define( 'AUTH_SALT',        '<$zV.`sK,9; *>KwO90cevqVH&5@$Fbl_{+{xoSu|.3qbxy754qx:(WY%64m9yUy' );

define( 'SECURE_AUTH_SALT', '>E9&dOvZ1%b,z+9l8`32Z}}lzAURt{9[!|;<QL6wy0MHwaRj<UQENu.<q_1*k}V)' );

define( 'LOGGED_IN_SALT',   '=)C+SFuUb6;T] !(Vd0(td%9znCo!Tw5|}zGKn({Mj&O.<=?$p/jfj7|%hFuUSz+' );

define( 'NONCE_SALT',       '9DdiZ%5Q.llc]R$@0eBEwnr5ABdX-V+@{WI9N1=A{tcoVtL?e[LF|/WGEtbrS^*/' );


/**#@-*/


/**

 * WordPress-adatbázis tábla előtag.

 *

 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi

 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.

 */

$table_prefix = 'wp_';


/**

 * Fejlesztőknek: WordPress hibakereső mód.

 *

 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.

 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG

 * konstansot.

 */

define('WP_DEBUG', false);


/* Ennyi volt, kellemes blogolást! */


/** A WordPress könyvtár abszolút elérési útja. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');


/** Betöltjük a WordPress változókat és szükséges fájlokat. */

require_once(ABSPATH . 'wp-settings.php');

