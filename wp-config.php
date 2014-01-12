<?php
/** 
 * Setările de bază pentru WordPress.
 *
 * Acest fișier conține următoarele detalii despre: setările MySQL, prefixul pentru tabele,
 * cheile secrete, localizarea WordPress și ABSPATH. Informații adăugătoare pot fi găsite
 * în pagina {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} din Codex. Setările MySQL pot fi obținute de la serviciul de găzduire.
 *
 * Acest fișier este folosit la crearea wp-config.php din timpul procesului de instalare.
 * Folosirea interfeței web nu e obligatorie, acest fișier poate fi copiat
 * sub numele de "wp-config.php", iar apoi populate toate detaliile.
 *
 * @package WordPress
 */

// ** Setările MySQL: aceste informații pot fi obținute de la serviciile de găzduire ** //
/** Numele bazei de date pentru WordPress */
define('DB_NAME', 'iguelle_wp');
// define('DB_NAME', 'iguellero');

/** Numele de utilizator MySQL */
define('DB_USER', 'iguelle_wp');
// define('DB_USER', 'root');

/** Parola utilizatorului MySQL */
define('DB_PASSWORD', 'Alex6546');
// define('DB_PASSWORD', 'root');

/** Adresa serverului MySQL */
define('DB_HOST', 'localhost');

/** Setul de caractere pentru tabelele din baza de date. */
define('DB_CHARSET', 'utf8');

/** Schema pentru unificare. Nu faceți modificări dacă nu sunteți siguri. */
define('DB_COLLATE', '');

define( 'WP_CACHE', true );

define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Cheile unice pentru autentificare
 *
 * Modificați conținutul fiecărei chei pentru o frază unică.
 * Acestea pot fi generate folosind {@link http://api.wordpress.org/secret-key/1.1/salt/ serviciul pentru chei de pe WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2M-5{C-b&vFJrNz-I&twVs3[%E_dE/~&v9ckD~>vhDH8[9!%#cYMcr[NE)Lw#7+k');
define('SECURE_AUTH_KEY',  'r:FvP;-+,T%XVj]:wB[F8s`sE-+BoFsx|rpj_p$1)FXkSX9Frdk5`U>uS^C[VDH]');
define('LOGGED_IN_KEY',    'XRM.jJB)V*N>Z49yV$`m-~r$eQGr=p!F{A2=jhKkMPh7i_K340n?+gccn9xW@$(}');
define('NONCE_KEY',        'nYHPW31/o|VFmSxS04pyQr`q;L8Jm<u}x;YvC0v-`<Qv[^&hL|a$& ~N_=gNPW|!');
define('AUTH_SALT',        '[873aR_nKzPqt}/jg#M:eJ QFX -jIH=F}xa9-{[G}P|f31_-B#Tw]Q}2G@2+H~I');
define('SECURE_AUTH_SALT', 'GX+GmhUC=uE-jc27:JJ (<rkqMR|&8LuF+VR+SQpx>o/&%Jl|m3E%xC!bqox6X0-');
define('LOGGED_IN_SALT',   'S[)Nl|nkHo4zK32nDx@s*J|+c-HB&(>WtwulxA&VF#&dQp/tr|Pa-($Q<-+):j)|');
define('NONCE_SALT',       '-K1ygVL-*o~nLP^Xinf*;cXiYn[x5I|(m({*h,h034b+Q&=SAM4PAa@3+p77|GK5');

/**#@-*/

/**
 * Prefixul tabelelor din MySQL
 *
 * Acest lucru permite instalarea a câteva instanțe WordPress folosind aceeași bază de date
 * și prefix diferit. Sunt permise doar cifre, litere și caracterul liniuță de subliniere.
 */
$table_prefix  = 'wp_';

/**
 * Limba pentru localizarea WordPress, implicit vine cu Engleză
 *
 * Modificați acest parametru, pentru a folosi o altă localizare. Fișierul .mo
 * pentru localizarea respectivă trebuie plasat în directorul wp-content/languages.
 */
define ('WPLANG', 'ro_RO');

/**
 * Pentru dezvoltatori: WordPress în mod de depanare.
 *
 * Setează cu true pentru a permite afișarea notificărilor la dezvoltare.
 * Este mult recomadată folosirea modului WP_DEBUG la dezvoltarea modulelor și
 * a șabloanelor în mediile personale.
 */
define('WP_DEBUG', false);

/* Asta e tot, am terminat cu editarea. Spor! */

/** Calea absolută spre directorul WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sunt încărcați toți parametrii WordPress și conectat fișierul. */
require_once(ABSPATH . 'wp-settings.php');
?>
