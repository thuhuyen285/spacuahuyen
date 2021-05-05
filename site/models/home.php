<?php 

 use SendGrid\Mail\Mail;
 use SendGrid\Mail\TypeException;
class Model_home extends model_system{
    
    function getNewsSpecial()
    {
        $sql = "SELECT * FROM dienthoai WHERE idNSX=5 ORDER BY idDT DESC LIMIT 6";
        return $this->result1(0,$sql);
    }

    function getServiceSpecial()
    {
        $sql = "SELECT * FROM dienthoai WHERE idNSX=1 ORDER BY idDT DESC LIMIT 9";
        return $this->result1(0,$sql);
    }
    function getCustomerFeel()
    {
        $sql = "SELECT * FROM dienthoai WHERE idNSX=3 ORDER BY idDT DESC LIMIT 9";
        return $this->result1(0,$sql);
    }
    function getOnePro($slug){   
        $sql = "SELECT * FROM dienthoai WHERE slug=?";
        return $this->result1(1,$sql,$slug);
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
  


       $NextButton = '<li class="'.$IsNextButtonHidden.' page-item"><a class="page-number" href="?'.http_build_query($NextQuery).'">></a></li>';
       $LastButton = '<li class="'.$IsLastButtonHidden.' page-item"><a class="page-number" href="?'.http_build_query($LastQuery).'">>|</a></li>';

       $PrevQuery['Page'] = $CurrentPage - 1; //trở về trang trước
       $FirstQuery['Page'] = 1; // trở về trang 1

       $PreviousButton = '<li class="'.$IsFirstButtonHidden.' page-item"><a class="page-number" href="?'.http_build_query($PrevQuery).'"><</a></li>';
       $FirstButton = '<li class="'.$IsPreviousButtonHidden.' page-item"><a class="page-number" href="?'.http_build_query($FirstQuery).'">|<</a></li>';
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

               $PagedHTML .= '<li class="page-item"><a class="page-number" href="?'.http_build_query($CurrentQuery).'">1</a></li>'; // trang đầu
               $PagedHTML .= '<li class="page-item"><a class="page-number">...</a></li>'; // đến ....
           }

           $Loop = $CurrentPage; // lặp = page hiện tại
          
           while ($Loop <= $TotalPage) // curren page => tổng số page
           {
               if ($PageBreak < $LimitPage) // nếu pagebreak ++ nếu pagebreak < 5 (limit page)
               {
                   $CurrentQuery['Page'] = $Loop; // gán lại cho current query

                   if ($CurrentPage === $Loop) // nếu currentpage == loop
                   {
                       $PagedHTML .= '<li class="current page-item"><a class="page-number" href="?'.http_build_query($CurrentQuery).'">'.$Loop.'</a></li>';
                   } else $PagedHTML .= '<li class="page-item"><a class="page-number" href="?'.http_build_query($CurrentQuery).'">'.$Loop.'</a></li>';
               }

               $PageBreak++;
               $Loop++;
           }

