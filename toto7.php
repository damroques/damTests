<?php

$arr = array(12, -3, 45, 65, 1, 77.7, 4);
$target = 5;
$res = null;
foreach($arr as $value){
if($res == null || abs($res - $target) > abs($value - $target)){
  $res = $value;
}
}
echo $res;

 ?>
