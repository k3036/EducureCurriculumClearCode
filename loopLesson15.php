<?php
for($abc = 1; $abc <= 4; $abc++){
    for($b = 0; $b <= $abc-2; $b++){
        echo "*";
    }
    for($a = $abc; $a <= 4; $a++){
        echo $a-$b;
    }
    for($c=4;$c>$abc;$c--){
        echo $c-$abc;
    }
    echo "</br>";
}

// 1234321
// *12321
// **121
// ***1
