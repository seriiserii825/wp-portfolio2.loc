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
define('DB_NAME', 'wp-portfolio2');

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
define('AUTH_KEY',         '~Y=*sk$<y)FezOb-&<jweD[()NI$HEajwZ6y/~b%c2SQrSre%-fju3E_HSD?^jMd');
define('SECURE_AUTH_KEY',  '=lEfq,<P8><[++G+6>5~Fl~+I&bp1l37pNw:TXRbB+>z>NAUvHioZXQ|6?e@sQx:');
define('LOGGED_IN_KEY',    'D}y(812RT!Ixeh,#hq9b-r{wB<H>0N|M0C&VrrxE_3_URC^ i#zP$zBr*qq!^RWd');
define('NONCE_KEY',        '/*5 R#Y>-V khZ58H&k1/ch$M_.@d#6GJXZH*Hq4/YWv+[5Vh!,eM%*`>ct)?!$t');
define('AUTH_SALT',        'b$]Qa,Y#>5~Z b[7]:F;X)lOv@{M5=w iaPtQ=EzFWxbiD3^u5_;z^Ti/QiWS*s*');
define('SECURE_AUTH_SALT', 'NySmXUyv|t2G7qu5RB niSR#s=w!NsOp^.3n$0Utxh6^Ie,&psUyO~!pxx;Q,vYZ');
define('LOGGED_IN_SALT',   '<4N1zT=[A.qUu|ERF^>yV*$!O&.2sx+o~k%P=~%lVCsxe/T)U)&~0mh##UY@z*+x');
define('NONCE_SALT',       'dR2TCE=w@>PpR_w.O5KR:j0rna9.@n!EIvit,-%js?{CX`)gX9OIDtZX[l>-H%ur');

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
