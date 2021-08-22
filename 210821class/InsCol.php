<?php

class InsCol {

  public function titleText(){
    $str = "";
    $str = <<<EOD
          <input type="text" name="title">
          <textarea name="text"></textarea>
          <input type="submit" value="send">
EOD;
     return $str;
  }

}
