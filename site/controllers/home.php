<?php 

require_once "../systems/config.php";
require_once "../systems/database.php";
require_once "../lib/myfunctions.php";

require_once "models/home.php";  
   class Home{
    function __construct()   {
        $this->model = new model_home();
        $this->lib = new lib();
       
      //   if(isset($_GET['q'])){
      //       $this->cat();
      //    }
        $act = "home";
        if(isset($_GET["act"])==true) $act=$_GET["act"];
        switch ($act) {    
	      case "home": $this->home(); break;
         case "detail":$this->detail();break;
        }
        
     }

     function home()
     {
         $getNewsSpecial = $this->model->getNewsSpecial();
         $getServiceSpecial  = $this->model->getServiceSpecial();
         $getCustomerFeel = $this->model->getCustomerFeel();
        $page_title ="Danh sách nhà sản xuất";
        $viewFile = "views/home.php";
        require_once "views/layout.php";  
     }   
     function detail()
     {
      $datadm = array("1"=>"Dịch Vụ Nổi Bật","2"=>"Kiến Thức Làm Đẹp","3"=>"Cảm Nhận Khách Hàng","4"=>"Tin Tức Thẩm Mỹ Viện","5"=>"Tin Tức Nổi Bật");
      $slug = $_GET['slug'];
     
      $sp = $this->model->getOnePro($slug);
      $namedm = $datadm[$sp['idNSX']];
      $page_title ="Danh sách nhà sản xuất";
      $viewFile = "views/detail.php";
      require_once "views/layout.php";  
     }

 
}
?>