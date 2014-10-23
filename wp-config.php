<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'Homework-2');

/** Имя пользователя MySQL */
define('DB_USER', 'Homework-2');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h7VsS,E~>6[R|dnXRvlVxo#syF9>]K<4IU_y4 :LaJ+Gt?`9oq(Ym<Eu]UFm_34R');
define('SECURE_AUTH_KEY',  '`C> @Y_B`*2L$<$-Qt3+A,PxmP[S-+K+8{F5qve^MFb;7m^n|{MaK/**Epp33v)f');
define('LOGGED_IN_KEY',    '_Mk-kNoXq8$%x)v1JW_Lk.W-J1vL>jAJ>9!V&q@Unx5*~asV>HBp!y+nOajml)^^');
define('NONCE_KEY',        'c1nZ|q9#^8al&vCOZe6QemZ}[_N ;4,|u^N.iF0r&Jr0Y{x ,%[_|Zhbg.YwonLn');
define('AUTH_SALT',        '&%8EFry-zlL?&+=%JZy OQ;so9okj/0,WdU=~P4FEW7;tR.^`JYXe>^8B+[e`/{_');
define('SECURE_AUTH_SALT', 'zz>%jzEf0dN-xFcV;Pl3@{!ITcN> .ZqwrrXMNC??hdbe  M3sibT2#SfwL&N15G');
define('LOGGED_IN_SALT',   ',O@`]b)qHW|iI#t6U|L|X2[NwIQgLc{=:x|9|kP8:w.1DMik)MRB#@r7VG=^+-dj');
define('NONCE_SALT',       '!q+M&Uu#~iZ=PWo0+}7*+n+(VktAd0WJ>$F_PL[O0bRT}wLr:Q?gSr%YM<M![$ 0');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
