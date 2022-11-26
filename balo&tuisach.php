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
 <title>Balo & Túi xách</title>
 <link href="./css/doan.css" type="text/css" rel="stylesheet">
 <link rel="stylesheet" href="./css/gototop.css">
</head>

<body>
 <?php include 'header.php' ?>
 <!-----------------------------------cartegory--------------------------------------->
 <section class="cartegory">
  <div class="container">
   <div class="cartegory-top row">
    <p><a href="./doan.php">Trang chủ</a></p>
    <p>/</p><a href="./danhmucsp.php">Phụ kiện</a>
    <p>/</p><a href="./balo&tuisach.php">Balo & Túi sách</a>
   </div>
  </div>
  <div class="container">
   <div class="row">
    <div class="cartegory-left">
     <ul>
      <li class="cartegory-left-li"><a href="#">Phụ kiện</a>
       <ul>
        <li class="cartegory-left-li"><a href="./balo&tuisach.php">Balo & Túi xách</a></li>
        <li class="cartegory-left-li"><a href="./Chuong&nem.php">Chuồng & nệm</a></li>
        <li class="cartegory-left-li"><a href="./dungcuvesinh.php">Dụng cụ vệ sinh</a></li>
        <li class="cartegory-left-li"><a href="./dochoi.php">Đồ chơi & phụ kiện huấn luyện</a></li>
        <li class="cartegory-left-li"><a href="./thucan.php">Thức ăn</a></li>
        <li class="cartegory-left-li"><a href="./vatdunganuong.php">Vật dụng ăn uống</a></li>
        <li class="cartegory-left-li"><a href="./vongco&daydan.php">Vòng cổ & dây dẫn</a></li>
       </ul>
      </li>
      <li class="cartegory-left-li"><a href="#">Dịch vụ</a>
       <ul>
        <li class="cartegory-left-li"><a href="./trong_du.php">Trông giữ</a></li>
        <li class="cartegory-left-li"><a href="./petspa.php">Làm đẹp</a></li>
       </ul>
      </li>
     </ul>
    </div>
    <div class="cartegory-right row">
     <div class="cartegory-right-top-item">
      <p>Balo & Túi xách</p>
     </div>
     <div class="cartegory-right-content row">
      <div class="cartegory-right-content-item">
       <a href="./tuixachdauchan.php">
        <img src="./img/phukien/tui.jpg" title="Phu kien" alt="túi">
        <h2>Túi Xách Chó Mèo Hình Dấu Chân</h2>
        <p>300.000<sup>đ</sup></p>
      </div>
      <div class="cartegory-right-content-item">
       <a href="./balo_phihanhgia.php">
        <img src="./img/phukien/tui1.jfif" title="Phu kien" alt="túi">
        <h2>Balo phi hành gia</h2>
        <p>350.000<sup>đ</sup></p>
      </div>

      <div class="cartegory-right-content-item">
       <a href="./balo_vaimem.php">
        <img src="./img/phukien/tui3.jpg" title="Phu kien" alt="túi">
        <h2>Balo vải mềm mịn cho thú cưng</h2>
        <p>270.000<sup>đ</sup></p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <?php include 'footer.php' ?>
 <script>
 const cartegorySlide = document.querySelectorAll(".cartegory-left-li");
 cartegorySlide.forEach(function(menu, index) {
  menu.addEventListener("click", function() {
   menu.classList.toggle("block")
  })
 })
 </script>
</body>

</html>