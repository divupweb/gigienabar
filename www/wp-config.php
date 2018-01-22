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

define( 'WPCACHEHOME', '/home/gigiby/www/gigienabar.by/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

define('DB_NAME', 'gigiby_gigienabar');



/** Имя пользователя MySQL */

define('DB_USER', 'root');



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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 * @since 2.6.0
 */

define ('WP_MEMORY_LIMIT', '64M');

define('AUTH_KEY',         '<M]YFN(;^Z<kLqf$9y4X5#vkvH8e4#0|u9Ikfd@9VmE~K2#4wRQ`d h3{ 8k+@-O');

define('SECURE_AUTH_KEY',  'sVw}Q8]M&}`ZsFk}=ddcd#OvglH]vW+tZ]# p>yhX] !hWHXTilL[R<ZwQ(#}yOD');

define('LOGGED_IN_KEY',    'Gp oq3qa$-62mtS*:cQk-?@2@6p:KA$qEk.Hbd24fZ{6=H{P/AhAULW9}n _sk*}');

define('NONCE_KEY',        '&8kB{Qk:izs,QMu-.L>z?R&30D3+bDnFqY2Tg%dkm!|Jv)=.+?(STshBy]>+SX(&');

define('AUTH_SALT',        '.o0ZE<Z?mEUcn1V^ow,8D%OeHSDbB%bPfzu;<v5havBJXt^)M/qoxU];fUnZnb+Z');

define('SECURE_AUTH_SALT', '[y$bLTOb^QbLVi1,!7Lf,*8<hRS64{InIPPTPc=_ sZu1KXTL#IS^9<;7xKPAfAA');

define('LOGGED_IN_SALT',   'st[%P4DW%PRF0Sg`=v}))u`W*?0X*rLy@qY|LaQ6$^PQZ-*;]lZ=}wG)m_Z:i!X;');

define('NONCE_SALT',       '(>^Yau;1,t<A|{%_W&,$r?c2G`l1r+Y2.*V;jgo=cL-uzTC<,w@2ril9P3Bh;cEn');



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

//define('WP_CACHE', true); //Added by WP-Cache Manager

/* Это всё, дальше не редактируем. Успехов! */



/** Абсолютный путь к директории WordPress. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Инициализирует переменные WordPress и подключает файлы. */

require_once(ABSPATH . 'wp-settings.php');



