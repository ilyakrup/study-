<?php

namespace HexletBasics\Loops\EdgeCases;

function isArgumentsForSubstrCorrect($str, $index, $long){
    if($long < 0 || $index < 0 || $index >= strlen($str) || $index + $long > strlen($str)){
        return false;
    }
        return true;
    }

?>