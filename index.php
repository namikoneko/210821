<?php

//require_once '../libs/flight/Flight.php';
require_once "Autoloader.php";
require_once '../libs/Parsedown.php';
require_once '../libs/idiorm.php';
require_once 'page/parent.php';

ORM::configure('sqlite:./data.db');
ORM::configure('return_result_sets', true);

//$dirname = basename(__DIR__);
//Flight::set("dirname", $dirname);

//$p = new Person();
//$p->show();


Flight::start();
