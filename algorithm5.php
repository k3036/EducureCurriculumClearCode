<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 「algorithm5」で作成したポーカープログラムにジョーカーを追加してください。
// ジョーカー１枚のみ、suitをjoker、numberを0と表す。
// 上記以外は不正として処理してください。

// 追加された役
// 「フォーカード」＋ジョーカーは「ファイブカード」

// 判定は強い役を優先してください。組み合わせの強さ順は以下とする。
// ロイヤルストレートフラッシュ > ストレートフラッシュ > ファイブカード > フォーカード > フルハウス > フラッシュ > ストレート > スリーカード > ツーペア > ワンペア
// ジョーカーが出た時点で最低でも「ワンペア」となること

/**0～13以外の数字と、heart, spade, diamond, club,  joker以外のマークは不正*/
// 　　　!!!!!ジョーカーが出た時点で、最低でも「ワンペア」!!!!!
// ワンペア・・・同じ数字２枚（ペア）が１組
// ツーペア・・・同じ数字２枚（ペア）が２組
// スリーカード・・・同じ数字３枚
// ストレート・・・数字の連番５枚（13と1は繋がらない）
// フラッシュ・・・同じマークが５枚
// フルハウス・・・同じ数字３枚が１組＋同じ数字２枚（ペア）が１組
// フォーカード・・・同じ数字４枚
// 〇　　!!!!! ファイブカード・・・同じ数字４枚 +ジョーカー !!!!!
// 　　　ストレートフラッシュ・・・数字の連番５枚＋同じマークが５枚
// 〇　　ロイヤルストレートフラッシュ・・・1, 10, 11, 12, 13で同じマーク
// 手札
$cards = [
    ['suit'=>'joker', 'number'=>0],
    ['suit'=>'heart', 'number'=>2],
    ['suit'=>'spade', 'number'=> 3],
    ['suit'=>'club', 'number'=>4],
    ['suit'=>'diamond', 'number'=>1],
];

if($cards[0]["suit"] == 'joker' && $cards[2]['number']==$cards[3]['number'] && $cards[3]['number']==$cards[4]['number'] ){
    echo "フォーカード" ;
}




/**テスト用乱数 */
/*
    $numberRandom0 = mt_rand(0, 13);
    $numberRandom1 = mt_rand(0, 13);
    $numberRandom2 = mt_rand(0, 13);
    $numberRandom3 = mt_rand(0, 13);
    $numberRandom4 = mt_rand(0, 13);

    $suitRandom0 = mt_rand(0, 3);
    $suitRandom1 = mt_rand(0, 3);
    $suitRandom2 = mt_rand(0, 3);
    $suitRandom3 = mt_rand(0, 3);
    $suitRandom4 = mt_rand(0, 4);

    $mark =['club' , 'diamond' , 'heart' , 'spade' ,'joker'] ;


$cards = [
    ['suit'=>$mark[$suitRandom0] , 'number'=>$numberRandom0],
    ['suit'=>$mark[$suitRandom1] , 'number'=>$numberRandom1],
    ['suit'=>$mark[$suitRandom2] , 'number'=>$numberRandom2],
    ['suit'=>$mark[$suitRandom3] , 'number'=>$numberRandom3],
    ['suit'=>$mark[$suitRandom4] , 'number'=>$numberRandom4],
];

*/

    /**heart, spade, diamond, clubのとき 0 なら不正*/



