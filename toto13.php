<?php
class Monnaie {

public $piece2 = 0;
public $billet5 = 0;
public $billet10 = 0;

}

function giveChange($s, $money){

if($s > 2){
while($s >= 10){
  $s -= 10;
  $money->billet10 ++;
  }
  while($s >= 5){
    $s -= 5;
    $money->billet5 ++;
}
 while($s >= 2){
  $s -= 2;
  $money->piece2 ++;
}
if($s % 2 == 0){
  echo "Le compte est bon !<br>";
}
else {
  echo "Je vous dois encore un euro, mais voici votre monnaie <br>";
}
return $s;
}
}
$money = new Monnaie;
$s = 199;
giveChange($s, $money);
echo "Nombre de billets de 10: " . $money->billet10 . "<br>";
echo "Nombre de billets de 5: " . $money->billet5 . "<br>";
echo "Nombre de pièces de 2: " . $money->piece2 . "<br>";
?>
