<?php

if(isset($_GET['name']) && $_GET['name']!= null){
  echo "Hello " . $_GET['name'] . " !";
  setcookie('cook', $_GET['name'], strtotime('+30 days') );
}
elseif(isset($_COOKIE['cook'])){
  echo "Hello " . $_COOKIE['cook'] . " !";
}
  else{
    echo "hello platypus !";
  }


 ?>
