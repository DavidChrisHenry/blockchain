<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="theme-color" content="#f7882f">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" href="./img/PS_paw_logo_48f63a06-e9cf-4e19-a8f5-91c93a764bf5_32x32.png" type="image/png">
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">
 <title>Đăng nhập</title>
 <link href="./css/dangky.css" type="text/css" rel="stylesheet">
 <link href="./css/doan.css" type="text/css" rel="stylesheet">
 <link rel="stylesheet" href="./css/gototop.css">
</head>

<body>
 <?php include 'ketnoi.php'?>
 <?php include 'header.php'?>
 <?php 
 if(isset($_POST['dangnhap'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $sql = "select * from user_info where username='$u' and password='$p'";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs) > 0 ){
      header('ca_nhan.php');
    }else{
      echo "<script>alert('Không tồn tại người dùng!');</script>";
      header('dnhap.php');
    }
  }
  ?>
 <form action="ca_nhan.php" method="POST">
  <h1>ĐĂNG NHẬP</h1>

  <label><i class="fas fa-user"></i> Tên đăng nhập/Tài khoản email<span style="color:crimson">*</span></label>
  <input required type="text" placeholder="Email/tên đăng nhập" name="username">

  <label><i class="fas fa-lock"></i> Mật khẩu <span style="color:crimson">*</span></label>
  <input required type="password" placeholder="Mật khẩu" name="password">
  <div class="kiem-tra-dang-nhap">
   <a class="dktk"><em>Bạn chưa có tài khoản?
     <a href="./dky.php" style="color: darkturquoise; text-decoration: underline;">Đăng ký</em></a>
   </a>
   <button class="dangky" name="dangnhap">Đăng nhập</button>
  </div>
  <div class="container" style="background-color:#2e2e2e38">
   <span class="password">Quên<a href="#" style="color: darkturquoise;"> mật khẩu?</a></span>
  </div>
 </form>

 <?php include 'footer.php' ?>
</body>

</html>