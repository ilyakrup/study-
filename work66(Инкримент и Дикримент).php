<?php

namespace HexletBasics\Loops\Mutators;

function makeItFunny($text, $symb)
{
    $i = 0;
    $result = '';
    while ($i < strlen($text)) {
        $currentChar = $text[$i];
        if (($i + 1) % $symb === 0) {
            $upperChar = strtoupper($currentChar);
            $result = "{$result}{$upperChar}";
        } else {
            $result = "{$result}{$currentChar}";
        }
        $i++;
    }

    return $result;
}
?>