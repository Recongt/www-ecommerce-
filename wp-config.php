<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wordpress');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I|4+-)soC%eS|=-wj<fJC>$fXMf#`yK_Gq1nzf+|Y-|,FY.wKRg>Y|$}-K/=N.ZK');
define('SECURE_AUTH_KEY',  'oMn^T$Ar9mj!}#SXsK@)v}qL$Dt@Clr=O4!eT2!FOL_[&$W0i-+4W-L[ZuxOufL6');
define('LOGGED_IN_KEY',    'T?%t@U}XbeI2lvFd7|qyk17:tuZ8p/gO=l|?OmA:)||(E{H2BK8.-S%(!miR,<]W');
define('NONCE_KEY',        'pwT&gAO@o:5}|jr)Wh2w sm_+Pn6`OpNMQkWvS8V^+A>_$V>Rkm?3[;GqgE71EzT');
define('AUTH_SALT',        ':rj0LbUqh?jhL<-x^W||]&m8-BRI-70/:Km{#uQ@ZaC6+5L*IG($98QManj!m-/.');
define('SECURE_AUTH_SALT', '|o4xr2)liW07L?4$%<&$bv/!W{]}kg;Sz?1S.y?OSc~t^^||)hQof%$8MR,^km]J');
define('LOGGED_IN_SALT',   'ZQ0n*zi(_Mb a/lV~VgGJmkd35}9Uoemp:Hn= ]7~P,gJE~ +Qd4e{|IT[CLcR[A');
define('NONCE_SALT',       '-5f.<C=XOx}f(~gE-&`N6K=PZKOQ Lau7=rMVes#C}hl+P0uSeR|6+1|<a=+ol+,');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
