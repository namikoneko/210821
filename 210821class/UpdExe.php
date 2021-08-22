<?php

//class UpdExe extends Dirname {
class UpdExe {

  public $table;
  public $filename;

  public function exe(){
    $id = Flight::request()->data->id;
    $row = ORM::for_table($this->table)->find_one($id);
    $row->title = Flight::request()->data->title;
    //$row->text = Flight::request()->data->text;
    $row->save();
    Flight::redirect("/{$this->filename}");
  }
}
