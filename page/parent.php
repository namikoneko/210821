<?php
//ファイル名
$filename = mb_substr(basename(__FILE__),0,-4);
Flight::set("filename", $filename);
//テーブル名
Flight::set("table", "parent");

//Flight::route('/parent', function(){
//show
Flight::route("/{$filename}", function(){

$str = "";

//headerのhtml
$r = new ReturnHtml();
$str .= $r->header();

//insert用のform
$ic = new InsCol();
$insColStr = $ic->titleText();
$ins = new InsHtml();
//$ins->dirname = Flight::get("filename");
$ins->filename = Flight::get("filename");
$str .= $ins->col("{$insColStr}");
//$str .= $ins->show();

//dbからクエリする
$q = new Query();
$q->table = Flight::get("table");
$rows = $q->all();

//クエリしたデータを表示する
$rh = new RowsHtml();
$rh->rows = $rows;
$rh->filename = Flight::get("filename");
$str .= $rh->title();

//footerのhtml
$str .= $r->footer();
echo $str;

});

//insexe
Flight::route("/{$filename}-insexe", function(){
  $ie = new InsExe(Flight::get("table"));
  $ie->table = Flight::get("table");
  $ie->filename = Flight::get("filename");
  $ie->exe();
});

//upd
Flight::route("/{$filename}-upd/@id", function($id){
  $ue = new UpdHtml();
  $ue->table = Flight::get("table");
  $ue->filename = Flight::get("filename");
  $ue->show($id);
});

//updexe
Flight::route("/{$filename}-updexe", function(){
  $ue = new UpdExe();
  $ue->table = Flight::get("table");
  $ue->filename = Flight::get("filename");
  $ue->exe($id);
});

//delete
Flight::route("/{$filename}-del/@id", function($id){
//echo "upd" . $id;
  $d = new Del();
  $d->table = Flight::get("table");
  $d->filename = Flight::get("filename");
  $d->exe($id);
});

Flight::route('/test', function(){
echo Flight::get("dirname");
//echo basename(__DIR__);
  //echo mb_substr(basename(__FILE__),0,-4);
  //$t = new Test();
  //echo $t->show();

  //echo basename(__FILE__);
});
