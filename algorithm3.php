<!-- このプログラムを理解する。-->
<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は分数の足し算を行うプログラムです。
// calcFraction関数内に分子と分母を渡すと、分数の答えを返すプログラムを記載してください。

// 例えば
// 1/10 + 5/6 の場合、答えは 14/15
// 1/7 + 4/9 の場合、答えは 37/63
// 1/50 + 1/100 の場合、答えは 3/100
// となります。

// また通分には最小公約数を求める関数abc、約分には最大公約数を求める関数def をそれぞれ利用してください。

$bum1 = 1;  // 分子
$deno10 = 10; // 分母
$bum5 = 5;  // 分子
$deno6 = 6; // 分母


function calcFraction($bum1, $deno10, $bum5, $deno6) {

    $bum = ($bum1 * $deno6) + ($bum5 * $deno10);//$bum = ( 1 * 6 ) + ( 5 * 10 ) ;  56
    $deno = $deno10 * $deno6;                   //$deno = 10 * 6 ;                 60
    $abc = abc($bum, $deno);                   //$gcb = gcb ( 56 , 60 ); abc関数は最大公約数 4 を求める関数
    return [$bum / $abc, $deno / $abc];        //return [ 56 / 4 、60 / 4 ] ;→[ 14 , 15 ]最大公約数で割る。
}

//約数とは、ある整数を割り切ることのできる数。例えば４の約数は1,2,4です。6の約数は1,2,3,6です。


// 最大公約数 二つの数に共通する約数の中で最も大さいもの

function abc($a, $b){                           //abc関数は最大公約数を求める関数。
if($b > $a) list($a, $b) = array($b, $a);       //もし$bより$aの方が小さいとき、　　　　　　　　　　
                                                // list関数は配列の値を変数として、指定した順番に格納するときに使用します。
                                                //array関数は、配列を生成する。
while($b != 0) {                               //while文について確認します。while文は指定した条件式が真(true)の間、繰り返し実行します。
    $tmp_n = $b;
    $b = $a % $b;                              //余りのある割り算
    $a = $tmp_n;                               // $a = $tmp_n = $b
}
return $a;                                     //$aを返す
}

// 最小公倍数　二つの数に共通する倍数の中で最も小さいもの
function def($a, $b){                           /*最小公倍数を求める def 関数*/
  return $a * $b / abc($a, $b);                 /*abc関数は最大公約数を求める関数。*/
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>分数の足し算プログラム</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <p><?php printf('%d / %d + %d / %d ', $bum1, $deno10, $bum5, $deno6); ?></p>                 <!--  %dは10進数。10進数とは「10」になると桁上がりする数字のこと  -->
        <p>答えは <?php vprintf('%d / %d', calcFraction($bum1, $deno10, $bum5, $deno6)); ?>です</p>   <!-- vprintf — フォーマット媒体を使って文字列を出力する-->
        <!--<p><?php vprintf('%d / %d',calcFraction(10, 40, 55, 90)); ?></p>-->
        <!--<?php vprintf('%d / %d',calcFraction(20,99,88,77)); ?> -->
    </section>
</body>
</html>