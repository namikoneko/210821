<?php

class UpdHtml extends Dirname {

  public $table;
  public $filename;

  public function show($id){
    $str = "";
    $r = new ReturnHtml();
    $str .= $r->header();

    $q = new Query();
    $q->table = $this->table;
    $row = $q->one($id);

    $str2 = <<<EOD
      <form action="/{$this->dirname}/{$this->filename}-updexe" method="post">
      <div class="flex">
        <div class="text-only-insform">
          <input type="hidden" name="id" value="{$id}">
          <input type="text" name="title" value="{$row->title}">
          <input type="submit" value="send">
        </div>
       </div>
      </form>
      <br>
EOD;
    $str .= $str2;
    $str .= $r->footer();
    echo $str;
  }


}
