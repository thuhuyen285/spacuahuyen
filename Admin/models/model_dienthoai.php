<?php
 require_once '../systems/database.php';
 class model_dienthoai extends model_system  {
      function stores($tieude,$noidung, $urlHinh,$ngaytao,$MoTa,$idNSX){  //hàm lưu 1 record vào table
          $sql="INSERT INTO dienthoai (tieude, noidung, urlHinh,ngaytao, MoTa,idNSX) 
          VALUES ('$tieude','$noidung', '$urlHinh','$ngaytao', '$MoTa', '$idNSX')";
          $this->execute($sql);
      }
      function updates($idDT,$tieude,$noidung, $urlHinh,$ngaytao,$MoTa,$idNSX){ //hàm cập nhật 1 record vào table
        $sql="UPDATE dienthoai set tieude='$tieude',noidung ='$noidung',urlHinh ='$urlHinh',ngaytao ='$ngaytao',MoTa ='$MoTa',idNSX ='$idNSX' where idDT = $idDT";
        $this->execute($sql);
      }
      function deletes($idDT){  //hàm xóa 1 record khỏi table
        $sql = "DELETE from dienthoai where idDT = '$idDT'";
        $this->execute($sql);
    }
    //   function getdienthoai(){  
    //       $sql = "SELECT * FROM dienthoai dt inner join nhasanxuat nx on nx.idNSX = dt.idNSX ORDER BY idDT DESC limit 4 ";
    //       $kq= $this->query($sql);
    //       return $kq;
    //  }

     function demdienthoai() {   
      $sql="SELECT count(*) as sodong FROM  dienthoai";
      $kq = $this->query($sql);
      $row= $kq -> fetch();
      $rowcount = $row['sodong'];
      return $rowcount;
  }
    function getdienthoaitheoloai($pagenum, $pagesize){
      $start_row = ($pagenum - 1) * $pagesize;
      $sql = "SELECT * FROM dienthoai dt inner join nhasanxuat nx on nx.idNSX = dt.idNSX ORDER BY idDT DESC limit $start_row, $pagesize";
      $kq= $this->query($sql);
      return $kq;

}
    function taolinks($baseurl, $pagenum, $pagesize, $totalrows){
        if($totalrows<=0) return "";
        $totalpages =  ceil($totalrows/$pagesize);
        if($totalpages<=1) return "";
        $links="";
        if ($pagenum>=2){
            $links="<li class='page-item'><a href='{$baseurl}' class='page-link'><<</a></li>"; 
            $pr = $pagenum-1;
            $links.="<li class='page-item'><a href='{$baseurl}&pagenum={$pr}' class='page-link'> <</a></li>";
          } 
        //   $links.="<li class='page-item active'><span class='page-link'>{$pagenum}</span></li>";    
              

        return $links;
    }

    function taolink($baseurl, $pagenum, $pagesize, $totalrows){
        if($totalrows<=0) return "";
        $totalpages =  ceil($totalrows/$pagesize);
        if($totalpages<=1) return "";
        $link="";
        //   $links.="<li class='page-item active'><span class='page-link'>{$pagenum}</span></li>";    
          if ($pagenum<$totalpages){
            $pn = $pagenum + 1;
            $link="<li class='page-item'><a href='{$baseurl}&page_num={$pn}' class='page-link'> > </a></li>";        
            $link.="<li class='page-item'><a href='{$baseurl}&page_num={$totalpages}' class= 'page-link'>>></a></li>";
          }
        return $link;
    }

     function getnhasanxuat(){ 
      $sql = "SELECT * FROM nhasanxuat ";
      $kq= $this->query($sql);
      return $kq;
    }


      function getchitiet($id){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM dienthoai where idDT=$id";
        $kq= $this->queryOne($sql);
        return $kq;
      }
      function getthuoctinh($id){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM thuoctinhdt where idDT=$id";
        $kq= $this->query($sql);
        return $kq;
      }

     } 

 //class 