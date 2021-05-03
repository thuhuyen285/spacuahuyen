<?php 
    session_start();
    require_once ("../systems/config.php");
    require_once ("../systems/database.php");
    // if(isset($_SESSION['Admin']) && ($_SESSION['Username'])){
    $ctrl='home';
    if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];  
    if ($ctrl=="home") {
        require_once "controllers/home.php";  $controller = new home;
    }
    if ($ctrl=="nhasanxuat") {
        require_once "controllers/nhasanxuat.php";  $controller = new nhasanxuat;
    }
    if ($ctrl=="dienthoai") {   
        require_once "controllers/dienthoai.php";  $controller = new dienthoai;
    }
    if ($ctrl=="dangnhap") {
        require_once "controllers/dangnhap.php";  $controller = new dangnhap;
    }
    if ($ctrl=="donhang") {
        require_once "controllers/donhang.php";  $controller = new donhang;
    }
    // }else{
    //     header('location: index.php?ctrl=dangnhap');
    // }

 ?> 