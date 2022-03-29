<?php

namespace HexletBasics\Conditionals\IfElse;
function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        $test = substr($url, 7);
    } 
    else {
        $test = $url;
    }

    return "https://{$test}";
}
?>