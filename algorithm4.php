<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下はポーカーの役を判定するプログラムです。
// cards配列に格納したカードの役を判定し、結果表示してください。
// cards配列には計5枚、それぞれ絵柄(suit)、数字(numeber)を格納する
// 絵柄はheart, spade, diamond, clubのみ
// 数字は1-13のみ

// 上記以外の絵柄や数字が存在した場合、または同一の絵柄、数字がcards配列に存在した場合、
// 役の判定前に「手札が不正です」と表示してください。
// 役判定は関数に記述し、関数を呼び出して結果表示すること
// プログラムが完成したらcards配列を差し替えてすべての役で検証を行い、提出時にテストケースを示すこと

// <役>
// ワンペア・・・同じ数字２枚（ペア）が１組
// ツーペア・・・同じ数字２枚（ペア）が２組
// スリーカード・・・同じ数字３枚
// ストレート・・・数字の連番５枚（13と1は繋がらない）
// フラッシュ・・・同じマークが５枚
// フルハウス・・・同じ数字３枚が１組＋同じ数字２枚（ペア）が１組
// フォーカード・・・同じ数字４枚
// ストレートフラッシュ・・・数字の連番５枚＋同じマークが５枚
// ロイヤルストレートフラッシュ・・・1, 10, 11, 12, 13で同じマーク
// ※下の方が強い

// 表示例1）
// 手札は
// heart2 heart5 heart3 heart4 club1
// 役はストレートです

// 表示例2）
// 手札は
// heart1 spade2 diamond11 club13 heart9
// 役はなしです

// 表示例3）
// 手札は
// heart1 heart1 heart3 heart4 heart5
// 手札は不正です




$cards = [
    ['suit'=>'heart', 'number'=>1],
    ['suit'=>'heart', 'number'=>2],
    ['suit'=>'heart', 'number'=>3],
    ['suit'=>'heart', 'number'=>4],
    ['suit'=>'heart', 'number'=>5],
];



/*
$card00 = $cards[0]['suit'] . $cards[0]['number']."\n" ;
$card11 = $cards[1]['suit'] . $cards[1]['number']."\n" ;
$card22 = $cards[2]['suit'] . $cards[2]['number']."\n" ;
$card33 = $cards[3]['suit'] . $cards[3]['number']."\n" ;
$card44 = $cards[4]['suit'] . $cards[4]['number']."\n" ;


$numberRandom0 = mt_rand(1, 13);
$numberRandom1 = mt_rand(1, 13);
$numberRandom2 = mt_rand(1, 13);
$numberRandom3 = mt_rand(1, 13);
$numberRandom4 = mt_rand(1, 13);

$suitRandom0 = mt_rand(0, 3);
$suitRandom1 = mt_rand(0, 3);
$suitRandom2 = mt_rand(0, 3);
$suitRandom3 = mt_rand(0, 3);
$suitRandom4 = mt_rand(0, 3);

$mark =[ 'club' , 'diamond' , 'heart' , 'spade' ] ;


$cards = [
['suit'=>$mark[$suitRandom0] , 'number'=>$numberRandom0],
['suit'=>$mark[$suitRandom1] , 'number'=>$numberRandom1],
['suit'=>$mark[$suitRandom2] , 'number'=>$numberRandom2],
['suit'=>$mark[$suitRandom3] , 'number'=>$numberRandom3],
['suit'=>$mark[$suitRandom4] , 'number'=>$numberRandom4],
];

*/









/*
エラー原因
if($cards[0]['number']=$cards[1]['number'] && $cards[1]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number']){
    echo"ストレート" ;
}
*/

/*
if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[2]['number']==13 && $cards[3]['number']==11 && $cards[4]['number']==12 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
    echo "ロイヤルストレー,,,,,,,,トフラッシュ";
}
*/



/*
echo $cards [0]['suit'] && $cards [0]['suit'] ."</br>" ; 1

echo $cards [0]['suit'] && $cards [0]['suit'] ."</br>" ; 1

echo $cards [0]['suit'] && $cards [0]['suit'] ."</br>" ; 1

*/









function A($cards){
    if ($cards[0]['suit'] . $cards[0]['number'] = $cards[1]['suit'] . $cards[1]['number']) {
        echo "不正" ;
    } elseif ($cards[0]['suit'] . $cards[0]['number'] = $cards[2]['suit'] . $cards[2]['number']) {
        echo "不正" ;
    } elseif ($cards[0]['suit'] . $cards[0]['number'] = $cards[3]['suit'] . $cards[3]['number']) {
        echo "不正" ;
    } elseif ($cards[0]['suit'] . $cards[0]['number'] = $cards[4]['suit'] . $cards[4]['number']) {
        echo "不正" ;
    } elseif ($cards[1]['suit'] . $cards[1]['number'] = $cards[2]['suit'] . $cards[2]['number']) {
        echo "不正" ;
    } elseif ($cards[1]['suit'] . $cards[1]['number'] = $cards[3]['suit'] . $cards[3]['number']) {
        echo "不正" ;
    } elseif ($cards[1]['suit'] . $cards[1]['number'] = $cards[4]['suit'] . $cards[4]['number']) {
        echo "不正" ;
    } elseif ([2]['suit'] . $cards[2]['number'] = $cards[3]['suit'] . $cards[3]['number']) {
        echo "不正" ;
    } elseif ([2]['suit'] . $cards[2]['number'] = $cards[4]['suit'] . $cards[4]['number']) {
        echo "不正" ;
    } elseif ($cards[3]['suit'] . $cards[3]['number'] = $cards[4]['suit'] . $cards[4]['number']) {
        echo "不正" ;
    }
}


$card0Number = $cards[0]['number'] ."\n";
$card1Number = $cards[1]['number'] ."\n" ;
$card2Number = $cards[2]['number'] ."\n" ;
$card3Number = $cards[3]['number'] ."\n" ;
$card4Number = $cards[4]['number'] ."\n";


$card0Suit = $cards[0]['suit'];
$card1Suit = $cards[1]['suit'];
$card2Suit = $cards[2]['suit'];
$card3Suit = $cards[3]['suit'];
$card4Suit = $cards[4]['suit'];


$card00 = $cards[0]['suit'] . $cards[0]['number'] ;
$card11 = $cards[1]['suit'] . $cards[1]['number'] ;
$card22 = $cards[2]['suit'] . $cards[2]['number'] ;
$card33 = $cards[3]['suit'] . $cards[3]['number'] ;
$card44 = $cards[4]['suit'] . $cards[4]['number'] ;

