﻿<?php
// 配列に日本,アメリカ,イギリス,フランスを
// 格納し、forecah文を使って順番に
// 「要素番号:国名」を出力してください。

$country=array(3);
$country[0]="「0:日本」"."\n";
$country[1]="「1:アメリカ」"."\n";
$country[2]="「2:イギリス」"."\n";
$country[3]="「3:フランス」";
foreach($country as $x){
    print $x;
}

//「0:日本」

//「1:アメリカ」

//「2:イギリス」

//「3:フランス」