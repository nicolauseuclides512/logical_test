<?php
function divide($a, $b) {
    $counter = 0;
    while ($a > 1){
        $a-=$b;
        $counter++;
    }
    echo $counter;
}

divide(100,4);