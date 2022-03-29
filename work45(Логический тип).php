<?php

namespace HexletBasics\Logic\BoolType;
function isPensioner($age){
    return $age >= 60;
}
var_dump(isPensioner(71));
var_dump(isPensioner(59));

?>