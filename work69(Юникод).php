<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($text)
{
    
    $len = mb_strlen($text);
    $result = '';
    for ($i = 0; $i < $len; $i++) {
        $symb = mb_substr($text, $i, 1);
        $lowSymbol = mb_strtolower($symb);
        if ($symb === $lowSymbol) {
            $result .= mb_strtoupper($symb);
        } else {
            $result .= $lowSymbol;
        }
    }

    return $result;
  
}
?>