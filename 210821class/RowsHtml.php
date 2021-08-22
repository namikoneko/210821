<?php

class RowsHtml {

public $rows;
public $filename;

  public function title(){
    $str = "";
    $l = new Link();
    $l->filename = $this->filename;

    foreach($this->rows as $row){
      $str .= $row->title;
      $str .= $l->upd("{$row->id}");
      $str .= $l->del("{$row->id}");
      $str .= "<br>";
    }

    return $str;
  }

}

