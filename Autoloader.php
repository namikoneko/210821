<?php

spl_autoload_register(function($name){
  if($name === "Flight" or substr($name,0,6) === "flight"){
    require_once '../libs/flight/Flight.php';
  }else if($name === "Dirname"){
    require_once "./{$name}.php";
  }else{
  //require_once "../210821class/{$name}.php";
    require_once "./210821class/{$name}.php";
  }
});
