Решение учителя:
<?php

namespace HexletBasics\Loops\ReturnFromLoop;


function hasChar($str, $a)
{
    $length = strlen($str);
    $index = 0;
    while ($index < $length) {
        $current = $str[$index];
        if ($current === $a) {
            return true;
        }

        $index++;
    }

    return false;
}
?>