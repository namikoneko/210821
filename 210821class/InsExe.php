<?php

//class InsExe extends Dirname {
class InsExe {

  public $table;
  public $filename;

  public function exe(){
    $row = ORM::for_table($this->table)->create();
    //$row->parentid = Flight::request()->data->parentid;
    $row->title = Flight::request()->data->title;
    //$row->text = Flight::request()->data->text;
    $row->date = date("Y-m-d");
    $row->updated = time();
    $row->save();
    Flight::redirect("/{$this->filename}");
    //echo "{$this->filename}";
    //Flight::redirect("/parent");
  }

}