function oneTwoPear($cards){
    $card00 = $cards[0]['suit'] . $cards[0]['number'] ;
    $card11 = $cards[1]['suit'] . $cards[1]['number'] ;
    $card22 = $cards[2]['suit'] . $cards[2]['number'] ;
    $card33 = $cards[3]['suit'] . $cards[3]['number'] ;
    $card44 = $cards[4]['suit'] . $cards[4]['number']."Hello" ;

$cards ;
echo "役は"."\n" ;

if($cards[0]['suit'] && $cards[0]['number'] == $cards[1]['suit'] && [1]['number']){
    echo "不正";
}
else if ($cards[0]['number'] != 1 && $cards[0]['number'] != 2&& $cards[0]['number'] != 3&& $cards[0]['number'] != 4&& $cards[0]['number'] != 5&& $cards[0]['number'] != 6&& $cards[0]['number'] != 7&& $cards[0]['number'] != 8&& $cards[0]['number'] != 9&& $cards[0]['number'] != 10&& $cards[0]['number'] != 11&& $cards[0]['number'] != 12&& $cards[0]['number'] != 13){
    echo "不正" ;
} else if ($cards[1]['number'] != 1 && $cards[1]['number'] != 2&& $cards[1]['number'] != 3&& $cards[1]['number'] != 4&& $cards[1]['number'] != 5&& $cards[1]['number'] != 6&& $cards[1]['number'] != 7&& $cards[1]['number'] != 8&& $cards[1]['number'] != 9&& $cards[1]['number'] != 10&& $cards[1]['number'] != 11&& $cards[1]['number'] != 12&& $cards[1]['number'] != 13){
    echo "不正" ;
} else if ($cards[2]['number'] != 1 && $cards[2]['number'] != 2&& $cards[2]['number'] != 3&& $cards[2]['number'] != 4&& $cards[2]['number'] != 5&& $cards[2]['number'] != 6&& $cards[2]['number'] != 7&& $cards[2]['number'] != 8&& $cards[2]['number'] != 9&& $cards[2]['number'] != 10&& $cards[2]['number'] != 11&& $cards[2]['number'] != 12&& $cards[2]['number'] != 13){
echo "不正" ;
}else if ($cards[3]['number'] != 1 && $cards[3]['number'] != 2&& $cards[3]['number'] != 3&& $cards[3]['number'] != 4&& $cards[3]['number'] != 5&& $cards[3]['number'] != 6&& $cards[3]['number'] != 7&& $cards[3]['number'] != 8&& $cards[3]['number'] != 9&& $cards[3]['number'] != 10&& $cards[3]['number'] != 11&& $cards[3]['number'] != 12&& $cards[3]['number'] != 13){
    echo "不正" ;
}else if ($cards[4]['number'] != 1 && $cards[4]['number'] != 2&& $cards[4]['number'] != 3&& $cards[4]['number'] != 4&& $cards[4]['number'] != 5&& $cards[4]['number'] != 6&& $cards[4]['number'] != 7&& $cards[4]['number'] != 8&& $cards[4]['number'] != 9&& $cards[4]['number'] != 10&& $cards[4]['number'] != 11&& $cards[4]['number'] != 12&& $cards[4]['number'] != 13){
    echo "不正" ;
}else if ($cards[4]['number'] != 1 && $cards[4]['number'] != 2&& $cards[4]['number'] != 3&& $cards[4]['number'] != 4&& $cards[4]['number'] != 5&& $cards[4]['number'] != 6&& $cards[4]['number'] != 7&& $cards[4]['number'] != 8&& $cards[4]['number'] != 9&& $cards[4]['number'] != 10&& $cards[4]['number'] != 11&& $cards[4]['number'] != 12&& $cards[4]['number'] != 13){
    echo "不正" ;
}
else if($cards[0]['suit'] !='heart' && $cards[0]['suit'] != 'spade' &&  $cards[0]['suit'] != 'diamond' &&  $cards[0]['suit'] !='club' ){
    echo "不正" ;
}else if($cards[1]['suit'] !='heart' && $cards[1]['suit'] != 'spade' &&  $cards[1]['suit'] != 'diamond' &&  $cards[1]['suit'] !='club' ){
    echo "不正" ;
}else if($cards[2]['suit'] !='heart' && $cards[2]['suit'] != 'spade' &&  $cards[2]['suit'] != 'diamond' &&  $cards[2]['suit'] !='club' ){
    echo "不正" ;
}else if($cards[3]['suit'] !='heart' && $cards[3]['suit'] != 'spade' &&  $cards[3]['suit'] != 'diamond' &&  $cards[3]['suit'] !='club' ){
    echo "不正" ;
}else if($cards[4]['suit'] !='heart' && $cards[4]['suit'] != 'spade' &&  $cards[4]['suit'] != 'diamond' &&  $cards[4]['suit'] !='club' ){
    echo "不正" ;
}
else  if($cards[0]['suit'] . $cards[0]['number'] == $cards[1]['suit'] . $cards[1]['number']){
    echo "不正" ;
}else if ($cards[0]['suit'] . $cards[0]['number'] == $cards[2]['suit'] . $cards[2]['number']){
    echo "不正" ;
}else if($cards[0]['suit'] . $cards[0]['number'] == $cards[3]['suit'] . $cards[3]['number']){
    echo "不正" ;
}else if ($cards[0]['suit'] . $cards[0]['number'] == $cards[4]['suit'] . $cards[4]['number']){
    echo "不正" ;
}else if ($cards[1]['suit'] . $cards[1]['number'] == $cards[2]['suit'] . $cards[2]['number']){
    echo "不正" ;
}else if ($cards[1]['suit'] . $cards[1]['number'] == $cards[3]['suit'] . $cards[3]['number']){
    echo "不正" ;
}else if ($cards[1]['suit'] . $cards[1]['number']== $cards[4]['suit'] . $cards[4]['number']){
    echo "不正" ;
}else if ($cards[2]['suit'] . $cards[2]['number'] == $cards[3]['suit'] . $cards[3]['number']){
    echo "不正" ;
}else if ($cards[2]['suit'] . $cards[2]['number'] == $cards[4]['suit'] . $cards[4]['number']){
    echo "不正" ;
}else if ($cards[3]['suit'] . $cards[3]['number'] == $cards[4]['suit'] . $cards[4]['number']){
    echo "不正" ;
}else if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[2]['number']==11 && $cards[3]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
    echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 10 && $cards[1]['number']==13 && $cards[2]['number']==12 && $cards[3]['number']==11 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 10 && $cards[1]['number']==11 && $cards[2]['number']==12 && $cards[3]['number']==13 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 10 && $cards[1]['number']==13 && $cards[2]['number']==12 && $cards[3]['number']==11 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 10 && $cards[1]['number']==11 && $cards[2]['number']==12 && $cards[3]['number']==13 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 10 && $cards[2]['number']==11 && $cards[0]['number']==12 && $cards[1]['number']==13 && $cards[3]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[3]['number']== 10 && $cards[2]['number']==11 && $cards[0]['number']==12 && $cards[1]['number']==13 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[3]['number']== 10 && $cards[0]['number']==11 && $cards[2]['number']==12 && $cards[1]['number']==13 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 10 && $cards[0]['number']==11 && $cards[2]['number']==12 && $cards[1]['number']==13 && $cards[3]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 10 && $cards[0]['number']==11 && $cards[1]['number']==12 && $cards[2]['number']==13 && $cards[3]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 10 && $cards[0]['number']==11 && $cards[4]['number']==12 && $cards[2]['number']==13 && $cards[3]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 10 && $cards[0]['number']==11 && $cards[2]['number']==12 && $cards[4]['number']==13 && $cards[3]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 10 && $cards[1]['number']==11 && $cards[4]['number']==12 && $cards[2]['number']==13 && $cards[3]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 10 && $cards[1]['number']==11 && $cards[3]['number']==12 && $cards[2]['number']==13 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 10 && $cards[1]['number']==11 && $cards[2]['number']==12 && $cards[3]['number']==13 && $cards[0]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[3]['number']== 10 && $cards[1]['number']==11 && $cards[2]['number']==12 && $cards[0]['number']==13 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[3]['number']==10 && $cards[2]['number']==11 && $cards[1]['number']==12 && $cards[0]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[2]['number']==10 && $cards[0]['number']==11 && $cards[1]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[3]['number']==10 && $cards[0]['number']==11 && $cards[1]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[2]['number']== 1 && $cards[4]['number']==10 && $cards[0]['number']==11 && $cards[1]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[2]['number']== 1 && $cards[4]['number']==10 && $cards[0]['number']==11 && $cards[1]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 1 && $cards[4]['number']==10 && $cards[0]['number']==11 && $cards[2]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[3]['number']==10 && $cards[4]['number']==11 && $cards[2]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 1 && $cards[3]['number']==10 && $cards[4]['number']==11 && $cards[0]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[3]['number']==10 && $cards[1]['number']==11 && $cards[0]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[3]['number']== 1 && $cards[4]['number']==10 && $cards[1]['number']==11 && $cards[0]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[2]['number']==10 && $cards[1]['number']==11 && $cards[0]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[2]['number']==10 && $cards[0]['number']==11 && $cards[3]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[0]['number']==10 && $cards[2]['number']==11 && $cards[3]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[4]['number']==10 && $cards[2]['number']==11 && $cards[3]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[0]['number']==10 && $cards[3]['number']==11 && $cards[1]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[3]['number']==10 && $cards[4]['number']==11 && $cards[1]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[2]['number']==10 && $cards[1]['number']==11 && $cards[3]['number']==12 && $cards[0]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[2]['number']==10 && $cards[3]['number']==11 && $cards[1]['number']==12 && $cards[0]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[2]['number']== 1 && $cards[4]['number']==10 && $cards[3]['number']==11 && $cards[1]['number']==12 && $cards[0]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 1 && $cards[2]['number']==10 && $cards[3]['number']==11 && $cards[4]['number']==12 && $cards[0]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[2]['number']==10 && $cards[3]['number']==11 && $cards[4]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[3]['number']== 1 && $cards[2]['number']==10 && $cards[0]['number']==11 && $cards[4]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[3]['number']== 1 && $cards[0]['number']==10 && $cards[2]['number']==11 && $cards[4]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[2]['number']==10 && $cards[1]['number']==11 && $cards[4]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[3]['number']==10 && $cards[1]['number']==11 && $cards[4]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[1]['number']==10 && $cards[0]['number']==11 && $cards[3]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[2]['number']== 1 && $cards[1]['number']==10 && $cards[0]['number']==11 && $cards[3]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[2]['number']== 1 && $cards[1]['number']==10 && $cards[0]['number']==11 && $cards[4]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 1 && $cards[2]['number']==10 && $cards[0]['number']==11 && $cards[4]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 1 && $cards[3]['number']==10 && $cards[0]['number']==11 && $cards[2]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[4]['number']==11 && $cards[3]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 1 && $cards[3]['number']==10 && $cards[0]['number']==11 && $cards[4]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[3]['number']==10 && $cards[1]['number']==11 && $cards[2]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[4]['number']==11 && $cards[2]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[3]['number']==11 && $cards[2]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[4]['number']==10 && $cards[3]['number']==11 && $cards[2]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[4]['number']==10 && $cards[2]['number']==11 && $cards[1]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[2]['number']==11 && $cards[3]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[2]['number']==10 && $cards[4]['number']==11 && $cards[3]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[2]['number']== 1 && $cards[1]['number']==10 && $cards[3]['number']==11 && $cards[4]['number']==12 && $cards[0]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[3]['number']== 1 && $cards[1]['number']==10 && $cards[2]['number']==11 && $cards[4]['number']==12 && $cards[0]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[4]['number']== 1 && $cards[1]['number']==10 && $cards[2]['number']==11 && $cards[3]['number']==12 && $cards[0]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[4]['number']==10 && $cards[3]['number']==11 && $cards[1]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[4]['number']==10 && $cards[1]['number']==11 && $cards[3]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[1]['number']== 1 && $cards[4]['number']==10 && $cards[0]['number']==11 && $cards[3]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }

    else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[4]['number']&& $cards[4]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']&& $cards[0]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[4]['number']&& $cards[4]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[1]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[3]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[2]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[1]['number']&& $cards[1]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[2]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[1]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }else if ($cards[4]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
        echo "ストレートフラッシュ" ;
    }




    else if ($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number']&& $cards[0]['number']==$cards[3]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number']&& $cards[0]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number']&& $cards[1]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[2]['number']==$cards[1]['number'] && $cards[2]['number']==$cards[3]['number']&& $cards[2]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[3]['number']&& $cards[3]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }
    else if($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number'] &&  $cards[3]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[3]['number']  &&  $cards[2]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[4]['number']  &&  $cards[2]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number']  &&  $cards[0]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[3]['number']==$cards[2]['number'] && $cards[4]['number']==$cards[3]['number']  &&  $cards[0]['number']==$cards[1]['number']){
        echo "フルハウス" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number']  &&  $cards[3]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[2]['number']  &&  $cards[2]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[1]['number']==$cards[3]['number'] && $cards[0]['number']==$cards[2]['number']  &&  $cards[0]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[4]['number']  &&  $cards[1]['number']==$cards[3]['number']){
        echo "フルハウス" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[3]['number']  &&  $cards[1]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }
    else if($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[3]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number'] ){
        echo "スリーカード" ;
    }else if($cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[1]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[2]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[1]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[3]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[3]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }
    else if($cards[0]['number']==$cards[1]['number'] && $cards[2]['number']==$cards[3]['number'] ){
        echo "ツーペア" ;
    }else if($cards[1]['number']==$cards[2]['number'] && $cards[3]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[2]['number']==$cards[3]['number'] && $cards[4]['number']==$cards[0]['number'] ){
        echo "ツーペア" ;
    }else if($cards[3]['number']==$cards[4]['number'] && $cards[0]['number']==$cards[1]['number'] ){
        echo "ツーペア" ;
    }else if($cards[4]['number']==$cards[0]['number'] && $cards[1]['number']==$cards[2]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[1]['number'] && $cards[4]['number']==$cards[2]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[3]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[4]['number'] && $cards[1]['number']==$cards[3]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[2]['number']==$cards[4]['number'] && $cards[1]['number']==$cards[3]['number'] ){
        echo "ツーペア" ;
    }else if($cards[1]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }

    else if($cards[0]['number']==$cards[1]['number'] ){
        echo "ワンペア" ;
    }else if($cards[0]['number']==$cards[2]['number']){
        echo "ワンペア" ;
    }else if($cards[0]['number']==$cards[3]['number']){
        echo "ワンペア" ;
    }else if($cards[0]['number']==$cards[4]['number']){
        echo "ワンペア" ;
    }else if($cards[1]['number']==$cards[2]['number']){
        echo "ワンペア" ;
    }else if($cards[1]['number']==$cards[3]['number']){
        echo "ワンペア" ;
    }else if($cards[1]['number']==$cards[4]['number']){
        echo "ワンペア" ;
    }else if($cards[2]['number']==$cards[3]['number']){
        echo "ワンペア" ;
    }else if($cards[2]['number']==$cards[4]['number']){
        echo "ワンペア" ;
    }else if($cards[3]['number']==$cards[4]['number']){
        echo "ワンペア" ;
    }
    else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    } else if($cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }
    else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }
    else if($cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }
    else if($cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }
    else if($cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }
    else if($cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }

    else if($cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }
    else if($cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }
    else if($cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }
    else if($cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }
    else if($cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }
    else if($cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }
    else if($cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }
    else if($cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }
    else if($cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }
    else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[3]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']) {
        echo "ストレート" ;
    }else if ($cards[2]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[4]['number']&& $cards[4]['number']+1==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number']) {
        echo "ストレート" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number']) {
        echo "ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number'] && $cards[4]['number']+1 == $cards[2]['number'] && $cards[2]['number']+1 ==$cards[3]['number'] && $cards[3]['number']+1==$cards[1]['number']){
        echo "ストレート";
    }else if($cards[0]['number']+1==$cards[1]['number'] && $cards[1]['number']+1 == $cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[2]['number']){
        echo "ストレート";
    }else if ($cards[1]['number'] +1 ==$cards[0]['number'] && $cards[0]['number'] +1 ==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number']&& $cards[2]['number']+1==$cards[4]['number']) {
        echo "ストレート" ;
    }else if($cards[0]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1== $cards[4]['number'] && $cards[4]['number']+1 ==$cards[2]['number'] && $cards[2]['number']+1==$cards[3]['number']){
        echo "ストレート" ;
    }else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[4]['number'] && $cards[4]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[3]['number']){
        echo "ストレート" ;
    }else if($cards[0]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[3]['number'] && $cards[3]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[4]['number'] && $cards[4]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[4]['number'] && $cards[4]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[4]['number'] && $cards[4]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[0]['number'] && $cards[0]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[0]['number'] && $cards[0]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[3]['number'] && $cards[3]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[0]['number'] && $cards[0]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[3]['number'] && $cards[3]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[3]['number'] && $cards[3]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[0]['number'] && $cards[0]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number'] && $cards[1]['number'] +1== $cards[0]['number'] && $cards[0]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[4]['number'] && $cards[4]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[4]['number'] && $cards[4]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number'] +1== $cards[2]['number'] && $cards[2]['number']+1==$cards[0]['number'] && $cards[0]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[1]['number'] && $cards[1]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[0]['number'] && $cards[0]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[2]['number'] && $cards[2]['number'] +1== $cards[0]['number'] && $cards[0]['number']+1==$cards[1]['number'] && $cards[1]['number']+1==$cards[4]['number']){
        echo "ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number'] && $cards[0]['number'] +1== $cards[3]['number'] && $cards[3]['number']+1==$cards[4]['number'] && $cards[4]['number']+1==$cards[1]['number']){
        echo "ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number'] && $cards[4]['number']+1== $cards[0]['number'] && $cards[0]['number']+1==$cards[3]['number'] && $cards[3]['number']+1==$cards[2]['number']){
        echo "ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number'] && $cards[0]['number']+1== $cards[3]['number'] && $cards[3]['number']+1==$cards[2]['number'] && $cards[2]['number']+1==$cards[4]['number']){
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number'] && $cards[2]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[3]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[3]['number'] && $cards[3]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[4]['number']&& $cards[4]['number']+1==$cards[2]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[4]['number'] && $cards[4]['number'] +1 ==$cards[0]['number']&& $cards[0]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[2]['number']) {
        echo "ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }
    else if ($cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']&&$cards[0]['number'] != $cards[1]['number'] && $cards[1]['number'] != $cards[2]['number'] && $cards[2]['number'] != $cards[3]['number'] && $cards[3]['number'] != $cards[4]['number'] ) {
        echo "フラッシュ" ;
    }
    else {
        echo "無し" ;
    }
}
function judge($cards) {
    // この関数内に処理を記述
    oneTwoPear($cards) ;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ポーカー役判定</title>
</head>
<body>
    <section>
        <p>手札は</p>
    <?php
$CardsInHand0 = $card4Suit.$card4Number."\n" ;
$CardsInHand1 = $card0Suit.$card0Number."\n" ;
$CardsInHand2 = $card1Suit.$card1Number."\n" ;
$CardsInHand3 = $card2Suit.$card2Number."\n" ;
$CardsInHand4 = $card3Suit.$card3Number."\n" ;


if($cards[0]['number']<=$cards[4]['number'] && $cards[4]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[1]['number']){
    echo $card00.$card44.$card22.$card33.$card11."</br>";
}

else if ($card4Number <= $card3Number && $card3Number <= $card2Number && $card2Number <=$card1Number &&$card1Number <= $card0Number) {
    echo $CardsInHand0 . $CardsInHand4 . $CardsInHand3 .$CardsInHand2 .$CardsInHand1 ;
}else if($card4Number <= $card2Number && $card2Number <= $card3Number && $card3Number <=$card1Number &&$card1Number <= $card0Number) {
    echo $CardsInHand0 . $CardsInHand3 . $CardsInHand4 .$CardsInHand2 .$CardsInHand1 ;
}else if($card0Number <= $card3Number && $card3Number <= $card2Number && $card2Number <=$card1Number &&$card1Number <= $card4Number) {
    echo $CardsInHand1 . $CardsInHand4 . $CardsInHand3 .$CardsInHand2 .$CardsInHand0 ;
}else if($card1Number <= $card0Number && $card0Number <= $card4Number && $card4Number <=$card3Number &&$card3Number <= $card2Number) {
    echo $CardsInHand2 . $CardsInHand1 . $CardsInHand0 .$CardsInHand4 .$CardsInHand3 ;
}else if($card3Number <= $card2Number && $card2Number <= $card1Number && $card1Number <=$card0Number &&$card0Number <= $card4Number) {
    echo $CardsInHand4 . $CardsInHand3 . $CardsInHand2 .$CardsInHand1 .$CardsInHand0 ;
}else if($card1Number <= $card4Number && $card4Number <= $card3Number && $card3Number <=$card2Number &&$card2Number <= $card0Number) {
    echo $CardsInHand2 . $CardsInHand0 . $CardsInHand4 .$CardsInHand3 .$CardsInHand1 ;
}else if($card1Number <= $card4Number && $card4Number <= $card3Number && $card3Number <=$card2Number &&$card2Number <= $card0Number) {
    echo $CardsInHand2 . $CardsInHand0 . $CardsInHand4 .$CardsInHand3 .$CardsInHand1 ;
}else if($card3Number <= $card1Number && $card1Number <= $card0Number && $card0Number <=$card4Number &&$card4Number <= $card2Number) {
    echo $CardsInHand4 . $CardsInHand2 . $CardsInHand1 .$CardsInHand0 .$CardsInHand3 ;
}else if($card1Number <= $card0Number && $card0Number <= $card2Number && $card2Number <=$card3Number &&$card3Number <= $card4Number) {
    echo $CardsInHand2 . $CardsInHand1 . $CardsInHand3 .$CardsInHand4 .$CardsInHand0 ;
}else if($card0Number <= $card2Number && $card2Number <= $card3Number && $card3Number <=$card4Number &&$card4Number <= $card1Number) {
    echo  $CardsInHand1 .$CardsInHand3 .$CardsInHand4 .$CardsInHand0.$CardsInHand2  ;
}else if($card0Number <= $card3Number && $card3Number <= $card2Number && $card2Number <=$card4Number &&$card4Number <= $card1Number) {
    echo  $CardsInHand1 .$CardsInHand4 .$CardsInHand3 .$CardsInHand0.$CardsInHand2  ;
}else if($card0Number <= $card3Number && $card3Number <= $card2Number && $card2Number <=$card4Number &&$card4Number <= $card1Number) {
    echo  $CardsInHand1 .$CardsInHand4 .$CardsInHand3 .$CardsInHand0.$CardsInHand2  ;
}else if($card1Number <= $card2Number && $card2Number <= $card3Number && $card3Number <=$card0Number &&$card0Number <= $card4Number) {
    echo  $CardsInHand2 .$CardsInHand3 .$CardsInHand4 .$CardsInHand1 .$CardsInHand0  ;
}else if($card1Number <= $card3Number && $card3Number <= $card2Number && $card2Number <=$card0Number &&$card0Number <= $card4Number) {
    echo  $CardsInHand2 .$CardsInHand4 .$CardsInHand3 .$CardsInHand1 .$CardsInHand0  ;
}else if($card1Number <= $card3Number && $card3Number <= $card4Number && $card4Number <=$card0Number &&$card0Number <= $card2Number) {
    echo  $CardsInHand2 .$CardsInHand4 .$CardsInHand0 .$CardsInHand1 .$CardsInHand3  ;
}else if($card1Number <= $card3Number && $card3Number <= $card4Number && $card4Number <=$card0Number &&$card0Number <= $card2Number) {
    echo  $CardsInHand2 .$CardsInHand4 .$CardsInHand0 .$CardsInHand1 .$CardsInHand3  ;
}else if($card1Number <= $card4Number && $card4Number <= $card3Number && $card3Number <=$card0Number &&$card0Number <= $card2Number) {
    echo  $CardsInHand2 .$CardsInHand0 .$CardsInHand4 .$CardsInHand1 .$CardsInHand3  ;
}else if($card1Number <= $card4Number && $card4Number <= $card2Number && $card2Number <=$card0Number &&$card0Number <= $card3Number) {
    echo  $CardsInHand2 .$CardsInHand0 .$CardsInHand3 .$CardsInHand1 .$CardsInHand4  ;
}else if($card1Number <= $card4Number && $card4Number <= $card0Number && $card0Number <=$card2Number &&$card2Number <= $card3Number) {
    echo  $CardsInHand2 .$CardsInHand0 .$CardsInHand1 .$CardsInHand3 .$CardsInHand4  ;
}else if($card0Number <= $card4Number && $card4Number <= $card1Number && $card1Number <=$card2Number &&$card2Number <= $card3Number) {
    echo  $CardsInHand1 .$CardsInHand0 .$CardsInHand2 .$CardsInHand3 .$CardsInHand4  ;
}else if($card0Number <= $card4Number && $card4Number <= $card3Number && $card3Number <=$card2Number &&$card2Number <= $card1Number) {
    echo  $CardsInHand1 .$CardsInHand0 .$CardsInHand4 .$CardsInHand3 .$CardsInHand2   ;
}else if($card0Number <= $card4Number && $card4Number <= $card2Number && $card2Number <=$card3Number &&$card3Number <= $card1Number) {
    echo  $CardsInHand1 .$CardsInHand0 .$CardsInHand3 .$CardsInHand4 .$CardsInHand2   ;
}else if($card0Number <= $card1Number && $card1Number <= $card4Number && $card4Number <=$card3Number &&$card3Number <= $card2Number) {
    echo  $CardsInHand1 .$CardsInHand2 .$CardsInHand0 .$CardsInHand4 .$CardsInHand3   ;
}else if($card0Number <= $card1Number && $card1Number <= $card3Number && $card3Number <=$card4Number &&$card4Number <= $card2Number) {
    echo  $CardsInHand1 .$CardsInHand2 .$CardsInHand4 .$CardsInHand0 .$CardsInHand3   ;
}else if($card0Number <= $card2Number && $card2Number <= $card4Number && $card4Number <=$card3Number &&$card3Number <= $card1Number) {
    echo  $CardsInHand1 .$CardsInHand3 .$CardsInHand0 .$CardsInHand4 .$CardsInHand2   ;
}else if($card2Number <= $card3Number && $card3Number <= $card0Number && $card0Number <=$card4Number &&$card4Number <= $card1Number) {
    echo  $CardsInHand3 .$CardsInHand4 .$CardsInHand1 .$CardsInHand0 .$CardsInHand2   ;
}else if($card2Number <= $card3Number && $card3Number <= $card0Number && $card0Number <=$card1Number &&$card1Number <= $card4Number) {
    echo  $CardsInHand3 .$CardsInHand4 .$CardsInHand1 .$CardsInHand2 .$CardsInHand0   ;
}else if($card2Number <= $card4Number && $card4Number <= $card0Number && $card0Number <=$card1Number &&$card1Number <= $card3Number) {
    echo  $CardsInHand3 .$CardsInHand0 .$CardsInHand1 .$CardsInHand2 .$CardsInHand4   ;
}else if($card3Number <= $card4Number && $card4Number <= $card0Number && $card0Number <=$card1Number &&$card1Number <= $card2Number) {
    echo  $CardsInHand4 .$CardsInHand0 .$CardsInHand1 .$CardsInHand2 .$CardsInHand3   ;
}else if($card3Number <= $card4Number && $card4Number <= $card1Number && $card1Number <=$card0Number &&$card0Number <= $card2Number) {
    echo  $CardsInHand4 .$CardsInHand0 .$CardsInHand2 .$CardsInHand1 .$CardsInHand3   ;
}else if($card2Number <= $card4Number && $card4Number <= $card1Number && $card1Number <=$card0Number &&$card0Number <= $card3Number) {
    echo  $CardsInHand3 .$CardsInHand0 .$CardsInHand2 .$CardsInHand1 .$CardsInHand4   ;
}else if($card2Number <= $card3Number && $card3Number <= $card1Number && $card1Number <=$card0Number &&$card0Number <= $card4Number) {
    echo  $CardsInHand3 .$CardsInHand4 .$CardsInHand2 .$CardsInHand1 .$CardsInHand0   ;
}else if($card4Number <= $card3Number && $card3Number <= $card1Number && $card1Number <=$card0Number &&$card0Number <= $card2Number) {
    echo  $CardsInHand0 .$CardsInHand4 .$CardsInHand2 .$CardsInHand1 .$CardsInHand3   ;
}else if($card4Number <= $card3Number && $card3Number <= $card0Number && $card0Number <=$card2Number &&$card2Number <= $card1Number) {
    echo  $CardsInHand0 .$CardsInHand4 .$CardsInHand1 .$CardsInHand3 .$CardsInHand2   ;
}else if($card2Number <= $card3Number && $card3Number <= $card4Number && $card4Number <=$card1Number &&$card1Number <= $card0Number) {
    echo  $CardsInHand3 .$CardsInHand4 .$CardsInHand0 .$CardsInHand2 .$CardsInHand1   ;
}else if($card4Number <= $card3Number && $card3Number <= $card2Number && $card2Number <=$card0Number &&$card0Number <= $card1Number) {
    echo  $CardsInHand0 .$CardsInHand4 .$CardsInHand3 .$CardsInHand1 .$CardsInHand2   ;
}else if($card2Number <= $card3Number && $card3Number <= $card4Number && $card4Number <=$card0Number &&$card0Number <= $card1Number) {
    echo  $CardsInHand3 .$CardsInHand4 .$CardsInHand0 .$CardsInHand1 .$CardsInHand2   ;
}else if($card0Number <= $card3Number && $card3Number <= $card4Number && $card4Number <=$card2Number &&$card2Number <= $card1Number) {
    echo  $CardsInHand1 .$CardsInHand4 .$CardsInHand0 .$CardsInHand3 .$CardsInHand2   ;
}else if($card0Number <= $card4Number && $card4Number <= $card2Number && $card2Number <=$card1Number &&$card1Number <= $card3Number) {
    echo  $CardsInHand1 .$CardsInHand0 .$CardsInHand3 .$CardsInHand2 .$CardsInHand4   ;
}else if($card0Number <= $card4Number && $card4Number <= $card3Number && $card3Number <=$card1Number &&$card1Number <= $card2Number) {
    echo  $CardsInHand1 .$CardsInHand0 .$CardsInHand4 .$CardsInHand2 .$CardsInHand3   ;
}else if($card1Number <= $card2Number && $card2Number <= $card0Number && $card0Number <=$card3Number &&$card3Number <= $card4Number) {
    echo  $CardsInHand2 .$CardsInHand3 .$CardsInHand1 .$CardsInHand4 .$CardsInHand0   ;
}else if($cards[0]['number']<=$cards[4]['number'] && $cards[4]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[1]['number']){
    echo $card00.$card44.$card22.$card33.$card11."</br>";
}else if($card2Number <= $card1Number && $card1Number <= $card4Number && $card4Number <=$card0Number &&$card0Number <= $card3Number ) {
    echo  $CardsInHand3 .$CardsInHand2 .$CardsInHand0 .$CardsInHand4 .$CardsInHand1   ;
}else if($card0Number <= $card3Number && $card3Number <= $card1Number && $card1Number <=$card2Number &&$card2Number <= $card4Number) {
    echo  $CardsInHand1 .$CardsInHand4 .$CardsInHand2 .$CardsInHand3 .$CardsInHand0   ;
}else if($card0Number <= $card3Number && $card3Number <= $card1Number && $card1Number <=$card4Number &&$card4Number <= $card2Number) {
    echo  $CardsInHand1 .$CardsInHand4 .$CardsInHand2 .$CardsInHand0 .$CardsInHand3   ;
}else if($card1Number <= $card2Number && $card2Number <= $card4Number && $card4Number <=$card0Number &&$card0Number <= $card3Number) {
    echo  $CardsInHand2 .$CardsInHand3 .$CardsInHand0 .$CardsInHand1 .$CardsInHand4   ;
}else if($card4Number <= $card0Number && $card0Number <= $card2Number && $card2Number <=$card1Number &&$card1Number <= $card3Number) {
    echo  $CardsInHand0 .$CardsInHand1 .$CardsInHand3 .$CardsInHand2 .$CardsInHand4   ;
}else if($card2Number <= $card0Number && $card0Number <= $card4Number && $card4Number <=$card1Number &&$card1Number <= $card3Number) {
    echo  $CardsInHand3 .$CardsInHand1 .$CardsInHand0 .$CardsInHand2 .$CardsInHand4   ;
}else if($card0Number <= $card2Number && $card2Number <= $card3Number && $card3Number <=$card1Number &&$card1Number <= $card4Number) {
    echo  $CardsInHand1 .$CardsInHand3 .$CardsInHand4 .$CardsInHand2 .$CardsInHand0   ;
}else if($card1Number <= $card3Number && $card3Number <= $card4Number && $card4Number <=$card2Number &&$card2Number <= $card0Number) {
    echo  $CardsInHand2 .$CardsInHand4 .$CardsInHand0 .$CardsInHand3 .$CardsInHand1   ;
}else if($card1Number <= $card3Number && $card3Number <= $card2Number && $card2Number <=$card4Number &&$card4Number <= $card0Number) {
    echo  $CardsInHand2 .$CardsInHand4 .$CardsInHand3 .$CardsInHand0 .$CardsInHand1   ;
}else if($card4Number <= $card2Number && $card2Number <= $card0Number && $card0Number <=$card3Number &&$card3Number <= $card1Number) {
    echo  $CardsInHand0 .$CardsInHand3 .$CardsInHand1 .$CardsInHand4 .$CardsInHand2   ;
}else if($card4Number <= $card1Number && $card1Number <= $card0Number && $card0Number <=$card3Number &&$card3Number <= $card2Number) {
    echo  $CardsInHand0 .$CardsInHand2 .$CardsInHand1 .$CardsInHand4 .$CardsInHand3   ;
}else if($card2Number <= $card1Number && $card1Number <= $card0Number && $card0Number <=$card3Number &&$card3Number <= $card4Number) {
    echo  $CardsInHand3 .$CardsInHand2 .$CardsInHand1 .$CardsInHand4 .$CardsInHand0   ;
}else if($card0Number <= $card1Number && $card1Number <= $card4Number && $card4Number <=$card2Number &&$card2Number <= $card3Number) {
    echo  $CardsInHand1 .$CardsInHand2 .$CardsInHand0 .$CardsInHand3 .$CardsInHand4   ;
}else if($card0Number <= $card1Number && $card1Number <= $card2Number && $card2Number <=$card4Number &&$card4Number <= $card3Number) {
    echo  $CardsInHand1 .$CardsInHand2 .$CardsInHand3 .$CardsInHand0 .$CardsInHand4   ;
}else if($card0Number <= $card1Number && $card1Number <= $card2Number && $card2Number <=$card3Number &&$card3Number <= $card4Number) {
    echo  $CardsInHand1 .$CardsInHand2 .$CardsInHand3 .$CardsInHand4 .$CardsInHand0   ;
}else if($card0Number <= $card2Number && $card2Number <= $card1Number && $card1Number <=$card3Number &&$card3Number <= $card4Number) {
    echo  $CardsInHand1 .$CardsInHand3 .$CardsInHand2 .$CardsInHand4 .$CardsInHand0   ;
}else if($card1Number <= $card0Number && $card0Number <= $card3Number && $card3Number <=$card4Number &&$card4Number <= $card2Number) {
    echo  $CardsInHand2 .$CardsInHand1 .$CardsInHand4 .$CardsInHand0. $CardsInHand3   ;
}else if($card1Number <= $card2Number && $card2Number <= $card3Number && $card3Number <=$card4Number &&$card4Number <= $card0Number) {
    echo  $CardsInHand2 .$CardsInHand3 .$CardsInHand4 .$CardsInHand0. $CardsInHand1   ;
}else if($card1Number <= $card2Number && $card2Number <= $card0Number && $card0Number <=$card4Number &&$card4Number <= $card3Number) {
    echo  $CardsInHand2 .$CardsInHand3 .$CardsInHand1 .$CardsInHand0. $CardsInHand4   ;
}else if($card1Number <= $card0Number && $card0Number <= $card3Number && $card3Number <=$card4Number &&$card4Number <= $card2Number) {
    echo  $CardsInHand2 .$CardsInHand1 .$CardsInHand4 .$CardsInHand0. $CardsInHand3   ;
}else if($card4Number <= $card1Number && $card1Number <= $card0Number && $card0Number <=$card2Number &&$card2Number <= $card3Number) {
    echo  $CardsInHand0 .$CardsInHand2 .$CardsInHand1 .$CardsInHand3. $CardsInHand4   ;
}else if($card0Number <= $card1Number && $card1Number <= $card3Number && $card3Number <=$card2Number &&$card2Number <= $card4Number) {
    echo  $CardsInHand1 .$CardsInHand2 .$CardsInHand4 .$CardsInHand3. $CardsInHand0   ;
}else if($card4Number <= $card0Number && $card0Number <= $card3Number && $card3Number <=$card1Number &&$card1Number <= $card2Number) {
    echo  $CardsInHand0 .$CardsInHand1 .$CardsInHand4 .$CardsInHand2. $CardsInHand3   ;
}else if($card4Number <= $card0Number && $card0Number <= $card3Number && $card3Number <=$card2Number &&$card2Number <= $card1Number) {
    echo  $CardsInHand0 .$CardsInHand1 .$CardsInHand4 .$CardsInHand3. $CardsInHand2   ;
}else if($card2Number <= $card0Number && $card0Number <= $card3Number && $card3Number <=$card4Number &&$card4Number <= $card1Number) {
    echo  $CardsInHand3 .$CardsInHand1 .$CardsInHand4 .$CardsInHand0. $CardsInHand2   ;
}else if($card0Number <= $card4Number && $card4Number <= $card1Number && $card1Number <=$card3Number &&$card3Number <= $card2Number) {
    echo  $CardsInHand1 .$CardsInHand0 .$CardsInHand2 .$CardsInHand4. $CardsInHand3   ;
}else if($card2Number <= $card4Number && $card4Number <= $card1Number && $card1Number <=$card3Number &&$card3Number <= $card0Number) {
    echo  $CardsInHand3 .$CardsInHand0 .$CardsInHand2 .$CardsInHand4. $CardsInHand1   ;
}else if($card4Number <= $card2Number && $card2Number <= $card1Number && $card1Number <=$card3Number &&$card3Number <= $card0Number) {
    echo  $CardsInHand0 .$CardsInHand3 .$CardsInHand2 .$CardsInHand4. $CardsInHand1   ;
}else if($card4Number <= $card0Number && $card0Number <= $card1Number && $card1Number <=$card3Number &&$card3Number <= $card2Number) {
    echo  $CardsInHand0 .$CardsInHand1 .$CardsInHand2 .$CardsInHand4. $CardsInHand3   ;
}else if($card3Number <= $card0Number && $card0Number <= $card1Number && $card1Number <=$card4Number &&$card4Number <= $card2Number) {
    echo  $CardsInHand4 .$CardsInHand1 .$CardsInHand2 .$CardsInHand0. $CardsInHand3   ;
}else if($card4Number <= $card0Number && $card0Number <= $card1Number && $card1Number <=$card2Number &&$card2Number <= $card3Number) {
    echo  $CardsInHand0 .$CardsInHand1 .$CardsInHand2 .$CardsInHand3. $CardsInHand4   ;
}else if($card2Number <= $card0Number && $card0Number <= $card1Number && $card1Number <=$card4Number &&$card4Number <= $card3Number) {
    echo  $CardsInHand3 .$CardsInHand1 .$CardsInHand2 .$CardsInHand0. $CardsInHand4   ;
}else if($card3Number <= $card2Number && $card2Number <= $card1Number && $card1Number <=$card4Number &&$card4Number <= $card0Number) {
    echo  $CardsInHand4 .$CardsInHand3 .$CardsInHand2 .$CardsInHand0. $CardsInHand1   ;
}else if($card1Number <= $card0Number && $card0Number <= $card3Number && $card3Number <=$card4Number &&$card4Number <= $card2Number) {
    echo  $CardsInHand2 .$CardsInHand1 .$CardsInHand4 .$CardsInHand0. $CardsInHand3   ;
}else if($card2Number <= $card3Number && $card3Number <= $card1Number && $card1Number <=$card4Number &&$card4Number <= $card0Number) {
    echo  $CardsInHand3 .$CardsInHand4 .$CardsInHand2 .$CardsInHand0. $CardsInHand1   ;
}else if($card4Number <= $card3Number && $card3Number <= $card1Number && $card1Number <=$card2Number &&$card2Number <= $card0Number) {
    echo  $CardsInHand0 .$CardsInHand4 .$CardsInHand2 .$CardsInHand3. $CardsInHand1   ;
}else if($cards[1]['number']<=$cards[0]['number'] && $cards[0]['number'] <= $cards[4]['number'] && $cards[4]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[3]['number']){
    echo $card11 .$card00 .$card44 .$card22 .$card33."</br>" ;
}else if($cards[0]['number']<=$cards[1]['number'] && $cards[1]['number'] <= $cards[3]['number'] && $cards[3]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[2]['number']){
    echo $card00 .$card11 .$card33 .$card44 .$card22."</br>" ;
}else if($cards[0]['number']<=$cards[3]['number'] && $cards[3]['number'] <= $cards[1]['number'] && $cards[1]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[2]['number']){
    echo $card00 .$card33 .$card11 .$card44 .$card22."</br>" ;
}else if($cards[0]['number']<=$cards[4]['number'] && $cards[4]['number'] <= $cards[1]['number'] && $cards[1]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[2]['number']){
    echo $card00 .$card44 .$card11 .$card33 .$card22."</br>" ;
}else if($cards[0]['number']<=$cards[2]['number'] && $cards[2]['number'] <= $cards[4]['number'] && $cards[4]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[3]['number']){
    echo $card00 .$card44 .$card11 .$card33 .$card22."</br>" ;
}else if($cards[0]['number']<=$cards[2]['number'] && $cards[2]['number'] <= $cards[1]['number'] && $cards[1]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[3]['number']){
    echo $card00 .$card22 .$card11 .$card44 .$card33."</br>" ;
}else if($cards[1]['number']<=$cards[0]['number'] && $cards[0]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[3]['number']){
    echo $card11 .$card00 .$card22 .$card44 .$card33."</br>" ;
}else if($cards[3]['number']<=$cards[4]['number'] && $cards[4]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[0]['number'] && $cards[0]['number']<=$cards[1]['number']){
    echo $card33 .$card44 .$card22 .$card00 .$card11."</br>" ;
}else if($cards[2]['number']<=$cards[0]['number'] && $cards[0]['number']+1 <= $cards[3]['number'] && $cards[3]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[4]['number']){
    echo $card22 .$card00 .$card33 .$card11.$card44 ."</br>" ;
}else if($cards[3]['number']<=$cards[4]['number'] && $cards[4]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[0]['number']){
    echo $card33 .$card44 .$card22 .$card11 .$card00."</br>" ;
}else if($cards[3]['number']<=$cards[1]['number'] && $cards[1]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[0]['number']){
    echo $card33 .$card44 .$card22 .$card11 .$card00."</br>" ;
}else if($cards[3]['number']<=$cards[1]['number'] && $cards[1]['number'] <= $cards[4]['number'] && $cards[4]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[0]['number']){
    echo $card33 .$card11 .$card44 .$card22 .$card00."</br>" ;
}else if($cards[2]['number']<=$cards[1]['number'] && $cards[1]['number'] <= $cards[0]['number'] && $cards[0]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[3]['number']){
    echo $card22 .$card11 .$card00 .$card44 .$card33."</br>" ;
}else if($cards[2]['number']<=$cards[1]['number'] && $cards[1]['number'] <= $cards[3]['number'] && $cards[3]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[0]['number']){
    echo $card22 .$card11 .$card33 .$card44 .$card00."</br>" ;
}else if($cards[1]['number']<=$cards[2]['number'] && $cards[2]['number'] <= $cards[4]['number'] && $cards[4]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[0]['number']){
    echo $card11 .$card22 .$card44 .$card33 .$card00."</br>" ;
}else if($cards[4]['number']<=$cards[1]['number'] && $cards[1]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[0]['number'] && $cards[0]['number']<=$cards[3]['number']){
    echo $card22 .$card44 .$card33 .$card00 .$card11."</br>" ;
}else if($cards[4]['number']<=$cards[2]['number'] && $cards[2]['number'] <= $cards[3]['number'] && $cards[3]['number']<=$cards[0]['number'] && $cards[0]['number']<=$cards[1]['number']){
    echo $card44 .$card22 .$card33 .$card00 .$card11."</br>" ;
}else if($cards[4]['number']<=$cards[1]['number'] && $cards[1]['number'] <= $cards[3]['number'] && $cards[3]['number']<=$cards[0]['number'] && $cards[0]['number']<=$cards[2]['number']){
    echo $card44 .$card11 .$card33 .$card00 .$card22."</br>" ;
}else if($cards[2]['number']<=$cards[0]['number'] && $cards[0]['number'] <= $cards[1]['number'] && $cards[1]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[4]['number']){
    echo $card22 .$card00 .$card11 .$card33 .$card44."</br>" ;
}else if($cards[3]['number']<=$cards[0]['number'] && $cards[0]['number'] <= $cards[1]['number'] && $cards[1]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[4]['number']){
    echo $card33 .$card00 .$card11 .$card22 .$card44."</br>" ;
}else if($cards[3]['number']<=$cards[1]['number'] && $cards[1]['number'] <= $cards[0]['number'] && $cards[0]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[4]['number']){
    echo $card33 .$card11 .$card00 .$card22 .$card44."</br>" ;
}else if($cards[3]['number']<=$cards[0]['number'] && $cards[0]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[4]['number']){
    echo $card33 .$card00 .$card22 .$card11 .$card44."</br>" ;
}
else if($cards[3]['number']<=$cards[0]['number'] && $cards[0]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[1]['number']){
    echo $card22 .$card44 .$card33 .$card00 .$card11."</br>" ;
}else if($cards[4]['number']<=$cards[0]['number'] && $cards[0]['number'] <= $cards[2]['number'] && $cards[2]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[1]['number']){
    echo $card44 .$card00 .$card22 .$card33 .$card11."</br>" ;
}else if($cards[2]['number']<=$cards[4]['number'] && $cards[4]['number'] <= $cards[3]['number'] && $cards[3]['number']<=$cards[0]['number'] && $cards[0]['number']<=$cards[1]['number']){
    echo $card22 .$card44 .$card33 .$card00 .$card11."</br>" ;
}else if($cards[4]['number']<=$cards[2]['number'] && $cards[2]['number'] <= $cards[0]['number'] && $cards[0]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[3]['number']){
    echo $card44 .$card22 .$card00 .$card11 .$card33."</br>" ;
}else if($cards[3]['number']<=$cards[2]['number'] && $cards[2]['number'] <= $cards[0]['number'] && $cards[0]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[4]['number']){
    echo $card33 .$card22 .$card00 .$card11 .$card44."</br>" ;
}else if($cards[1]['number']<=$cards[4]['number'] && $cards[4]['number'] <= $cards[0]['number'] && $cards[0]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[2]['number']){
    echo $card11 .$card44 .$card00 .$card33 .$card22."</br>" ;
}else if($cards[1]['number']<=$cards[0]['number'] && $cards[0]['number'] <= $cards[3]['number'] && $cards[3]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[4]['number']){
    echo $card11 .$card00 .$card33 .$card22.$card44 ."</br>" ;
}else if($cards[1]['number']<=$cards[3]['number'] && $cards[3]['number'] <= $cards[0]['number'] && $cards[0]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[2]['number']){
    echo $card11 .$card33 .$card00 .$card44.$card22 ."</br>" ;
}else if($cards[1]['number']<=$cards[4]['number'] && $cards[4]['number'] <= $cards[0]['number'] && $cards[0]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[3]['number']){
    echo $card11 .$card33 .$card00 .$card44.$card22 ."</br>" ;
}else if($cards[1]['number']<=$cards[3]['number'] && $cards[3]['number']+1 <= $cards[0]['number'] && $cards[0]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[4]['number']){
    echo $card11 .$card33 .$card00 .$card22.$card44 ."</br>" ;
}else if($cards[3]['number']<=$cards[2]['number'] && $cards[2]['number']+1 <= $cards[0]['number'] && $cards[0]['number']<=$cards[4]['number'] && $cards[4]['number']<=$cards[1]['number']){
    echo $card33 .$card22 .$card00 .$card44.$card11 ."</br>" ;
}else if($cards[3]['number']<=$cards[0]['number'] && $cards[0]['number']+1 <= $cards[4]['number'] && $cards[4]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[2]['number']){
    echo $card33 .$card00 .$card44 .$card11.$card22 ."</br>" ;
}
else if($cards[3]['number']<=$cards[4]['number'] && $cards[4]['number']+1 <= $cards[0]['number'] && $cards[0]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[1]['number']){
    echo $card33 .$card44 .$card00 .$card22.$card11 ."</br>" ;
}else if($cards[2]['number']<=$cards[4]['number'] && $cards[4]['number']+1 <= $cards[0]['number'] && $cards[0]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[1]['number']){
    echo $card22 .$card44 .$card00 .$card33.$card11 ."</br>" ;
}else if($cards[1]['number']<=$cards[4]['number'] && $cards[4]['number']+1 <= $cards[2]['number'] && $cards[2]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[0]['number']){
    echo $card11 .$card44 .$card22 .$card33.$card00 ."</br>" ;
}else if($cards[2]['number']<=$cards[0]['number'] && $cards[0]['number']+1 <= $cards[4]['number'] && $cards[4]['number']<=$cards[3]['number'] && $cards[3]['number']<=$cards[1]['number']){
    echo $card22 .$card00 .$card44 .$card33.$card11 ."</br>" ;
}else if($cards[3]['number']<=$cards[0]['number'] && $cards[0]['number']+1 <= $cards[4]['number'] && $cards[4]['number']<=$cards[2]['number'] && $cards[2]['number']<=$cards[1]['number']){
    echo $card33 .$card00 .$card44 .$card22.$card11 ."</br>" ;
}else if($cards[4]['number']<=$cards[3]['number'] && $cards[3]['number']+1 <= $cards[0]['number'] && $cards[0]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[2]['number']){
    echo $card44 .$card33 .$card00 .$card11.$card22 ."</br>" ;
}else if($cards[3]['number']<=$cards[2]['number'] && $cards[2]['number']+1 <= $cards[4]['number'] && $cards[4]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[0]['number']){
    echo $card33 .$card22 .$card44 .$card11.$card00 ."</br>" ;
}else if($cards[2]['number']<=$cards[1]['number'] && $cards[1]['number']+1 <= $cards[3]['number'] && $cards[3]['number']<=$cards[0]['number'] && $cards[0]['number']<=$cards[4]['number']){
    echo $card22 .$card11 .$card33 .$card00.$card44 ."</br>" ;
}else if($cards[2]['number']<=$cards[0]['number'] && $cards[0]['number']+1 <= $cards[3]['number'] && $cards[3]['number']<=$cards[1]['number'] && $cards[1]['number']<=$cards[4]['number']){
    echo $card22 .$card00 .$card33 .$card11.$card44 ."</br>" ;
}




else{
    echo $card00."\n".$card11."\n".$card22."\n".$card33."\n".$card44 ;
}
    ?>
        <p><?=judge($cards)."\n" ; ?>です。</p>
    </section>
</body>
</html>
