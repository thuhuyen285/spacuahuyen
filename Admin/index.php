<?php 
    session_start();
    require_once ("../systems/config.php");
    require_once ("../systems/database.php");
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
        $ctrl='dienthoai';
        if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];  

        if ($ctrl=="dienthoai") {   
            require_once "controllers/dienthoai.php";  $controller = new dienthoai;
        }
        if ($ctrl=="dangnhap") {
            require_once "controllers/dangnhap.php";  $controller = new Login;
        }
    
    }  else{
        header("location: controllers/dangnhap.php");
      }

 ?> 