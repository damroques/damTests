<?php
class FileOwners
{
  public static function groupByOwners($files)
  {
    $res = array_flip($files);
    foreach($res as $key => $value){
      $res[$key]= implode(", ",array_keys($files,$key));
    }

    return $res;

  }
}
$files = array
(
"Input.txt" => "Randy",
"Code.py" => "Stan",
"Code.pyt" => "Stan",
"Codo.pyt" => "Stan",
"Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));
?>
