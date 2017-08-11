<?php
function calcA(...$args){
  $res = null;
  for($i=0; $i<count($args); $i++){
$res += array_sum($args[$i]);
}
return $res;
}
echo(calcA(array(2,67,89,4), array(2,6,89,1000), array(100, 100)));
?>
