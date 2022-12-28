<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください

date_default_timezone_set('Asia/Tokyo')."\n";
echo date("Y年m月d日 H時i分s秒")."\n";//現在日時（yyyy年mm月dd日 H時i分s秒）ok

date_default_timezone_set('Asia/Tokyo')."\n";
echo date("Y年m月d日 H時i分s秒",strtotime("+3 day"))."\n";// 現在日時から３日後ok
echo date("Y年m月d日 H時i分s秒",strtotime("-12 hour"))."\n";//現在日時から１２時間前ok

// ・2020年元旦から現在までの経過日数ok
$show_date = '2020-1-1';
$show_date_timestamp = strtotime($show_date);
$past_days = intval((abs(time() - $show_date_timestamp)) / (60 * 60 * 24));
echo $past_days."日";