<?php
    session_start();
 require_once '../systems/database.php';
 class model_dangnhap extends model_system  {
    function getlogin($Username,$Password){
        if (isset($_SESSION['Username']) || isset($_SESSION['Admin'])) {
            header("Location:index.php");
        }
        $check = "SELECT * FROM user WHERE Username = '$Username' AND Password = '$Password' AND VaiTro = :VaiTro ";
        $count = $this->conn->prepare($check);
        $count->execute(array(
            'VaiTro' => 0
        ));
        $check_admin = "SELECT * FROM user WHERE Username = '$Username' AND Password = '$Password' AND VaiTro = :VaiTro ";
        $cout_admin = $this->conn->prepare($check_admin);
        $cout_admin->execute(array(
            ':VaiTro' => 1
        ));
        if ($cout_admin->rowCount() > 0) {
            $_SESSION['Admin'] = $Username;
            header('location: ?ctrl=dienthoai');
        } elseif ($count->rowCount() > 0) {
            $_SESSION['Username'] = $Username;
            header('location: ?ctrl=dienthoai');
        } else {
            echo "Vui lòng đang nhập lại" ;
            header('location: views/dangnhap.php');
        }
    }
}
?>