<?php
require_once "models/model_dienthoai.php"; //nạp model để có các hàm tương tác db
class dienthoai {
     function __construct()   {
        $this->model = new model_dienthoai();
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
      if (isset($_GET['pagenum'])==true) $pagenum = $_GET['pagenum'];
         settype($pagenum,'int');
         if($pagenum<=0) $pagenum=1;
         $pagesize = PAGE_SIZE;
         if (isset($_POST['pagenum'])&&($_POST['pagesize'])){
            $pagenum = $_POST['pagenum'];
         }
         $list = $this->model->getdienthoaitheoloai( $pagenum, $pagesize);
         $totalrows = $this->model->demdienthoai();
         $baseurl = ADMIN_URL . "?ctrl=dienthoai&act=index";
         $totalpages =  ceil($totalrows/$pagesize);
         $links = $this->model->taolinks($baseurl, $pagenum, $pagesize, $totalrows);
         $link = $this->model->taolink($baseurl, $pagenum, $pagesize, $totalrows);   
         $pase_tittle = "Danh sách sản phẩm";
         $pase_file = "views/dt_index.php";
         require_once "layout.php";
     }
      function addnew(){
         $list = $this->model->getnhasanxuat();
         $pase_tittle = "Thêm điện thoại";
         $pase_file = "views/dt_addnew.php";
         require_once "layout.php";
     }
     function store(){
          $tieude =$_POST['tieude'];
          $noidung =$_POST['noidung'];
          $urlHinh =$_POST['urlHinh'];
          $ngaytao =$_POST['ngaytao'];
          $MoTa =$_POST['MoTa'];
          $idNSX =$_POST['idNSX'];
          $tieude = trim(strip_tags($tieude));
          $noidung = trim(strip_tags($noidung));
          $urlHinh = trim(strip_tags($urlHinh));
          $MoTa = trim(strip_tags($MoTa));
          settype($idNSX,"int");
          $this->model->stores($tieude,$noidung,$urlHinh,$ngaytao,$MoTa,$idNSX);
          header("location: index.php?ctrl=dienthoai&act=index");
    }
     function edit(){
         $list = $this->model->getnhasanxuat();
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
         $urlHinh =$_POST['urlHinh'];
         $ngaytao =$_POST['ngaytao'];
         $MoTa =$_POST['MoTa'];
         $idNSX =$_POST['idNSX'];
         $tieude = trim(strip_tags($tieude));
         $noidung = trim(strip_tags($noidung));
         $urlHinh = trim(strip_tags($urlHinh));
          $MoTa = trim(strip_tags($MoTa));
          settype($idNSX,"int");
         $this->model->updates($idDT,$tieude,$noidung,$urlHinh,$ngaytao,$MoTa,$idNSX);
         header("location: index.php?ctrl=dienthoai");
     }
     function delete(){
         $idDT = $_GET['id'];
         settype($idDT,"int");
         $this->model->deletes($idDT);
         header("location: index.php?ctrl=dienthoai");
     }


 } //class dienthoai 