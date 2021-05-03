<?php
    session_start();
require_once "models/model_login.php"; //nạp model để có các hàm tương tác db
class dangnhap {
     function __construct()   {
        $this->model = new model_dangnhap();
        $act = "login";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
        switch ($act) {    
             case "getlogin": $this->getlogin(); break;
             case "login": $this->login(); break;
             case "logout": $this->logout(); break;
        }
        //$this->$act; 
     }
            function login(){
                    $page_title = "đăng nhập";
                    $page_file = "views/dangnhap.php";
                    require_once "views/dangnhap.php";
            }
            function getlogin(){
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];
                $row = $this->model->getlogin($Username,$Password);
                require_once "views/dangnhap.php";
         
            }
            function logout(){
                if(isset($_SESSION['Admin']) && ($_SESSION['Username'])){
                    unset($_SESSION['Admin']);
                    unset($_SESSION['Username']);
                    header("location: dangnhap.php");
                }
            }

}
?>
