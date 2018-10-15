<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
/*define('WP_HOME', 'http://project.loc/category/watch/');
define('WP_SITEURL', 'http://project.loc/category/watch/');*/
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'project');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%l[FW<xv.Y^||w:If{!HQN~4GstvQ#4= $Q%Y6yvRo*e8E~OhB[|HqsyMd_0v/Fi');
define('SECURE_AUTH_KEY',  'G&5:AuG?#`N,-8Q@&geDdW[RKRQ4(0!dUUe?FH>Iiy?,>kKfa>4(qH0>O4BM.j!G');
define('LOGGED_IN_KEY',    'O7NZbSqPd&sP=I eo.&P+XU.&sIa%FzQ_l9Z$Xzzl_wDhy H6i+dxf:L7cGuCR[]');
define('NONCE_KEY',        '>?dsey?Qg{(gvH?klTZ,Ku+0 0ji%F:)e)E/%)f5_/Zk4cwF9+f=`9.5m)9]PN30');
define('AUTH_SALT',        '&5bnf8(I>4um;(O9Eg;-(E=?wZcHZ* oLX2^11H^:ktI[G9 !eoyN;1.B< +8q0O');
define('SECURE_AUTH_SALT', '&0fCEtDg(Jxn%QiRI8dU+oT|^[pb7cw;W ^A>(YS[{k&{#!|e&VopGC3xN :{HI3');
define('LOGGED_IN_SALT',   'Z^*F![~RX$7YiJ`YeM8nd?e5lP~->Oo.T)@n2ZS?hjZU&v|8n`V|tF*Tt1WW{gP;');
define('NONCE_SALT',       'HCQ2`(S^] Xix%Q#,:VFAT~EG-4m&K9% LzrMlF8?_ f1>&v>`J?uQNs~_!IeU*K');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
