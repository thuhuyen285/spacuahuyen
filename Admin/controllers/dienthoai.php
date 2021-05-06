<?php

require_once "models/model_dienthoai.php"; //nạp model để có các hàm tương tác dbr
require_once "models/model_dienthoai.php"; //nạp model để có các hàm tương tác dbr
require_once "../lib/myfunctions.php";
$tieude =$_POST['tieude'];

class dienthoai {
     function __construct()   {
        $this->model = new model_dienthoai();
        $this->lib = new lib();
        $act = "index";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
        switch ($act) {    
             case "index": $this->index(); break;
             case "addnew": $this->addnew(); break;
             case "store": $this->store(); break;
             case "edit": $this->edit(); break;
             case "update": $this->update(); break;
             case "delete": $this->delete(); break;
        }
     }
     function index(){
        
        if (isset($_GET['Page'])) $CurrentPage = $_GET['Page']; else $CurrentPage = 1;
       
        $TotalProduct = $this->model->countAllBlog();

        if($TotalProduct == 0) $TotalProduct =1;

        $list = $this->model-> GetProductList($CurrentPage);


        $Pagination =  $this->model->Page($TotalProduct, $CurrentPage);
        
         $pase_tittle = "Danh sách sản phẩm";
         $pase_file = "views/dt_index.php";
         require_once "layout.php";
     }
      function addnew(){
         $pase_tittle = "Thêm điện thoại";
         $pase_file = "views/dt_addnew.php";
         require_once "layout.php";
     }
     function store(){
          $tieude =$_POST['tieude'];
          $noidung =$_POST['noidung'];
          $urlHinh =$_FILES['urlHinh'];
          $ngaytao =  date("Y-m-d h:i:s");
          $MoTa =$_POST['MoTa'];
          $idNSX =$_POST['idNSX'];
          $tieude = trim(strip_tags($tieude));
          $slug = $this->lib->slug($_POST['tieude']);
    
        
          $urlHinh =$this->lib->checkUpLoadMany($urlHinh);
          $MoTa = trim(strip_tags($MoTa));
          settype($idNSX,"int");
          $this->model->stores($tieude,$slug,$noidung,$urlHinh,$ngaytao,$MoTa,$idNSX);
          header("location: index.php?ctrl=dienthoai&act=index");
    }
     function edit(){
         $idDT = $_GET['id'];
         settype($idDT,"int");
         $row = $this->model->getchitiet($idDT);
         $pase_tittle = "Cập nhật điện thoại";
         $pase_file = "views/dt_edit.php";
         require_once "layout.php";
     }
     function update(){
         $idDT = $_POST['idDT'];
         $tieude =$_POST['tieude'];
         $noidung =$_POST['noidung'];
         $urlHinh =$_FILES['urlHinh'];
         $MoTa =$_POST['MoTa'];
         $idNSX =$_POST['idNSX'];
         $tieude = trim(strip_tags($tieude));
         $slug = $this->lib->slug($_POST['tieude']);
         $urlHinh =$this->lib->checkUpLoadMany($urlHinh);
          $MoTa = trim(strip_tags($MoTa));
          settype($idNSX,"int");
    
         $this->model->updates($idDT,$tieude,$slug,$noidung,$urlHinh,$MoTa,$idNSX);
         header("location: index.php?ctrl=dienthoai");
     }
     function delete(){
         $idDT = $_GET['id'];
         settype($idDT,"int");
         $this->model->deletes($idDT);
         header("location: index.php?ctrl=dienthoai");
     }


 } //class dienthoai 