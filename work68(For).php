<?php

namespace HexletBasics\Loops\ForLoop;

function sumOfSeries($first, $last)
{
$result = 0;
for ($i = $first; $i <= $last; $i++) {
$result += $i;
}
return $result;
}
?>