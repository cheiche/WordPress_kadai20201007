<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{.!*}.x?C1OrnCE+U7):LjGRw6fe:hIfP)4@AJ}Qas]`OgfOBX@Qk*g7tP&$(b k' );
define( 'SECURE_AUTH_KEY',  '5Jfa;i0?]`KJ}yEMa&$KX0+~zadR>aN<^aBn@:ghWeKNQdkVCU,,I1HC^Xk})/v8' );
define( 'LOGGED_IN_KEY',    'D%+Al*VZ9Wvh/evGZG8H+Z+#8(;hVZ>*66,]r/V+vG|i]xYU(K%-a.a5@}T~FY@h' );
define( 'NONCE_KEY',        '? sSg(u=kYF4G3[ap`YFm9$4_gWJh1P)T*YVbLOKl<leIn!j vA96>Eo5X+!BP<X' );
define( 'AUTH_SALT',        '?W:TRtvzY4f<$Cuz4qYo8xa#{z6G*AT%J_PNQ3=X/J{r_=XeJ~^#st*_msr5F9%o' );
define( 'SECURE_AUTH_SALT', '5]}t80k)Ab!Xq@rIqJAHp:hT]Bh9kY#nxFW4~_, 3. K[=((cf3$*B!.Mc|d?~wm' );
define( 'LOGGED_IN_SALT',   'zTKb<RJ#Bri`b-G=eI0kUW8Tv&Fw<S3Js1d>Ngd=,PV$XbFhYgLTC|:8_S]i$&2.' );
define( 'NONCE_SALT',       '_68JQv0A2n1 NUdz^ep>ob|w1@iH{NL5qd4WfHJ4COTy%n][VjlWaEx9roNh9,i)' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
