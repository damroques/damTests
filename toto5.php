<?php

function strToAscii ($str)
{
  $ascii = array();
  $res= null;
  for($i = 0 ; $i < strlen($str); $i++){
    $res = ord($str[$i]);
    array_push($ascii, $res);

  }
print_r($ascii);
}

strToAscii("zorro");



 ?>
