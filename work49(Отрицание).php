<?php

namespace HexletBasics\Logic\LogicalNegation;
function isPalindrome($name){
    $lowname = strtolower($name);
    return $lowname === strrev($lowname);
}

function isNotPalindrome($name)
{
    return !isPalindrome($name);
}

?>