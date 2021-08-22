<?php

class Dirname {

  protected $dirname;
  //protected $dirname = "210821";
  
  public function __construct(){
    $this->dirname = basename(__DIR__);
  }

}
