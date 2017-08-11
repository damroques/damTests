<?php
function str2ascii($str){
  $res = array();
for($i=0; $i<strlen($str); $i ++){
array_push($res ,ord($str[$i]));
}
return $res;
}
print_r(str2ascii("bingo"));
 ?>
