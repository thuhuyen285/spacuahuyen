<?php 
    session_start();
    require_once ("../systems/config.php");
    require_once ("../systems/database.php");
    // if(isset($_SESSION['Admin']) && ($_SESSION['Username'])){
    $ctrl='dienthoai';
    if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];  

    if ($ctrl=="dienthoai") {   
        require_once "controllers/dienthoai.php";  $controller = new dienthoai;
    }
    if ($ctrl=="dangnhap") {
        require_once "controllers/dangnhap.php";  $controller = new dangnhap;
    }
   
    // }else{
    //     header('location: index.php?ctrl=dangnhap');
    // }

 ?> 