﻿<?php
// 以下をfor文を使用して表示してください。

// 1
// 21
// 321

for ($y = 1; $y <= 3; $y++) {    //yは1~3まで1づつ進む
    for ($x = $y; $x >= 1; $x--) {   //xとy等しい。xは1以下。xは1づつ減る。
      echo $x;
    }
    echo "</br>";
}
