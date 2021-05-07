<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
  body{
        background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(../views/img/login.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center;
    }
    .login{
        right: 17%;
        top: 10%;
    }
    label{
        font-weight:bold;
        color:rgb(243, 221, 179);
    }
    .button{
        background: rgb(243, 221, 179);
    }
    </style>
  
</head>
<body>
    <div class="col-12 row p-0 m-0 mx-0 position-fixed">
        <form class="col-3 position-fixed login" method="POST">
            <div class="form-group">
              <label class="" for="exampleInputEmail1">Tên đăng nhập</label>
              <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hãy nhập tên">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label class="" for="exampleInputPassword1">Mật khẩu</label>
              <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Hãy nhập mật khẩu">
            </div>
            <?php 
            if(isset($_SESSION["error_taikhoan"])){ ?>
                <div class="form-group">
                <div class="alert alert-danger" role="alert">
                    <strong><?=$_SESSION["error_taikhoan"]?></strong> <a href="#" class="alert-link"></a>
                </div>
               </div>
               <?php  }    ?>
        
           
            <input type="submit" name="login" class="btn button mt-4" value="Login">
          </form>
    </div>
</body>
</html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">