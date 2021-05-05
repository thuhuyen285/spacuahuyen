<?php
 require_once '../systems/database.php';
 class model_dienthoai extends model_system  {
      function stores($tieude,$noidung, $urlHinh,$ngaytao,$MoTa,$idNSX){  //hàm lưu 1 record vào table
          $sql="INSERT INTO dienthoai (tieude, noidung, urlHinh,ngaytao, MoTa,idNSX) 
          VALUES ('$tieude','$noidung', '$urlHinh','$ngaytao', '$MoTa', '$idNSX')";
          $this->exec1($sql);
      }
      function updates($idDT,$tieude,$noidung, $urlHinh,$MoTa,$idNSX){ //hàm cập nhật 1 record vào table
        if( $urlHinh != ''){
          $sql="UPDATE dienthoai set tieude='$tieude',noidung ='$noidung',urlHinh ='$urlHinh',MoTa ='$MoTa',idNSX ='$idNSX' where idDT = $idDT";
        }else{
          $sql="UPDATE dienthoai set tieude='$tieude',noidung ='$noidung',MoTa ='$MoTa',idNSX ='$idNSX' where idDT = $idDT";
        }
        
        $this->exec1($sql);
      }
      function deletes($idDT){  //hàm xóa 1 record khỏi table
        $sql = "DELETE from dienthoai where idDT = '$idDT'";
        $this->exec1($sql);
    }
  

    function countAllBlog()
    {
        $sql = "SELECT count(*) AS sodong FROM dienthoai";
        return $this->result1(1,$sql)['sodong'];
    }
    function GetProductList($CurrentPage){
      $sql = "SELECT * FROM dienthoai WHERE idDT != 0";
      if ($CurrentPage !== 0)
      {
          $sql .= " GROUP BY idDT LIMIT ".($CurrentPage - 1) * PAGE_SIZE.", ".PAGE_SIZE;
      }
      return $this->result1(0,$sql);
  }

    function getdienthoaitheoloai($pagenum, $pagesize){
      $start_row = ($pagenum - 1) * $pagesize;
      $sql = "SELECT * FROM dienthoai dt inner join nhasanxuat nx on nx.idNSX = dt.idNSX ORDER BY idDT DESC limit $start_row, $pagesize";
      $kq= $this->result1(0,$sql);
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
      $kq= $this->result1(0,$sql);
      return $kq;
    }


      function getchitiet($id){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM dienthoai where idDT=?";
        $kq= $this->result1(1,$sql,$id);
        return $kq;
      }
      function getthuoctinh($id){ //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM thuoctinhdt where idDT=$id";
        $kq= $this->result1(0,$sql);
        return $kq;
      }
      public function Page (int $TotalProduct, int $CurrentPage)
    {
        $LimitPage = 5; // 5 sản phẩm 2 trang

        $PagedHTML = ''; // khởi tạo

        $CurrentQuery = $_GET; //query hiện tại

        $NextQuery = $_GET; //next query
        $PrevQuery = $_GET; // query trước

        $LastQuery = $_GET; // query trước đây
        $FirstQuery = $_GET; // query đầu tiên

        $IsLastButtonHidden = '';
        $IsNextButtonHidden = '';

        $IsFirstButtonHidden = '';
        $IsPreviousButtonHidden = '';

        $TotalPage = ceil($TotalProduct / PAGE_SIZE); // tổng số page

        if($CurrentPage === 1)
        {
            $IsFirstButtonHidden = 'hidden';
            $IsPreviousButtonHidden = 'hidden';
        }
        // nếu page == 1 thì không cho quay về trang trước

        if ((int) $CurrentPage === (int) $TotalPage)
        {
            $IsLastButtonHidden = 'hidden';
            $IsNextButtonHidden = 'hidden';
        }
        // nếu tổng số page hiện tại == current page thì không có tiếp tục

        $NextQuery['Page'] = $CurrentPage + 1;     //tạo ra query tiếp theo
        $LastQuery['Page'] = $TotalPage; // tạo ra query cuối
   


        $NextButton = '<li class="'.$IsNextButtonHidden.' page-item"><a class="page-link" href="?'.http_build_query($NextQuery).'">></a></li>';
        $LastButton = '<li class="'.$IsLastButtonHidden.' page-item"><a class="page-link" href="?'.http_build_query($LastQuery).'">>|</a></li>';

        $PrevQuery['Page'] = $CurrentPage - 1; //trở về trang trước
        $FirstQuery['Page'] = 1; // trở về trang 1

        $PreviousButton = '<li class="'.$IsFirstButtonHidden.' page-item"><a class="page-link" href="?'.http_build_query($PrevQuery).'"><</a></li>';
        $FirstButton = '<li class="'.$IsPreviousButtonHidden.' page-item"><a class="page-link" href="?'.http_build_query($FirstQuery).'">|<</a></li>';
        // trở về trang trước
        // trở về trang đâu
        $PagedHTML .= $FirstButton.$PreviousButton;
        //tạo html
        if ($CurrentPage <= $TotalPage && $TotalPage >= 1) // nếu page hiện tại nhỏ hơn hoặc bằng tổng số page và và tổng số page >=1
        {
            $PageBreak = 1; // break page

            if ($CurrentPage > ($LimitPage / 2)) // nếu page hiện tại lớn hon 5/2 
            {
                $CurrentQuery['Page'] = 1; // page hiện tại bằng 1 

                $PagedHTML .= '<li class="page-item"><a class="page-link" href="?'.http_build_query($CurrentQuery).'">1</a></li>'; // trang đầu
                $PagedHTML .= '<li class="page-item"><a class="page-link">...</a></li>'; // đến ....
            }

            $Loop = $CurrentPage; // lặp = page hiện tại
           
            while ($Loop <= $TotalPage) // curren page => tổng số page
            {
                if ($PageBreak < $LimitPage) // nếu pagebreak ++ nếu pagebreak < 5 (limit page)
                {
                    $CurrentQuery['Page'] = $Loop; // gán lại cho current query

                    if ($CurrentPage === $Loop) // nếu currentpage == loop
                    {
                        $PagedHTML .= '<li class="active page-item"><a class="page-link" href="?'.http_build_query($CurrentQuery).'">'.$Loop.'</a></li>';
                    } else $PagedHTML .= '<li class="page-item"><a class="page-link" href="?'.http_build_query($CurrentQuery).'">'.$Loop.'</a></li>';
                }

                $PageBreak++;
                $Loop++;
            }

            if ($CurrentPage < ($TotalPage - ($LimitPage / 2))) 
            {
                $CurrentQuery['Page'] = $TotalPage;

                $PagedHTML .= '<li class="page-item"><a class="page-link"  href="?'.http_build_query($CurrentQuery).'">...</a></li>';
                $PagedHTML .= '<li class="page-item"><a class="page-link" href="?'.http_build_query($CurrentQuery).'">'.$TotalPage.'</a></li>';
            }
        }

        return $PagedHTML.$NextButton.$LastButton;
    }

     } 

 //class 