<?php
namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{   
  if (mb_strpos($text, $substr) === 0) {
      return true;
    
      
  }
    else {
        return false;
    }
}

?>