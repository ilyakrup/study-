<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    $i = 4;
    while ($i >= $firstNumber){
        print_r($i);
        print_r("\n");
        $i = $i - 1 ;
    }
   print_r('finished!');
}
?>