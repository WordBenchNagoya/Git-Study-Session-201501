<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wbnagoya');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n<gIw}B(Z+y5xh~iL}+Fk_V!JclQ)},XcO9GTZ7_-HnKi+SUY`<Yr-Z.g%Ca3^{u');
define('SECURE_AUTH_KEY',  'bc-&GS{(,fly)^VqX<^Pv5[,HPPE{vmSG,RM{=5]4lt5 -`J1EV]K:=;F`RFiBd7');
define('LOGGED_IN_KEY',    '|sdjCLd2NG=%n)>|oL;dJC%AkdH5wWp-**<@Hio^{HU-G*f?d_Y|wBs7br&|Yg&+');
define('NONCE_KEY',        'MuhXf_%LHoh7(uZuVf/{<{f~)fT(nZo/[8?O[g<H|>(TOdXhAc{za6&DzDI};fND');
define('AUTH_SALT',        '4Sjf){NBJvD[B!t5RtBp@b)uJl1LXMa&lfnYho|S=<nDy9qLNsVZYX$9@||(&qg-');
define('SECURE_AUTH_SALT', '(45xz*lu(hbis{:FcEP,|_Ogw1TK`<g[w4F-l%kBvW@RU>^?v>SY[,CWhEIgXW}8');
define('LOGGED_IN_SALT',   ',NKX-=i6[`W|Gh= /_QZdW4FwC:h%E01(/Z6&BRzk*uRuabN>6Mt0V~tT<+ARZl$');
define('NONCE_SALT',       '@-ycaJ]aL3aCZ8~8XRe5K3zZ|]A+.1?j2lO=n~2P}/bb]=4sjHcy3^8ujn|bFMt$');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wbn_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
