<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/spahuyen/site/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> <?=$page_title?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets/css/index.css">
    <link rel="shortcut icon" type="image/png" style="border-radius:10px" href="../icon.png"/>
    
<style>
    .iconmenu2 i{
    color: rgb(223, 190, 130);
    font-size: 20px;
}
</style>
</head>

<body>

    <!--menu logo search  -->
    <header class="pl-5 col-12  position-fixed pr-5 ">
           
        <nav class="navbar navbar-expand-lg nav-dark   w-100 ">
            <a class="logo mr-5" href="#">
                <img width="150px" src="views/assets/img/logo.jpg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse ml-5 " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Thông Tin
                    </a>
                    <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?=ROOT_URL.'/Trang-chu-tham-my-vien-Spa-Linh-Hương'?>">Trang chủ</a>
                    <a class="dropdown-item" href="<?=ROOT_URL.'/gioi-thieu'?>">Trung Tâm Thẩm Mỹ SPA Linh Hương</a>
                    <a class="dropdown-item" href="<?=ROOT_URL.'/bang-gia'?>">Bảng Giá Dịch Vụ</a>
                    </div>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="https://www.facebook.com/HuongRuby.MasterPhunMayNhanTuongHoc">FANPAGE</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="<?=ROOT_URL.'/dao-tao-nghe'?>">Đào Tạo Nghề</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tin Tức
                    </a>
                    <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=ROOT_URL.'/danh-muc-3/page-1'?>">Cảm Nhận Khách Hàng</a>
                        <a class="dropdown-item" href="<?=ROOT_URL.'/danh-muc-2/page-1'?>">Kiến Thức Làm Đẹp</a>
                        <a class="dropdown-item" href="<?=ROOT_URL.'/danh-muc-4/page-1'?>">Tin Tức Thẩm Mỹ Viện</a>
                    </div>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="<?=ROOT_URL.'/lien-he'?>">Liên Hệ</a>
                </li>

                </ul>
                <form class="form-inline iconmenu2 my-2 my-lg-0">
                    <a class="nav-link" href="https://www.facebook.com/HuongRuby.MasterPhunMayNhanTuongHoc"> 
                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="nav-link" href="https://linhhuongspa.com">
                    <i class="fa fa-google ml-2 " aria-hidden="true"></i> </a>

                    <a><i class="fa fa-twitter ml-3 mr-5" aria-hidden="true"></i> </a>
                </form>
            </div>
            </nav>
    </header>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

        <?php if (file_exists($viewFile)) require_once "$viewFile";?>
        
        <footer class="container  p-5 col-12">
        <div class="row col-12 mx-0">
            <div class="col-lg-4 col-12 mt-3">
                <div class="card  ft1 border-0 mt-4">
                    <div class="card-body">
                        <h5 class="card-title">THEO DÕI FANPAGE</h5>
                        <div class="fb-page" data-href="https://www.facebook.com/HuongRuby.MasterPhunMayNhanTuongHoc" data-tabs="272" data-width="280" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/HuongRuby.MasterPhunMayNhanTuongHoc" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HuongRuby.MasterPhunMayNhanTuongHoc">Trung Tâm Thẩm Mỹ Spa Linh Hương Cn Bình Dương</a></blockquote></div>            
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card ft1 border-0">
                    <div class="card-body ">
                        <img width="190px" src="views/assets/img/logobr.png" alt=""> <br>
                        <p class="card-text">
                            Giấy phép kinh doanh số: 0305 201 737  <br> Di động: 090 203 58 96 <br> Email: huongruby101196@gmail.com <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mt-3">
                <div class="card ft1 border-0 mt-4">
                    <div class="card-body">
                        <h6 class="card-title">ĐỊA CHỈ CHÍNH TRUNG TÂM THẨM MỸ SPA LINH HƯƠNG
                        </h6>
                        <p class="card-text">37 Nguyễn Văn Tiết - Lái Thiêu- Thuận An - Bình Dương</p>
                        <a>  ► Giờ làm việc toàn hệ thống Linh Hương: <br>
                        
                        • Từ Thứ 2 đến chủ nhật: từ 9h đến 21h <br>
                    
                       
                    </div>
                </div>
            </div>

           
        </div>
    </footer>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="9QYjTMZE"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=2844670718991561&autoLogAppEvents=1" nonce="sp4AV95y"></script>
    
</body>

</html>