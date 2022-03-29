<?php

namespace HexletBasics\Logic\LogicalOperators2;

function isNeutralSoldier($colorArmor, $colorGuard){
    return $colorArmor !== 'red' && $colorGuard ===  'black';
}
?>