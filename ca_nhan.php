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
 <title>Pets store</title>
 <link href="./css/doan.css" type="text/css" rel="stylesheet">
 <link href="./css/gototop.css" type="text/css" rel="stylesheet">
 <link href="./css/dangky.css" type="text/css" rel="stylesheet">
</head>

<body>
 <?php include 'ketnoi.php';
 global $conn;
 if(isset($_POST['dangnhap'])) {
  $u = $_POST['username'];
  $p = $_POST['password'];
 }
 $result = mysqli_query($conn,"Select * from user_info where username='$u' and password='$p'");
 ?>
 <?php include 'header.php'?>

 <!-- main -->
 <div style="padding-top: 15px">
  <h1 style="margin-left:510px; font-size:40px;color:#e26e02;" ;>Trang cá nhân</h1>
  <table>
   <tbody>
    <?php while($row=mysqli_fetch_assoc($result)):?>
    <tr>
     <td>Username:<?=$row['username']?></td>
     <td>Password:<?=$row['password']?></td>
     <td>Phone:<?=$row['phone']?></td>
     <td>Email:<?=$row['email']?></td>
    </tr>
    <?php endwhile;?>
   </tbody>
  </table>
  <div style="text-align:center">
   <a href="dxuat.php">
    <button class="dangky" type="input" name="dangxuat">Đăng xuất</button>
   </a>
  </div>
 </div>
 <?php include 'footer.php'?>
</body>

</html>