<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。


function kubetu($x){
    $point=[10,60,90,70,50];
    if ($point[$x]>=80) {
        echo "「優」"."\n";
    } elseif ($point[$x]>=60) {
        echo "「良」"."\n";
    } elseif ($point[$x]>=40) {
        echo "「可」"."\n";
    }else if($point[$x]<=39){
        echo "「不可」"."\n";
    }
}

kubetu(0)."\n";
kubetu(1)."\n";
kubetu(2)."\n";
kubetu(3)."\n";
kubetu(4)."\n";