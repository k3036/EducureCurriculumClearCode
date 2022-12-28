<!DOCTYPE html>
<html lang="ja">
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
    <table>
<?php
/** 以下配列の中身をfor文を使用して表示してください。 */
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

/**多次元連想配列*/
    $arr = [/**=>がある場合はキーが数字じゃなく、''{クオーテーションの中の文字} になる*/
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];

'============-----------------------------------------------------------------';

'============-----------------------------------------------------------------';

$horizontalTotal = [
    'h1' => array_sum($arr['r1']),
    'h2' => array_sum($arr['r2']),
    'h3' => array_sum($arr['r3']),
];


$verticalTotal = [
    'c1' => array_sum(array_column($arr,'c1')),
    'c2' => array_sum(array_column($arr,'c2')),
    'c3' => array_sum(array_column($arr,'c3')),
];
/**echo "<td>"."</td>";*/  /**空白のセル */

            echo "<td>"."</td>";

            for($x = 'c1'; $x <= 'c3'; $x++){
                echo "<td>".$x."</td>";
            }

                echo "<td>"."横合計"."</td>";
                echo "<tr>";



            for($a = 'r1'; $a <= 'r1'; $a ++ ){/**１段目 */

                echo "<td>"."r1"."</tb>";
                for($b = 'c1'; $b <= 'c3'; $b++){
                    echo "<td>".$arr[$a][$b]."</td>";/**<td>でセルに入る */
                }
                echo "<td>".$horizontalTotal['h1']."</tb>";
            }
            echo "<tr>";


            for($a = 'r2'; $a <= 'r2'; $a ++ ){/**２段目 */
                echo "<td>"."r2"."</tb>";
                for($b = 'c1'; $b <= 'c3'; $b++){
                    echo "<td>".$arr[$a][$b]."</td>";/**<td>でセルに入る */
                }
                echo "<td>".$horizontalTotal['h2']."</tb>";
            }
            echo "<tr>";


            for($a = 'r3'; $a <= 'r3'; $a ++ ){/**３段目 */
                echo "<td>"."r3"."</tb>";
                for($b = 'c1'; $b <= 'c3'; $b++){
                    echo "<td>".$arr[$a][$b]."</td>";/**<td>でセルに入る */
                }
                echo "<td>".$horizontalTotal['h3']."</tb>";
            }
            echo "<tr>";


            for($a = 'r3'; $a <= 'r3'; $a ++ ){/**4段目 */
                echo "<td>"."縦合計"."</tb>";
                for($b = 'c1'; $b <= 'c3'; $b++){
                    echo "<td>".$verticalTotal[$b]."</td>";/**<td>でセルに入る */
                }
                echo "<td>".($verticalTotal['c1']+$verticalTotal['c2']+$verticalTotal['c3'])."</tb>";
            }


?>
</table>
</body>
</html>