<?php 
 if(isset($_POST['dangnhap'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $sql = "select * from user_info where username='$u' and password='$p'";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs) > 0 ){
      echo "<script>alert('Đăng nhập thành công!');</script>";
      header('location:ca_nhan.php');
    }else{
      echo "<script>alert('Không tồn tại người dùng!');</script>";
      header('location:dnhap.php');
    }
  }
  ?>