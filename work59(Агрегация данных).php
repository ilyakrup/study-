<?php

namespace HexletBasics\Loops\AgregationNumber;
function multiplyNumbersFromRange($first, $end){
    $i = $first;
    $mult = 1;
    
    while($i <= $end){
        $mult = $mult * $i;
        $i = $i + 1;
    }
    return $mult;
}
?>