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
define( 'DB_NAME', 'tungduongdemo' );

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
define( 'AUTH_KEY',         'oFf#j~Vw^R5!giKvIEh7%y~S9FcAS&l/7iz}Y<:2A@X)a9Ga`#HXiP6e,VlI@1Ga' );
define( 'SECURE_AUTH_KEY',  'aUw}X6--8hVJLtExK]J+-}[JE.} 2BupE]D>}SN;uO]mgw-sz/*P0.A#2DhsSL$d' );
define( 'LOGGED_IN_KEY',    '+?-O8x<.EQl>A{g[Ju .*5?G)<W$boKtHNXb3<;5yA,5WdKp#q9F}Y+P<fIQueIq' );
define( 'NONCE_KEY',        ']~;(V@$,j;A.R;W-zmSxT;L0JN$JB%rW<7-5yLU6}_2eAcXbaT:J1O4$X k5149@' );
define( 'AUTH_SALT',        'Q`_1.jTw^DFFIH/NunB(;}f>,/M62|tcI.;=4;:%>`D3}6cennH<Loq5.~x:UXrT' );
define( 'SECURE_AUTH_SALT', '^aT8lz4zq. j~5@uhEfa_X<0R ?Nn~IL8z]);3Palq/ G1FfD[SKq`=pT%3`ASZ+' );
define( 'LOGGED_IN_SALT',   'Y%&twZ|tpwjtU@+88u7Bu<n]Oj7{(e1,h| T7>iOIqz#Fie;kg-Tf6>2]sR^m-s3' );
define( 'NONCE_SALT',       '*h/|C@WULJZ{C%`3cdq%b}zQZ}-I ke~MxyMfHwuz/EY]il&HjGHCLz{{s`;)x~/' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
