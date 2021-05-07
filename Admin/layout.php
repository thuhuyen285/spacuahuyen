<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- start linking  -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="views/css/bootstrap.min.css">
  <link rel="stylesheet" href="views/css/app.css">
  <!-- icon -->
  <link rel="icon" href="views/img/log.png">
  <!-- end linking -->
  <title>Thẩm mỹ Spa Linh Hương - Admin</title>
</head>
<body>
<!-- start admin -->
<section id="admin">
  <!-- start sidebar -->
  <div class="sidebar">
    <!-- start with head -->
    <div class="head">
      <div class="logo">
        <img src="views/img1/logo.png" alt="">
      </div>
      <a href="#" class="btn btn-danger">THẾ GIỚI DI ĐỘNG</a>
    </div>
    <!-- end with head -->
    <!-- start the list -->
    <div id="list">
      <ul class="nav flex-column">
      
        <!-- end charts submenue -->
        <!-- end with charts -->
        <li class="nav-item"><a href="<?=ADMIN_URL?>/index.php?ctrl=dienthoai&act=addnew" class="nav-link"><i class="fa fa-user"></i>Thêm bài viết </a></li>
        <li class="nav-item"><a href="<?=ADMIN_URL?>/index.php?ctrl=dienthoai&act=index" class="nav-link"><i class="fa fa-table"></i>Danh sách bài viết</a></li>
        <li class="nav-item"><a href="<?=ADMIN_URL?>/index.php?ctrl=dienthoai&act=dh_add" class="nav-link"><i class="fa fa-table"></i>Thêm đơn hàng</a></li>
        <li class="nav-item"><a href="<?=ADMIN_URL?>/index.php?ctrl=dienthoai&act=dh_index" class="nav-link"><i class="fa fa-users"></i>Dánh sách đơn hàng</a></li>

        <li class="nav-item"><a href="controllers/dangnhap.php?act=logout" class="nav-link"><i class="fa fa-life-ring"></i>Đăng xuất</a></li>

      </ul>
    </div>
    <!-- end the list -->
  </div>
  <!-- end sidebar -->
  <!-- start content -->
  <div class="content">
    <!-- start content head -->
    <div class="head">
      <!-- head top -->
      <div class="top">
        <div class="left">
          <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
          <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-expand-arrows-alt"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-home"></i>Back Home</button>
        </div>
        <div class="right">
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-bell"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-envelope"></i></button>
          <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">mohamed</button>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#">profile</a>
             <a class="dropdown-item" href="#">sitting</a>
             <a class="dropdown-item" href="#">log out</a>
           </div>
          </div>
        </div>
      </div>
      <!-- end head top -->
      <!-- start head bottom -->
      <!-- <div class="bottom">
        <div class="left">
          <h1>Bảng điều khiển</h1>
        </div>
        <div class="right">
          <h1>Bảng điều khiển /</h1>
          <a href="#"> Admin</a>
        </div>
      </div> -->
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <?php 

    require_once "$pase_file"; 
?>

<!-- start screpting -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/chart.js"></script>
<script src="js/app.js"></script>
<!-- end screpting -->
</body>
</html>