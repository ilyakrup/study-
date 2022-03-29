<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

function whoIsThisHouseToStarks($war){
    if ($war === 'Karstark'||$war === 'Tully'){
        $wartype = 'friend';
    }
    elseif ($war === 'Lannister' || $war === 'Frey'){
        $wartype = 'enemy';
    }
    else{
        $wartype = 'neutral';
    }
    return $wartype;
}
?>