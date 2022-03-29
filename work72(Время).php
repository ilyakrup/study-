<?php

namespace HexletBasics\Dates\Timestamp;

const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp)
{
    
    return intval(floor($timestamp / SECONDS_IN_YEAR) + 1970);

}
?>