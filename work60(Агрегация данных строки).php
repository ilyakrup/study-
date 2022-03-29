<?php

namespace HexletBasics\Loops\AgregationString;

function joinNumbersFromRange($text, $times){
    $result = '';
    $i = $text;
    while ($i <= $times){
        $result = "{$result}{$i}";
        $i = $i + 1;

    }
    return $result;
}
?>