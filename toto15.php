<?php
$tab= array();

function classPair($arr){

    global $tab;

  foreach ($arr as $value){

    if($value %2 == 0){
      array_push($tab, $value);
      unset($arr[array_search($value, $arr)]);
    }
  }
  print_r($arr);
  return $tab;
}
print_r(classPair(array(12, 45, 1, 78, 23, 2)));

?>
