<?php
namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN
function filterString($str, $symb)
{
    $i = 0;
    $result = '';
    while ($i < strlen($str)) {
        $currentSymb = $str[$i];

        if ($currentSymb !== $symb) {
            $result = "{$result}{$currentSymb}";
        }

        $i += 1;
    }

    return $result;
}
?>