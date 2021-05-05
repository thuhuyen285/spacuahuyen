<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/spahuyen/site/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets/css/index.css">
</head>

<body>

    <!--menu logo search  -->
    <header class="pl-5 col-12 position-fixed pr-5 ">
        <div class=" col-2 mr-4 ">
            <a class="logo" href="#">
                <img width="230px" src="views/assets/img/logo.jpg" alt="">
            </a>
        </div>
        <ul class="nav d-flex col-7 justify-content-center   ">
            <div class="topnav" id="myTopnav">
                <a href="home.html" class="">Thông tin</a>
                <a href="daotaonghe.html">Đạo tào nghề</a>
                <a href="#contact">Fanpage</a>
                <a href="tintuc.html">Tin tức</a>
                <a href="#about">Dịch vụ</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-align-justify"></i>
                </a>
            </div>
        </ul>
        <form class="form-inline search col-3 ">
            <input class="form-control mr-sm-2 col-7 ips" type="search" placeholder="Search" aria-label="Search">
            <button class="btn my-2 my-sm-0 bts" type="submit">Search</button>
        </form>
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
            <div class="col-lg-4 col-12">
                <div class="card ft1 border-0">
                    <div class="card-body ">
                        <img width="190px" src="views/assets/img/logobr.png" alt=""> <br>
                        <p class="card-text">
                            Giấy phép kinh doanh số: 0305 201 737 <br> Tư vấn (24/7): 1900 0019 <br> Di động: 090 203 58 96 <br> Email: huongruby101196@gmail.com <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card ft1 border-0 mt-4">
                    <div class="card-body">
                        <h5 class="card-title">ĐỊA CHỈ THẨM MỸ VIỆN LINH HƯƠNG
                        </h5>
                        <p class="card-text">37 Nguyễn Văn Tiết - Lái Thiêu- Thuận An - Bình Dương</p>
                        <a>  ► Giờ làm việc toàn hệ thống Linh Hương: <br>
                        
                        • Từ Thứ 2 đến Thứ 6: từ 7h30 đến 18h <br>
                    
                        • Thứ 7 và Chủ Nhật: từ 6h30 đến 18h</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="card  ft1 border-0 mt-4">
                    <div class="card-body">
                        <h5 class="card-title">THEO DÕI FANPAGE</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>