<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'sufli_db' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hK&~.uU<G|T@!ZV?1dzNi`,f2j=LML%+?BcDS|K~+ul#_QIb4EnUp%LR`dALZcrK' );
define( 'SECURE_AUTH_KEY',  '/JG&g:_-v}p-9`F)PNe#[+,d`!GIn=b}SO :d#0&nkxk-]cH(D2}-YT6w:,|2iiU' );
define( 'LOGGED_IN_KEY',    '6 5E<2 !yC(}{ttt5Tz+cqzPkLFF[B&Nz=mT|,U:bETZ+N,aBBW`@x]i]2rC58g!' );
define( 'NONCE_KEY',        'rG^^Ew~Zia6TeD{I=;V{Qga,n&@}u{}]ki]C>9Hvedhkk3JA}bKe=%T&E3y%QF^y' );
define( 'AUTH_SALT',        'Hb6NYoiU=iC^}]+H$.R%N24}60`4_[L9=.Vj<Xu-&nNd5r_[RIi&fM$B50?eAKd3' );
define( 'SECURE_AUTH_SALT', '3= )cE(2}.g4{q>.%a;*O)vY$.KE6(._[.0~DfqX#fh@jhlv5?Fhonvfnd5@/4~1' );
define( 'LOGGED_IN_SALT',   '88^a6Rm`__%:Ngos)=50Durt{#,Dm#4cfMVA<>z_Or6jtm?._LS%.JLqt1t9rePQ' );
define( 'NONCE_SALT',       'GY~nr~[EtdXiH$>wP1R33pw#PU4k1U(FL};?w6TyR9Ut6R1L4g*8l<&+`kipe(o)' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
