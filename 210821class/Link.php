<?php

class Link extends Dirname {

  public $filename;

  public function upd($id){
    $str = <<<EOD
    <a href="/{$this->dirname}/{$this->filename}-upd/{$id}">update</a>
EOD;
   return $str;
  }

  public function del($id){
    $str = <<<EOD
    <a href="/{$this->dirname}/{$this->filename}-del/{$id}">delete</a>
EOD;
   return $str;
  }

}
