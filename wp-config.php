<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'theatre_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sDi-hktS@dQ W!S5n:Lk7pW]XSU4GL?/$=%TD1f%cjl]6BBsg+q*5z*Y19l*2T>Z' );
define( 'SECURE_AUTH_KEY',  'm~xw_O $[;wwbzto{TuE<(kn=b>IP_g`*%9vmr</J&PpJ].E|tft$M!3|X&R v}O' );
define( 'LOGGED_IN_KEY',    '{WCplEaI]3r`5ZN`YkUQW~CK:IlsFdwDGHFLC1f2ECX0@=AwA2P&Ulp8/^D}WHs%' );
define( 'NONCE_KEY',        'vH+Wwx2KK)4{p,f8{=A/-{8!ff+}P$ .$w^fClD^BFAP*HsH21,rN`UiKG]r8qDS' );
define( 'AUTH_SALT',        'cZGA(q]VAohA7v.C;jm!VwErqt<M{B,.m=H&XdE%{Lvl<&^@cP<ikOiC.p@./rsx' );
define( 'SECURE_AUTH_SALT', ')9ig9(:m<VO}*n$FWP8joqQ4HNFdpsFi54~Q2$J<DatB1mnbqrQl(#/TEj&U:pjZ' );
define( 'LOGGED_IN_SALT',   '>%l;z^I&hFty*/]hGe,~[@~;bq_A}&)B=6v-B)N3hv[(2EE1-R@0o3nH*62L-*&z' );
define( 'NONCE_SALT',       'Hihkrq(=lJ^<9+BU-?E-R?XD~eIk>n(%.]KK$~7eP%PB9.I{~NTeUS>UIy8Tc5Q@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
