<?php

namespace HexletBasics\Logic\Predicates;

function isMister($type){
    return $type === 'Mister';
}
var_dump(isMister('Mister'));
var_dump(isMister('Misiss'));
?>