<?php
function classArray($arr){
  $res= array();
for($i= 0 ; $i < count($arr); $i++)
  if($arr[$i]>12)
  array_push($res, $arr[$i]);
  return $res;
}
print_r(classArray(array(21, 45, 87, "a",11,0)));
 ?>
