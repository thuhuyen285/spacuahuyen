<?php

class model_system{
  public $conn;
  function __construct(){    
        $opt = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $this->conn = new PDO(
             'mysql:host='.HOST_DB.';dbname='.NAME_DB,
             USER_DB, PASS_DB,$opt
         );
  }    
  function query($sql) { 
    $result = $this-> conn->query($sql);
    return $result;
  }
  function queryOne($sql) {          
        $result = $this->conn->query($sql);
        $row = $result->fetch();
        return $row;
  }
  function execute($sql) {           
        $result = $this->conn ->exec($sql);
        return $result;
  }
//   function result1($fe,$sql){ 
//       $sqlValue = array_slice(func_get_args(),2);
//       try {
//           $stmt = $this->$conn->prepare($sql); // select * from sanpham where id = ?

//           $stmt->execute($sqlValue);// thực thi
//           if($fe===0)return $stmt->fetchAll();elseif($fe===1)return $stmt->fetch(PDO::FETCH_ASSOC);// nếu tham số đầu tiên ===0 trả về tất cả sản phẩm, === 1 trả về 1 sản phẩm
          
//       } catch (PDOException $e) {
//           echo "Lỗi: " . $e->getMessage();
//       }
//       finally{
//           unset($conn);
//       }

//   }
  function kq($sql){
      $result = $this-> conn->query($sql);
      return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  function execpass($sql){
    $result = $this->conn->prepare($sql);
    $result->execute();
    return $result;
}
function action($sql){
  $result = $this->conn->exec($sql);
}
}//class
