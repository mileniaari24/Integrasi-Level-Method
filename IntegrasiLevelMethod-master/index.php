<?php
    include_once("config.php");
    include_once("controller/controller.php");
    include_once("model/db.php");
    include_once("model/dao_kat.php");
    include_once("model/kat.php");
    
   // include_once("view/cetak.php");

    $controller = new page_controller();
   // $ambil = new dao_kat();
   // $ambil -> select();
    $controller -> invoke();
   
   
?>