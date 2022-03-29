<?php 
function generateAmount($amountOfGoods , $costAudit)
{
$number = $amountOfGoods ?: $costAudit *3;
return "{$number}!";
}
?>