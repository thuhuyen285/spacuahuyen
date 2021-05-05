<?php 
require_once "../systems/config.php";
require_once "../systems/database.php";
require_once "../lib/myfunctions.php";

require_once "models/home.php"; 
   class Home{
    function __construct()   {
        $this->model = new model_home();
        $this->lib = new lib();
       
        if(isset($_GET['q'])){
            $this->cat();
         }
        $act = "home";
        if(isset($_GET["act"])==true) $act=$_GET["act"];
        switch ($act) {    
	      case "home": $this->home(); break;
      
        }
        
     }

     function home()
     {
         $getNewsSpecial = $this->model->getNewsSpecial();

        $page_title ="Danh sách nhà sản xuất";
        $viewFile = "views/home.php";
        require_once "views/layout.php";  
     }

 
}
?>