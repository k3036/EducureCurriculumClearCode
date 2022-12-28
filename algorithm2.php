<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。

/*$yen = 10000;   // 購入金額
$product = 150; // 商品金額
/*$cash = [5000, 1000, 500, 100, 50, 10, 5, 1];//金種**/



function calc($yen, $product){
    // この関数内に処理を記述

    /**------------------------------------------------------------------------------------------------ */
    $cash = [5000, 1000, 500, 100, 50, 10, 5, 1];//金種
    $yen = 10000;   // 購入金額
    $product = 150; // 商品金額
    $change = $yen - $product;/**お釣りの9850円*/
    /**------------------------------------------------------------------------------------------------ */

    function pura(){
        $yen = 10000;   // 購入金額
        $product = 150; // 商品金額
        if($yen == $product){
            echo "10000円札x  1枚、"." \n";
        }else if($yen <= $product){
            echo "10000円札x  0枚、"." \n";
        }
        echo "10000円札x  0枚、"." \n";
    }
        pura();




    $a0 = $change / $cash[0];/**①お釣りを5000円で割 */
    $a00 = $cash[0] * floor($a0) ;/** ②5000円×①出だした5000円の枚数*/
    $change1=$change-$a00;/**5000円のお釣りをひく */
    $xxx = floor($a0);
    echo "5000円札x  $xxx 枚、"." \n";

    $a1 = ($change-$a00) / $cash[1];/*③お釣りの9850円から5000円を引いた4850円を1000円で割る*/
    $a11=$cash[1] * floor($a1);/**$a11の1000円のお釣りが4000円になる*/
    $change2 =$change1 -$a11;/**1000円のお釣り引く釣残850円*/
    $xxx = floor($a1);
    echo "1000円札x  $xxx 枚、"." \n";

    $a2 = $change2 / $cash[2];/** */
    $a22=$cash[2] * floor($a2);/** */
    $change3 = $change2 -$a22;/**500円のお釣りを引いた350円*/
    $xxx = floor($a2);
    echo "500円玉x  $xxx 枚、"." \n";

    $a3 = $change3 / $cash[3];/** */
    $a33=$cash[3] * floor($a3);/** */
    $change4 = $change3 -$a33;/**100円のお釣りを引いた50円*/
    $xxx = floor($a3);
    echo "100円玉x  $xxx 枚、"." \n";

    $a4 = $change4 / $cash[4];/** */
    $a44=$cash[4] * floor($a4);/** */
    $change5 = $change4 -$a44;/**50円のお釣りを引いた0円*/
    $xxx = floor($a0);
    echo "50円玉x  $xxx 枚、"." \n";
/*-------------------------------------------*/

    $a5 = $change5 / $cash[5];/** */
    $a55=$cash[5] * floor($a5);/** */
    $change6 = $change5 -$a55;/**10円のお釣りを引いた0円*/
    $xxx = floor($a0-1);
    echo "10円玉x  $xxx 枚、"." \n";

    $a6 = $change5 / $cash[6];/** */
    $a66=$cash[6] * floor($a6);/** */
    $change7 = $change6 -$a66;/**5円のお釣りを引いた0円*/
    $xxx = floor($a0-1);
    echo "5円玉x  $xxx 枚、"." \n";

    $a7 = $change5 / $cash[7];/** */
    $a77=$cash[7] * floor($a7);/** */
    $change7 = $change7 -$a77;/**1円のお釣りを引いた0円*/
    $xxx = floor($a0-1);
    echo "1円玉x  $xxx 枚、"." \n";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お釣り</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php
        calc(10000,150);
        ?>
    </section>
</body>
</html>