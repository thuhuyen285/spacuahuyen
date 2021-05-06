<?php 
session_start();
require_once "../../systems/config.php";
class Login
{
    function __construct()
    {
       
        $act = "login";
        if(isset($_GET["act"])==true) $act = $_GET['act'];
        switch ($act) {
            case 'login':
                $this->checkUser();
                break;
            case 'logout':
                $this->logOut();
                break; 
            default:
                break;
        }
     
    }
    function checkUser()
    {   
        if(isset($_POST['login'])&&($_POST['login']))
        {
            $user = $_POST['user'];
            $pass = $_POST['password'];
            
            if($user == ""||$pass == ""){
                $_SESSION['error_taikhoan'] = "Vui lòng điền đầy đủ thông tin.";
            }
            else
            {
                if( $user == 'admin' && $pass='huyen123')
                {
                    $_SESSION['sid'] = 1;
                    $_SESSION['suser'] = 'admin';
                    $_SESSION['role'] = 1;
                    header("location: ".ROOT_URL."/admin");
                    
                }else{
                    header('location: login.php?act=login');
                }
            }
    
        }
        require_once "../views/dangnhap.php";
    }
    function logOut()
    {
             unset($_SESSION['sid']);
            unset($_SESSION['suser']);
            unset($_SESSION['role']);
            header('location: dangnhap.php?act=login');
    }
}
new Login;