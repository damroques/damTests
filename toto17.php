<?php

function maximum($ints)
{
  $res = 0;

  if (!isset($ints))
  {
    return 0;
  }
 foreach($ints as $number)
 {
   if($res == null || $number > $res)
    {
      $res = $number;
    }
  }

  return $res;
}

print_r(maximum(array(0, 32, 789, -12, 3456, -3456)));
 ?>
