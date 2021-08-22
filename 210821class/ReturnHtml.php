<?php

class ReturnHtml extends Dirname { 

//private $dirname;

   public function __construct(){
     //$this->dirname = dirname(__FILE__);
   }

   public function header(){
   $str = <<<EOD
     <!doctype>
      <html>
      <head>
      <meta charset="utf-8">
      <link rel="icon" href="/{$this->dirname}/favicon.svg" type="image/svg+xml">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://fonts.xz.style/serve/inter.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.2/n    ew.min.css">
      <link rel="stylesheet" href="/{$this->dirname}/style.css">
      </head>
      <body>
 EOD;
     return $str;
     //return "header show";
   }

   public function footer(){
     return "footer show";
   }
}
