<?php

//ORM::configure('sqlite:./data.db');
//ORM::configure('return_result_sets', true);

class Query {

public $table;

  public function all(){

    //$rows = ORM::for_table("parent")->find_array();
    //$rows = ORM::for_table("parent")->find_many();
    $rows = ORM::for_table("{$this->table}")->find_many();
    return $rows;
  }

  public function one($id){
    $row = ORM::for_table("{$this->table}")->find_one($id);
    return $row;
  }
}
