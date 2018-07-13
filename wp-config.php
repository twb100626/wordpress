<?php
/** 
 * WordPress 基本設定檔。
 *
 * 本檔案包含以下設定選項： MySQL 設定、資料表前綴、
 * 私密金鑰、WordPress 語言設定以及 ABSPATH。如需更多資訊，請
 * 前往 {@link http://codex.wordpress.org/Editing_wp-config.php 編輯
 * wp-config.php} Codex 頁面。或者向您的空間提供商諮詢關於 MySQL 設定資訊。
 *
 * 這個檔案用於安裝程式自動生成 wp-config.php 設定檔。
 * 您不需要將它用於您的網站，可以手動複製這個檔案，
 * 並重新命名為 "wp-config.php"，然後輸入相關訊息。
 *
 * @package WordPress
 */

// ** MySQL 設定 - 您可以從主機服務提供商獲取相關資訊。 ** //
/** WordPress 的資料庫名稱，請更改 "database_name_here" */
define('DB_NAME', 'wp');

/** MySQL 資料庫使用者名稱，請更改 "username_here" */
define('DB_USER', 'twb');

/** MySQL 資料庫密碼，請更改 "password_here" */
define('DB_PASSWORD', 'hb4zX9');

/** MySQL 主機位址 */
define('DB_HOST', '172.30.222.71');

/** 建立資料表時預設的文字編碼 */
define('DB_CHARSET', 'utf8mb4');

/** 資料庫對照型態。如果不確定請勿更改。 */
define('DB_COLLATE', 'utf8_unicode_ci');

/**#@+
 * 認證唯一金鑰設定。
 *
 * 將這些更改為不同的唯一字串或符號。
 * 您可以使用 {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 私密金鑰服務} 來自動產生。
 * 您可於任何時候修改這些字串讓 Cookies 失效。這將會強制所有使用者必須重新登入。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eCm%*0k3mWVum}y$+BX1c8?|yS-^lLAG?5lQBei133;F4fwAeFS_Dt5iR7=4O$Vs');
define('SECURE_AUTH_KEY',  '2e;70E:azBh-[=e;s&#d.xjH/,/@budDL^sL dm99]N.Kd=x%sT,?+l3#kYhb|N~');
define('LOGGED_IN_KEY',    '(1xW|Ja,qhImO^^q1y;RmKIv`LaZxVSs*;vy`R<3EUa.|gYwGepK&+$Nh?>XCoD.');
define('NONCE_KEY',        'mstV-w|k,KdC14$HVSmm1>*o[%k/{^qIBpx/_Vj5_]W{xQ;q4;A=l#zS6yfR:H i');
define('AUTH_SALT',        '|$$qR4k|_2|;svxL/,1_G?S7D;ZAfE@iT8M-B^xD_v($?r:(Rqh,g2A| U/cFn,0');
define('SECURE_AUTH_SALT', '^WT<r3NZz|.jozjmt xqrbGjo}:@|iuK2Bcbv6]Wz/hdu(6kQyOY6V}Xt.<u&k:J');
define('LOGGED_IN_SALT',   '2m`qvKEHe5ySXi-C>-w[W19A@GS2h;Z 130R5ql&qu;@iI.R&4Rw1IW/pTmB2#jh');
define('NONCE_SALT',       '%on^%X5K[AFIol=D$i_?YC#MQY3/z32?iE_ag` GJi@rI_[x#i0n[=).*a*Js#/Z');

/**#@-*/

/**
 * WordPress 資料表前綴。
 *
 * 若您為每個 WordPress 設定不同的資料表前綴，則可在同個資料庫內安裝多個 WordPress。
 * 前綴只能使用半型數字、字母和底線！
 */
$table_prefix  = 'wp_';

/**
 * WordPress 自動儲存間隔
 *
 * 當您編輯文章時 WordPress 使用 Ajax 技術自動地定時幫您儲存文章草稿。
 * 您可更改數值以延長或減少自動儲存的時間間隔。
 * 預設儲存間隔為 60 秒。
 */
//define('AUTOSAVE_INTERVAL', 60 );  // 單位：秒

/**
 * WordPress 文章版本設定
 *
 * WordPress 預設會幫您儲存舊版的文章與分頁，以便您之後可以回復到先前的版本。
 * 這功能可關閉，或是指定最大版本數量。
 * 預設為開啟，若要關閉請將它設為 false。
 * 若您想指定指定最大版本數量，請設個整數。
 */
//define('WP_POST_REVISIONS', true );

/**
 * 快取
 *
 * 若 WP_CACHE 值為 true，當它執行 wp-settings.php 時會把 wp-content/advanced-cache.php 一起執行。
 * 許多快取外掛會要求您將這個值設為 true。
 */
//define('WP_CACHE', false);

/**
 * 啟用多網誌站台與網誌網路功能
 *
 * 若 WP_ALLOW_MULTISITE 值為 true 可啟用多網誌站台功能。
 */
//define('WP_ALLOW_MULTISITE', false);

/**
 * 開發人員用： WordPress 偵錯模式。
 *
 * 將此設定為 true 將可開啟開發時的通知顯示。
 * 強烈建議外掛與佈景主題開發人員使用 WP_DEBUG
 * 於他們的開發環境中。
 */
define('WP_DEBUG', false);

/* 設定完成，請儲存檔案。然後開始 Blogging 吧！ */

/** WordPress 目錄的絕對路徑。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 設定 WordPress 變數和包含的檔案。 */
require_once(ABSPATH . 'wp-settings.php');
