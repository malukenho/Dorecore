<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'abc' );
define( 'DB_NAME', 'Test_img' );
{
    // DBに取り込む画像のパス
　　$img_path = 'http://ecx.images-amazon.com/images/I/61vSkV4-rwL.jpg';//例として、この時一番売れてる本の画像にしておきました。
	 
    // データベースに接続
    $DB = mysql_connect( DB_HOST, DB_USER, DB_PASS );
    mysql_select_db( DB_NAME, $DB );
 
    // 画像の取得
    $image = file_get_contents( $img_path );
 
    // SQL文の作成
    $sql = sprintf( 'INSERT INTO upload (image ) VALUES ( "%s" )',
                    mysql_real_escape_string( $image ) );
　　
　　// SQL文の実行
    $result = mysql_query( $sql );
}
?>