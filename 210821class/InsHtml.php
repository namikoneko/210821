<?php

class InsHtml extends Dirname {

  public $filename;
  public $col;

  public function col($col){
    $str = "";
    $str2 = "";
    $str2 = <<<EOD
      <form action="/{$this->dirname}/{$this->filename}-insexe" method="post">
      <div class="flex">
        <div class="text-only-insform">
EOD;
    $str .= $str2;

    $str .= $col;

    $str2 = <<<EOD
          <input type="submit" value="send">
        </div>
       </div><!--flex-->
      </form>
      <br>
EOD;
    $str .= $str2;
    return $str;
  }

  public function show(){
    $str = "";
    $str2 = "";
    $str = <<<EOD
      <form action="/{$this->dirname}/{$this->filename}-insexe" method="post">
      <div class="flex">
        <div class="text-only-insform">
          <input type="text" name="title">
          <input type="submit" value="send">
        </div>
       </div>
      </form>
      <br>
EOD;
     return $str;
  }

}
