<?php
function versX($arr){
$res = null;
$target = -9;
foreach($arr as $value){
  if($res == null || abs($res - $target)> abs($value - $target)){
    $res = $value;
  }
  }
  return $res;
}
echo(versX(array( 55,1, 67, -12, 98, 0, 1024,2)));
?>
