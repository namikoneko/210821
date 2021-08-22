<?php

//class Del extends Dirname {
class Del {

  public $table;
  public $filename;

  public function exe($id){
    $row = ORM::for_table($this->table)->find_one($id);
    $row->delete();
    $row->save();
    Flight::redirect("/{$this->filename}");
  }
}
