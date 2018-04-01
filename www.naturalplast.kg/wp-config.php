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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'Naturalplast');

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
define('AUTH_KEY',         'F!1&}r%$-0@]aw>/&W/2)*DL8oTUX!CGO9vtFjRg/6bYCaarlm:-TLmW$hp_y#z1');
define('SECURE_AUTH_KEY',  ',Nu8dWuZH,b9alq=h~4[q#WQOeM E?yp*u:/ebZbKxx^BzU}hv;z7rusJ0^VUEW7');
define('LOGGED_IN_KEY',    ':Twr{<8]Z_Gadde=$}m@SB%dCp,20$x3m7^_[cH@kOD/mq8L?r{vE4r%0S,{{:k6');
define('NONCE_KEY',        'U8W=B=R9Y%h5w>05)ESzS/arR k]DFVzPEH.%85lU&2*D.,2GpIOP)WhM07svqaf');
define('AUTH_SALT',        'bz&s5roj)G[H/=iY9$n@ #{y=bvao?JRnzTV5|J|IM{fHhi(|g*#WAnf`3[v-} b');
define('SECURE_AUTH_SALT', '$6;f1,f)IvvfRhVW)uHe<DKhf|p;.wZ~|GGrKa&!/?+K+TMm8c 86@e?>39$=RG!');
define('LOGGED_IN_SALT',   'G]4F~#>2i(5CG}XWH9qsyN#H`5kSDw?}kb|9B mEL&(@^#Y:_<gPn<G*GR=Coyo6');
define('NONCE_SALT',       '&!i]^k/N}Y1C%^d?8le68h<T/Q|E3=ApeHTv[n1My^PJ!:BKlh[VL1Sr&X`gq^84');

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
define('WP_POST_REVISIONS', true );
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
