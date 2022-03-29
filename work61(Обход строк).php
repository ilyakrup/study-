<?php

namespace HexletBasics\Loops\IterationOverString;

function printReversedWordBySymbol($word){
    $i = 0;
   $revWord = strrev($word);
    while ($i < strlen( $revWord)){
        print_r (" $revWord[$i]\n");
       
        $i = $i +1;
    }
}
?>