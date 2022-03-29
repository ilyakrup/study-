<?php

namespace HexletBasics\Logic\LogicalOperators;
function isLeapYear($year){
    return $year % 400 === 0 || ($year % 4 ===0 && $year % 100 !==0  );
}
isLeapYear(2018);
isLeapYear(2017);
isLeapYear(2016);
?>