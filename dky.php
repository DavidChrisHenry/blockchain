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
 <title>Đăng ký</title>
 <link href="./css/dangky.css" type="text/css" rel="stylesheet">
 <link href="./css/doan.css" type="text/css" rel="stylesheet">
 <link rel="stylesheet" href="./css/gototop.css">
</head>

<body>
 <?php 
    require_once 'ketnoi.php'
  ?>
 <?php 
    if(isset($_POST['dangky'])){  
        $username = $_POST['username1'];
        $phone = $_POST['phone1'];
        $password = $_POST['password1'];
        $email = $_POST['email1'];
        $sql = "select * from user_info where username='$username' or phone='$phone'";
        $rs = mysqli_query($conn,$sql);
        if(mysqli_num_rows($rs) > 0 ){
          echo "<script>alert('Tên người dùng hoặc số đã tồn tại!');</script>";
          header('dky.php');
        }elseif($conn -> query("INSERT INTO user_info (username, phone, password, email) VALUES (N'$username', N'$phone', N'$password', N'$email')")){
          header('location:dnhap.php');
        }else{
          echo "<script>alert('Đăng ký không thành công!')</script>";
        }
    }
   
  ?>
 <?php include 'header.php' ?>
 <!--về đầu trang-->
 <div>
  <h1 class="custom-dky">ĐĂNG KÝ</h1>
  <h2 class="cus-head2">THÔNG TIN CÁ NHÂN</h2>
 </div>
 <form action="" method="POST">
  <label><i class="fas fa-user"></i> Tên đăng nhập/Tài khoản email<span style="color:crimson">*</span></label>
  <input required type="text" placeholder="Email/tên đăng nhập" name="username1">

  <label><i class="far fa-phone-plus"></i> Số điện thoại <span style="color:crimson">*</span></label>
  <input required type="text" placeholder="Nhập số điện thoại" name="phone1" sdt>

  <label><i class="fas fa-lock"></i> Mật khẩu <span style="color:crimson">*</span></label>
  <input required type="password" placeholder="Mật khẩu" name="password1">

  <label><i class="fas fa-lock"></i> Email <span style="color:crimson">*</span></label>
  <input required type="text" placeholder="Email" name="email1">
  <div class="kiem-tra-dang-nhap">
   <a class="dntk"><em>Bạn đã có tài khoản? <a href="./dnhap.php" style="color: aqua; text-decoration: underline;">Đăng
      nhập</em></a></a>
   <button type="submit" name="dangky" class="dangky">Đăng ký</button>
  </div>
 </form>
 <?php include 'footer.php' ?>
</body>

</html>