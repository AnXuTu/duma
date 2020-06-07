<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'dume' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':Wp,xd`hMV~z^;}O8KAl_C>lREzJ]DLpD_r9B_<)K-tu:vY7w6xXQ>]H2H`hni+h' );
define( 'SECURE_AUTH_KEY',  'kQ)EvgF]i2t3XRv^5ql8yU3v<i6gS(C {B}3{zagySbN_z2Z2|u,L)b>f},!DL^$' );
define( 'LOGGED_IN_KEY',    '#8h!;b$>NGrn$|vs+G[Q2z@^Vxe[x{s%P}QSZGq8sQ%i.;1{}*F?!3fdYikF!S8e' );
define( 'NONCE_KEY',        '<h>CWV}35c$Qln@-q,>z:%NT/M1hRoD6ucHvLFN,qpT<bM6vI+bjEBWS}-:0cK57' );
define( 'AUTH_SALT',        'g12JY&!/gtbIB)yyG1xAYiAq7A4$SKn@7 GaPSxR7K%fb(-7*VD>J*%^3xh2)8pc' );
define( 'SECURE_AUTH_SALT', '(L]{q4wuTcc>op>].WMS2x7N{QsiX>D?B+7)z>S?Y2D${@pWTMN6}L2z16pQYNMR' );
define( 'LOGGED_IN_SALT',   'EnQBMX]2$SNCK`d$6OnuS7)d,<v6+!E4hf.6u>ReFYFty!U=NWVuuBM*nQmltKLh' );
define( 'NONCE_SALT',       'k/LF;_svFl762-0@oAFN[ixwvt3+M}KWkd2,JhM%JdZ*s+(sZnNMl#FD0..kv1tL' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