           if ($CurrentPage < ($TotalPage - ($LimitPage / 2))) 
           {
               $CurrentQuery['Page'] = $TotalPage;

               $PagedHTML .= '<li class="page-item"><a class="page-number"  href="?'.http_build_query($CurrentQuery).'">...</a></li>';
               $PagedHTML .= '<li class="page-item"><a class="page-number" href="?'.http_build_query($CurrentQuery).'">'.$TotalPage.'</a></li>';
           }
       }

       return $PagedHTML.$NextButton.$LastButton;
   }

   function countAllPhone($slug,$from,$to,$hot,$query)
   {
      $sql = "SELECT idNSX FROM nhasanxuat WHERE slug=?";
      $idDT = $this->result1(1,$sql,$slug)['idNSX'];

       $sql = "SELECT count(*) AS sodong FROM dienthoai WHERE idDT != 0";
         if ($idDT != NULL)
         {
            $sql .= " AND idNSX =".$idDT; 
         }
         if ($from != NULL)
         {
            $sql .= " AND Gia >= ".$from; 
         }
         if ($to != NULL)
         {
            $sql .= " AND Gia <= ".$to; 
         }
         if ($hot != NULL)
         {
             $sql .= " AND Hot = ".$hot; 
         }
         if($query != NULL)
         {
            $sql .= ' AND TenDT LIKE "%'.$query.'%"';
         }
       return $this->result1(1,$sql)['sodong'];
   }
   function GetProductList($slug,$CurrentPage,$from,$to,$hot,$query){
      $sql = "SELECT idNSX FROM nhasanxuat WHERE slug=?";
      $idDT = $this->result1(1,$sql,$slug)['idNSX'];

      $sql = "SELECT * FROM dienthoai WHERE idDT != 0";
      if ($idDT != NULL)
      {
        $sql .= " AND idNSX = ".$idDT; 
      }
      if ($from != NULL)
      {
          $sql .= " AND Gia >= ".$from; 
      }
      if ($to != NULL)
      {
          $sql .= " AND Gia <= ".$to; 
      }
      if ($hot != NULL)
      {
          $sql .= " AND Hot = ".$hot; 
      }
      if($query != NULL)
      {
          $sql .= ' AND TenDT LIKE "%'.$query.'%" ';
      }
      if ($CurrentPage !== 0)
      {
          $sql .= " GROUP BY idDT LIMIT ".($CurrentPage - 1) * PAGE_SIZE.", ".PAGE_SIZE;
      }
      
      return $this->result1(0,$sql);
  }

  function addNewView($idsp){
      $sql = "UPDATE dienthoai SET SoLanXem=SoLanXem+1 WHERE idDT = ?";
      return $this->exec1($sql,$idsp);
  }

  function addComment($review,$name,$iddt,$iduser){
    $time = date("Y-m-d H:i:s");
    if($iduser != null){
        $sql = "INSERT INTO binhluan(NoiDungBl,TenKh,idDT,idUser,ThoiDiemBL,AnHien) VALUE(?,?,?,?,?,?)";
        return $this->getLastId($sql,$review,$name,$iddt,$iduser,$time,1);
    }else{
        $sql = "INSERT INTO binhluan(NoiDungBl,TenKh,idDT,ThoiDiemBL,AnHien) VALUE(?,?,?,?,?)";
        return $this->getLastId($sql,$review,$name,$iddt,$time,1);
    }
  }
  
  function getAllComment($slug){
      
    $sql = "SELECT * FROM dienthoai WHERE slug = ?";
    $kq =  $this->result1(1,$sql,$slug)['idDT'];
    $sql = "SELECT * FROM binhluan WHERE idDT = ? ORDER BY idDT DESC";
    return $this->result1(0,$sql,$kq);
  }
  function getOneComment($id){
    $sql = "SELECT * FROM binhluan WHERE idBL = ?";
    return $this->result1(1,$sql,$id);
  }
  function getLastIdBill()
  {
    $sql = "SELECT idDH FROM donhang ORDER BY idDH DESC LIMIT 1";
    return $this->result1(1,$sql)['idDH'];
  }

  function sendMailBill($BillID,$UserMail)
  {
        $lib = new lib();
        require_once "../lib/vendor/autoload.php";
        $Mailer = new \SendGrid\Mail\Mail();

        $CurrentDate = time();
        try
        {
            $Mailer -> setFrom('tranquangnhan1606@gmail.com', 'Trần Quang Nhân');
        }
        catch (TypeException $Error)
        {
            $lib -> LogFile($Error -> getMessage(), 'Active Mail Sender.', get_defined_vars());
            return false;
        }

        if ($_SESSION['suser']) $UserName = $_SESSION['suser']; else $UserName = '';

        $Mailer -> addTo($UserMail, $UserName);
        $Mailer -> setSubject(" Hóa đơn đã được tạo.");

        $Mailer -> addDynamicTemplateData('UserName', $UserName);
        $Mailer -> addDynamicTemplateData('BillID', $BillID);
        $Mailer -> setTemplateId('d-037a50d7007145dba5f8cdf166813f85');

        $Sender = new \SendGrid('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');

        try
        {
            $Result = $Sender -> send($Mailer);
            $lib-> LogFile('Log Mail Result', '\Model\User\Register.SendMail', $Result);
        }
        catch (\Exception $Error)
        { 
            $lib-> LogFile($Error -> getMessage(), '\Model\User\Register.SendMail', get_defined_vars());
            return false;
        }
  }
  function getProductFromIdBill($id){
      $sql ="SELECT idDH FROM donhang WHERE keybill =?";
      $kq = $this->result1(1,$sql,$id)['idDH'];
      if($kq){
          $sql="SELECT * FROM donhangchitiet WHERE idDH = ?";
          return $this->result1(0,$sql,$kq);
      }else{
          return NULL;
      }
  }
//   function getIdProFromSlug($slug){
//       $sql = "SELECT idDT FROM dienthoai WHERE slug=?";
//       return $this->result1(1,$sql,$slug)['idDT'];
//   }
}