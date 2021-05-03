
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-thegioididong</title>
    <link rel="stylesheet" href="views/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row  justify-content-center">
            <!-- <img class="position-fixed w-100 h-100" src="views/img/login.jpg" alt=""> -->
            <div class="ddd position-fixed w-100 h-100 bg-dark"></div>
            <div class="col-4 position-absolute text-center p-5 mt-5">
                <form action="?ctrl=dangnhap&act=getlogin" class="col-12 mt-0 p-4 login text-center"  method="POST">
                    <img width="60%" height="80px" class="center-block pb-0 mb-0" src="views/img/logologin.png" alt=""> <br>
                    <h2 class="dn text-center p-0 m-0 pb-2">
                        ĐĂNG NHẬP
                    </h2>
                    <input class="col-12 text-left pb-2 pl-2 mt-5 mb-5 border-0" name="Username" placeholder=" Tên đăng nhập "><br>
                      <input class="col-12 text-left pl-3 pb-2 border-0 mt-2" name="Password" placeholder="Mật khẩu ">
                      <div class="row text-left ml-2">
                        <i class="fa fa-check-square-o text-white mr-3 mt-1"></i>
                        <a href="#" class="">Bạn quên mật khẩu ?</a> <br>
                    </div>  
                       <button class="btnnn login bg-warning w-100 mt-5 p-2 rounded ">Đăng nhập</button>
                        <div class="or bg-white rounded-circle p-2 text-center">or</div> <br>
                        <button class="col-5 p-2 mb-5 text-center ml-1 bg-primary rounded"><i class="fa fa-facebook"></i> Facebook</button>
                        <button class="col-5 p-2 rounded ml-5 text-center bg-danger text-white"><i class="fa fa-google"></i> Google</button>
                        <?php
                            if(isset($alert)&&($alert!="")) echo "<h2 class=\"text-white\">$alert</h2>";
                        ?>
                </form> 
            </div>
        </div>
        
    </div>
</body>
</html>