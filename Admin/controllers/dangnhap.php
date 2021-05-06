<?php 

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
            $user = $this->lib->stripTags($_POST['user']);
            $pass = $this->lib->stripTags($_POST['password']);
           

            if($user == ""||$pass == ""){
                $_SESSION['error_taikhoan'] = "Vui lòng điền đầy đủ thông tin.";
            }elseif(empty($taiKhoan)){
                $_SESSION['error_taikhoan'] = "Tài khoản hoặc mật khẩu không đúng.";
            }
            else
            {
                if( $user == 'admin'&& $pass='huyen123')
                {
                    $_SESSION['sid'] = 1;
                    $_SESSION['suser'] = 'admin';
                    $_SESSION['role'] = 1;
                    header("location: ".ROOT_URL."/admin.php");
                }else{

                    header('location: login.php?act=login');
                }
            }
    
        }
        require_once "../views/dangnhap.php";
    }
    function logOut()
    {
        if(isset($_GET['logout'])&&($_GET['logout'])){
            unset($_SESSION['sid']);
            unset($_SESSION['suser']);
            unset($_SESSION['role']);
            header('location: login.php?act=login');
        }
    }
}
new Login;