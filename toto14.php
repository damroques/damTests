<?php
$tab = array();
function classage($arr)
{
  $res = null;
  global $tab;
  $cmt=count($arr);

  foreach ($arr as $value)
  {
    if($res == 0 || $res > $value )
    {
      $res = $value;
    }
  }
  array_push($tab, $res);
  unset($arr[array_search($res, $arr)]);

  if($cmt > 1){
    classage($arr);
  }
  return $tab;
}

print_r(classage(array(12, 45, 1, 78, 123, 2)));

?>