/**0～13以外の数字と、heart, spade, diamond, club,  joker以外のマークは不正*/
// 　　　!!!!!ジョーカーが出た時点で、最低でも「ワンペア」!!!!!
// ワンペア・・・同じ数字２枚（ペア）が１組
// ツーペア・・・同じ数字２枚（ペア）が２組
// スリーカード・・・同じ数字３枚
// ストレート・・・数字の連番５枚（13と1は繋がらない）
// フラッシュ・・・同じマークが５枚
// フルハウス・・・同じ数字３枚が１組＋同じ数字２枚（ペア）が１組
// フォーカード・・・同じ数字４枚
// 〇　　!!!!! ファイブカード・・・同じ数字４枚 +ジョーカー !!!!!
// 　　　ストレートフラッシュ・・・数字の連番５枚＋同じマークが５枚
// 〇　　ロイヤルストレートフラッシュ・・・1, 10, 11, 12, 13で同じマーク
function judge($cards) {
    // この関数内に処理を記述
    /**joker以外が0なら不正 */
    if($cards[0]['suit'] != 'joker'
    && $cards [0]['number'] == 0 || $cards[1]['suit'] != 'joker'
    && $cards [1]['number'] == 0 || $cards[2]['suit'] != 'joker'
    && $cards [2]['number'] == 0 || $cards[3]['suit'] != 'joker'
    && $cards [3]['number'] == 0 || $cards[4]['suit'] != 'joker'
    && $cards [4]['number'] == 0){
        echo "不正" ;
    }
    /**0～13以外の数字は不正 */
    else if($cards[0]['number'] != 0 && $cards[0]['number'] != 1 && $cards[0]['number'] != 2 && $cards[0]['number'] != 3 && $cards[0]['number'] != 4 && $cards[0]['number'] != 5 && $cards[0]['number'] != 6 && $cards[0]['number'] != 7 && $cards[0]['number'] != 8 && $cards[0]['number'] != 9 && $cards[0]['number'] != 10 && $cards[0]['number'] != 11 && $cards[0]['number'] != 12 && $cards[0]['number'] != 13){
            echo "不正" ;
    }
    else if($cards[1]['number'] != 0 && $cards[1]['number'] != 1 && $cards[1]['number'] != 2 && $cards[1]['number'] != 3 && $cards[1]['number'] != 4 && $cards[1]['number'] != 5 && $cards[1]['number'] != 6 && $cards[1]['number'] != 7 && $cards[1]['number'] != 8 && $cards[1]['number'] != 9 && $cards[1]['number'] != 10 && $cards[1]['number'] != 11 && $cards[1]['number'] != 12 && $cards[1]['number'] != 13){
        echo "不正" ;
    }
    else if($cards[2]['number'] != 0 && $cards[2]['number'] != 1 && $cards[2]['number'] != 2 && $cards[2]['number'] != 3 && $cards[2]['number'] != 4 && $cards[2]['number'] != 5 && $cards[2]['number'] != 6 && $cards[2]['number'] != 7 && $cards[2]['number'] != 8 && $cards[2]['number'] != 9 && $cards[2]['number'] != 10 && $cards[2]['number'] != 11 && $cards[2]['number'] != 12 && $cards[2]['number'] != 13){
        echo "不正" ;
    }
    else if($cards[3]['number'] != 0 && $cards[3]['number'] != 1 && $cards[3]['number'] != 2 && $cards[3]['number'] != 3 && $cards[3]['number'] != 4 && $cards[3]['number'] != 5 && $cards[3]['number'] != 6 && $cards[3]['number'] != 7 && $cards[3]['number'] != 8 && $cards[3]['number'] != 9 && $cards[3]['number'] != 10 && $cards[3]['number'] != 11 && $cards[3]['number'] != 12 && $cards[3]['number'] != 13){
        echo "不正" ;
    }
    else if($cards[4]['number'] != 0 && $cards[4]['number'] != 1 && $cards[4]['number'] != 2 && $cards[4]['number'] != 3 && $cards[4]['number'] != 4 && $cards[4]['number'] != 5 && $cards[4]['number'] != 6 && $cards[4]['number'] != 7 && $cards[4]['number'] != 8 && $cards[4]['number'] != 9 && $cards[4]['number'] != 10 && $cards[4]['number'] != 11 && $cards[4]['number'] != 12 && $cards[4]['number'] != 13){
        echo "不正" ;
    }
    /**heart, spade, diamond, club,  joker以外のマークは不正*/
    else if($cards[0]['suit'] !='heart' && $cards[0]['suit'] != 'spade' &&  $cards[0]['suit'] != 'diamond' &&  $cards[0]['suit'] !='club' &&  $cards[0]['suit'] !='joker' ){
        echo "不正" ;
    }else if($cards[1]['suit'] !='heart' && $cards[1]['suit'] != 'spade' &&  $cards[1]['suit'] != 'diamond' &&  $cards[1]['suit'] !='club'&&  $cards[1]['suit'] !='joker' ){
        echo "不正" ;
    }else if($cards[2]['suit'] !='heart' && $cards[2]['suit'] != 'spade' &&  $cards[2]['suit'] != 'diamond' &&  $cards[2]['suit'] !='club'&&  $cards[2]['suit'] !='joker' ){
        echo "不正" ;
    }else if($cards[3]['suit'] !='heart' && $cards[3]['suit'] != 'spade' &&  $cards[3]['suit'] != 'diamond' &&  $cards[3]['suit'] !='club'&&  $cards[3]['suit'] !='joker' ){
        echo "不正" ;
    }else if($cards[4]['suit'] !='heart' && $cards[4]['suit'] != 'spade' &&  $cards[4]['suit'] != 'diamond' &&  $cards[4]['suit'] !='club'&&  $cards[4]['suit'] !='joker' ){
        echo "不正" ;
    }
    /**同じカードが２枚あると不正 */
    else if ($cards[0]['suit'] . $cards[0]['number'] == $cards[1]['suit'] . $cards[1]['number'] || $cards[0]['suit'] . $cards[0]['number'] == $cards[2]['suit'] . $cards[2]['number'] || $cards[0]['suit'] . $cards[0]['number'] == $cards[3]['suit'] . $cards[3]['number']|| $cards[0]['suit'] . $cards[0]['number'] == $cards[4]['suit'] . $cards[4]['number']) {
        echo "不正" ;
    }else if ($cards[1]['suit'] . $cards[1]['number'] == $cards[2]['suit'] . $cards[2]['number'] || $cards[1]['suit'] . $cards[1]['number'] == $cards[3]['suit'] . $cards[3]['number'] || $cards[1]['suit'] . $cards[1]['number'] == $cards[4]['suit'] . $cards[4]['number']) {
        echo "不正" ;
    }else if ($cards[2]['suit'] . $cards[2]['number'] == $cards[3]['suit'] . $cards[3]['number'] || $cards[2]['suit'] . $cards[2]['number'] == $cards[4]['suit'] . $cards[4]['number']) {
        echo "不正" ;
    }else if ($cards[3]['suit'] . $cards[3]['number'] == $cards[4]['suit'] . $cards[4]['number']) {
        echo "不正" ;
    }
    /**jokerが0以外は不正 *//**jokerが複数あると不正 */
    else if($cards[0]['suit'] == 'joker' && $cards[0]['number'] != 0 ||
            $cards[1]['suit'] == 'joker' && $cards[1]['number'] != 0 ||
            $cards[2]['suit'] == 'joker' && $cards[2]['number'] != 0 ||
            $cards[3]['suit'] == 'joker' && $cards[3]['number'] != 0 ||
            $cards[4]['suit'] == 'joker' && $cards[4]['number'] != 0
            ){
        echo "不正";
    }

    else if ($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number']&& $cards[0]['number']==$cards[3]['number'] && $cards[4]["suit"] == 'joker' ) {
        echo "ファイブカード" ;
    }else if ($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number']&& $cards[0]['number']==$cards[4]['number'] && $cards[3]["suit"] == 'joker'  ) {
        echo "ファイブカード" ;
    }else if ($cards[0]['number']==$cards[1]['number'] && $cards[1]['number']==$cards[3]['number']&& $cards[3]['number']==$cards[4]['number'] && $cards[2]["suit"] == 'joker'   ) {
        echo "ファイブカード" ;
    }else if ($cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[3]['number']&& $cards[3]['number']==$cards[4]['number'] && $cards[1]["suit"] == 'joker'   ) {
        echo "ファイブカード" ;
    }else if ($cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number']&& $cards[1]['number']==$cards[4]['number'] && $cards[0]["suit"] == 'joker'   ) {
        echo "ファイブカード" ;
    }
/**ロイヤルストレートフラッシュ */
    else if($cards[1]['number']== 1 && $cards[3]['number']==10 && $cards[0]['number']==11 && $cards[4]['number']==12 && $cards[2]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[3]['number']==10 && $cards[1]['number']==11 && $cards[2]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[4]['number']==11 && $cards[2]['number']==12 && $cards[3]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[3]['number']==11 && $cards[2]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[4]['number']==10 && $cards[3]['number']==11 && $cards[2]['number']==12 && $cards[1]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
    }else if($cards[0]['number']== 1 && $cards[1]['number']==10 && $cards[2]['number']==11 && $cards[3]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
        echo "ロイヤルストレートフラッシュ";
        }else if($cards[0]['number']== 10 && $cards[1]['number']==13 && $cards[2]['number']==12 && $cards[3]['number']==11 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
            echo "ロイヤルストレートフラッシュ";
        }else if($cards[0]['number']== 10 && $cards[1]['number']==11 && $cards[2]['number']==12 && $cards[3]['number']==13 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
            echo "ロイヤルストレートフラッシュ";
        }else if($cards[0]['number']== 10 && $cards[1]['number']==13 && $cards[2]['number']==12 && $cards[3]['number']==11 && $cards[4]['number']==1 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
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
        }else if($cards[0]['number']== 1 && $cards[3]['number']==10 && $cards[2]['number']==11 && $cards[1]['number']==12 && $cards[4]['number']==13 && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']){
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
        }

    /**ストレートフラッシュ */
    else if ($cards[0]['number'] +1 ==$cards[1]['number'] && $cards[1]['number'] +1 ==$cards[2]['number']&& $cards[2]['number']+1==$cards[3]['number']&& $cards[3]['number']+1==$cards[4]['number'] && $cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit'] ) {
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

    else if ($cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[3]['number']&& $cards[3]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number']&& $cards[0]['number']==$cards[3]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number']&& $cards[0]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number']&& $cards[1]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[2]['number']==$cards[1]['number'] && $cards[2]['number']==$cards[3]['number']&& $cards[2]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }else if ($cards[0]['number']==$cards[1]['number'] && $cards[1]['number']==$cards[3]['number']&& $cards[3]['number']==$cards[4]['number'] ) {
        echo "フォーカード" ;
    }else if($cards[1]["suit"] == 'joker' && $cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[3]['number'] ){
        echo "フォーカード" ;
    }else if($cards[3]["suit"] == 'joker' && $cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number'] ){
        echo "フォーカード" ;
    }else if($cards[4]["suit"] == 'joker' && $cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[3]['number'] ){
        echo "フォーカード" ;
    }else if($cards[1]["suit"] == 'joker' && $cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[4]['number'] ){
        echo "フォーカード" ;
    }else if($cards[4]["suit"] == 'joker' &&$cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number'] ){
        echo "フォーカード" ;
    }else if($cards[3]["suit"] == 'joker' &&$cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "フォーカード" ;
    }else if($cards[2]["suit"] == 'joker' &&$cards[1]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "フォーカード" ;
    }else if($cards[1]["suit"] == 'joker' &&$cards[2]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "フォーカード" ;
    }else if($cards[3]["suit"] == 'joker' &&$cards[1]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "フォーカード" ;
    }else if($cards[2]["suit"] == 'joker' && $cards[1]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "フォーカード" ;
    }else if($cards[1]["suit"] == 'joker' && $cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "フォーカード" ;
    }else if($cards[4]["suit"] == 'joker' && $cards[0]['number']==$cards[1]['number'] && $cards[1]['number']==$cards[2]['number'] ){
        echo "フォーカード" ;
    }else if($cards[0]["suit"] == 'joker' && $cards[1]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[3]['number'] ){
        echo "フォーカード" ;
    }else if($cards[0]["suit"] == 'joker' && $cards[1]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[3]['number'] ){
        echo "フォーカード" ;
    }else if($cards[2]["suit"] == 'joker' && $cards[0]['number']==$cards[1]['number'] && $cards[1]['number']==$cards[3]['number'] ){
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
    }else if($cards[2]['number']==$cards[3]['number'] && $cards[0]['number']==$cards[1]['number'] &&  $cards[1]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[2]['number'] &&  $cards[1]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[1]['number']==$cards[3]['number'] && $cards[0]['number']==$cards[2]['number'] &&  $cards[2]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[4]['number'] == 0 && $cards[0]['number']==$cards[1]['number'] &&  $cards[1]['number']==$cards[2]['number']){
        echo "フルハウス" ;
    }else if($cards[4]['number'] == 0 && $cards[0]['number']==$cards[1]['number'] &&  $cards[1]['number']==$cards[2]['number']){
        echo "フルハウス" ;
    }else if($cards[3]['number'] == 0 && $cards[0]['number']==$cards[1]['number'] &&  $cards[1]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }else if($cards[4]['suit'] == 'joker' && $cards[0]['number']==$cards[2]['number'] && $cards[3]['number']==$cards[1]['number'] ){
        echo "フルハウス" ;
    }else if($cards[3]['suit'] == 'joker' && $cards[1]['number']==$cards[4]['number'] && $cards[2]['number']==$cards[0]['number'] ){
        echo "フルハウス" ;
    }else if($cards[0]['suit'] == 'joker' && $cards[1]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[0]['suit'] == 'joker' && $cards[1]['number']==$cards[2]['number'] && $cards[3]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[1]['suit'] == 'joker' && $cards[2]['number']==$cards[3]['number'] && $cards[0]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[1]['suit'] == 'joker' &&$cards[2]['number']==$cards[0]['number'] && $cards[4]['number']==$cards[3]['number'] ){
        echo "フルハウス" ;
    }else if($cards[2]['suit'] == 'joker' && $cards[0]['number']==$cards[1]['number'] && $cards[3]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[2]['suit'] == 'joker' && $cards[0]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[3]['suit'] == 'joker' &&$cards[0]['number']==$cards[1]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[1]['suit'] == 'joker' && $cards[0]['number']==$cards[2]['number'] && $cards[3]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[0]['suit'] == 'joker' && $cards[1]['number']==$cards[4]['number'] && $cards[2]['number']==$cards[3]['number'] ){
        echo "フルハウス" ;
    }else if($cards[4]['suit'] == 'joker' &&$cards[0]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[2]['number'] ){
        echo "フルハウス" ;
    }else if($cards[0]['suit'] == 'joker' &&$cards[1]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[1]['suit'] == 'joker' &&$cards[0]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[2]['suit'] == 'joker' && $cards[0]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[3]['suit'] == 'joker' && $cards[0]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "フルハウス" ;
    }else if($cards[1]['number']==$cards[2]['number'] && $cards[0]['number']==$cards[3]['number'] &&  $cards[3]['number']==$cards[4]['number']){
        echo "フルハウス" ;
    }

    else if($cards[1]['number']== 0 && $cards[2]['number']==$cards[3]['number'] ){
        echo "スリーカード" ;
    }else if($cards[2]['number']== 0 && $cards[1]['number']==$cards[3]['number'] ){
        echo "スリーカード" ;
    }else if($cards[3]['number']== 0 && $cards[1]['number']==$cards[2]['number'] ){
        echo "スリーカード" ;
    }else if($cards[4]['number']== 0 && $cards[1]['number']==$cards[2]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[2]['number']==$cards[3]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']==$cards[1]['number'] && $cards[0]['number']==$cards[2]['number'] ){
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
    }else if($cards[0]['number']== 0 && $cards[2]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[3]['number']== 0 && $cards[0]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[2]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[3]['number']== 0 && $cards[0]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[1]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[1]['number']==$cards[3]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[1]['number']==$cards[2]['number'] ){
        echo "スリーカード" ;
    }else if($cards[4]['number']== 0 && $cards[1]['number']==$cards[2]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[2]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[3]['number']== 0 && $cards[0]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[2]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[3]['number']== 0 && $cards[0]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[1]['number']==$cards[4]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[1]['number']==$cards[3]['number'] ){
        echo "スリーカード" ;
    }else if($cards[0]['number']== 0 && $cards[1]['number']==$cards[2]['number'] ){
        echo "スリーカード" ;
    }else if($cards[1]['number']== 0 && $cards[2]['number']==$cards[3]['number'] ){
        echo "スリーカード" ;
    }else if($cards[4]['number']== 0 && $cards[0]['number']==$cards[1]['number'] ){
        echo "スリーカード" ;
    }else if($cards[1]['number']== 0 && $cards[0]['number']==$cards[2]['number'] ){
        echo "スリーカード" ;
    }else if($cards[2]['number']== 0 && $cards[0]['number']==$cards[1]['number'] ){
        echo "スリーカード" ;
    }else if($cards[3]['number']== 0 && $cards[0]['number']==$cards[1]['number'] ){
        echo "スリーカード" ;
    }

    else if($cards[0]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[3]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[1]['number'] && $cards[2]['number']==$cards[3]['number'] ){
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
    }else if($cards[1]['number']==$cards[4]['number'] && $cards[2]['number']==$cards[3]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[2]['number'] ){
        echo "ツーペア" ;
    }else if($cards[1]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[2]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[3]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[2]['number'] && $cards[1]['number']==$cards[4]['number'] ){
        echo "ツーペア" ;
    }else if($cards[0]['number']==$cards[1]['number'] && $cards[2]['number']==$cards[3]['number'] ){
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


    else if($cards[0]['number']===$cards[1]['number'] ){
        echo "ワンペア" ;
    }else if($cards[0]['number']===$cards[2]['number']){
        echo "ワンペア" ;
    }else if($cards[0]['number']===$cards[3]['number']){
        echo "ワンペア" ;
    }else if($cards[0]['number']===$cards[4]['number']){
        echo "ワンペア" ;
    }else if($cards[1]['number']===$cards[2]['number']){
        echo "ワンペア" ;
    }else if($cards[1]['number']===$cards[3]['number']){
        echo "ワンペア" ;
    }else if($cards[1]['number']===$cards[4]['number']){
        echo "ワンペア" ;
    }else if($cards[2]['number']===$cards[3]['number']){
        echo "ワンペア" ;
    }else if($cards[2]['number']===$cards[4]['number']){
        echo "ワンペア" ;
    }else if($cards[3]['number']===$cards[4]['number']){
        echo "ワンペア" ;
    }

    else if ($cards[0]['suit'] == $cards[1]['suit'] && $cards[1]['suit'] == $cards[2]['suit'] && $cards[2]['suit'] == $cards[3]['suit'] && $cards[3]['suit'] == $cards[4]['suit']&&$cards[0]['number'] != $cards[1]['number'] && $cards[1]['number'] != $cards[2]['number'] && $cards[2]['number'] != $cards[3]['number'] && $cards[3]['number'] != $cards[4]['number'] ) {
        echo "フラッシュ" ;
    }

else if($cards[0]['number']+1==$cards[3]['number']
&& $cards[3]['number']+1== $cards[4]['number']
&& $cards[4]['number']+1==$cards[1]['number']
&& $cards[1]['number']+1==$cards[2]['number']){
    echo"ストレート" ;
}else if($cards[1]['number']+1==$cards[3]['number']
&& $cards[3]['number']+1== $cards[4]['number']
&& $cards[4]['number']+1==$cards[0]['number']
&& $cards[0]['number']+1==$cards[2]['number']){
    echo"ストレート" ;
}else if($cards[1]['number']+1==$cards[3]['number']
&& $cards[3]['number']+1== $cards[2]['number']
&& $cards[2]['number']+1==$cards[0]['number']
&& $cards[0]['number']+1==$cards[4]['number']){
    echo"ストレート" ;
}else if($cards[2]['number']+1==$cards[3]['number']
&& $cards[3]['number']+1== $cards[4]['number']
&& $cards[4]['number']+1==$cards[1]['number']
&& $cards[1]['number']+1==$cards[0]['number']){
    echo"ストレート" ;
}else if($cards[2]['number']+1==$cards[4]['number']
&& $cards[4]['number']+1== $cards[1]['number']
&& $cards[1]['number']+1==$cards[0]['number']
&& $cards[0]['number']+1==$cards[3]['number']){
    echo"ストレート" ;
}else if($cards[2]['number']+1==$cards[3]['number']
&& $cards[3]['number']+1== $cards[1]['number']
&& $cards[1]['number']+1==$cards[4]['number']
&& $cards[4]['number']+1==$cards[0]['number']){
    echo"ストレート" ;
}else if($cards[3]['number']+1==$cards[1]['number']
&& $cards[1]['number']+1== $cards[2]['number']
&& $cards[2]['number']+1==$cards[0]['number']
&& $cards[0]['number']+1==$cards[4]['number']){
    echo"ストレート" ;
}else if($cards[3]['number']+1==$cards[0]['number']
&& $cards[0]['number']+1== $cards[1]['number']
&& $cards[1]['number']+1==$cards[4]['number']
&& $cards[4]['number']+1==$cards[2]['number']){
    echo"ストレート" ;
}
    else if($cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number']
    && $cards[2]['number'] +1 ==$cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number']
    && $cards[2]['number'] +1 ==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']) {
        echo "ストレート" ;
    }else if ($cards[2]['number'] +1 ==$cards[1]['number']
    && $cards[1]['number'] +1 ==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number']
    && $cards[2]['number'] +1 ==$cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[0]['number']
    && $cards[0]['number'] +1 ==$cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']) {
        echo "ストレート" ;
    }else if($cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if ($cards[0]['number'] +1 ==$cards[1]['number']
    && $cards[1]['number'] +1 ==$cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']) {
        echo "ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number']
    &&$cards[4]['number']+1 == $cards[2]['number']
    && $cards[2]['number']+1 ==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo "ストレート";
    }else if($cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1 == $cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']){
        echo "ストレート";
    }else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[0]['number']
    && $cards[0]['number'] +1 ==$cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']) {
        echo "ストレート" ;
    }else if($cards[0]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1 ==$cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']){
        echo "ストレート" ;
    }else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']){
        echo "ストレート" ;
    }else if($cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[1]['number']
    && $cards[1]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[0]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number'] +1== $cards[2]['number']
    && $cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[1]['number']
    && $cards[1]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[4]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[3]['number']){
        echo"ストレート" ;
    }else if($cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number'] +1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[1]['number']
    && $cards[1]['number']+1==$cards[4]['number']){
        echo "ストレート" ;
    }else if($cards[2]['number']+1==$cards[0]['number']
    && $cards[0]['number'] +1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[1]['number']){
        echo "ストレート" ;
    }else if($cards[1]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1== $cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']){
        echo "ストレート" ;
    }else if($cards[1]['number']+1==$cards[0]['number']
    && $cards[0]['number']+1== $cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']
    && $cards[2]['number']+1==$cards[4]['number']){
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[2]['number']
    && $cards[2]['number'] +1 ==$cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[3]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[3]['number']
    && $cards[3]['number'] +1 ==$cards[0]['number']
    && $cards[0]['number']+1==$cards[4]['number']
    && $cards[4]['number']+1==$cards[2]['number']) {
        echo "ストレート" ;
    }else if ($cards[1]['number'] +1 ==$cards[4]['number']
    && $cards[4]['number'] +1 ==$cards[0]['number']
    && $cards[0]['number']+1==$cards[3]['number']
    && $cards[3]['number']+1==$cards[2]['number']) {
        echo "ストレート" ;
    }
    /**jokerワンペア*/
    else if($cards[0]['suit'] == 'joker' && $cards[0]['number'] == 0 ||
    $cards[1]['suit'] == 'joker' && $cards[1]['number'] == 0 ||
    $cards[2]['suit'] == 'joker' && $cards[2]['number'] == 0 ||
    $cards[3]['suit'] == 'joker' && $cards[3]['number'] == 0 ||
    $cards[4]['suit'] == 'joker' && $cards[4]['number'] == 0
    ){
echo "ワンペア";
}
    else {
        echo "無し" ;
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ポーカー役判定（ジョーカーあり）</title>
</head>
<body>
    <section>
        <p>手札は</p>
        <p><?php foreach($cards as $card): ?><?=$card['suit'].$card['number']."\n" ?><?php endforeach; ?></p>
        <p>役は<?=judge($cards) ?>です。</p>
    </section>
</body>
