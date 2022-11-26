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
 <title>Vòng cổ và dây dẫn</title>
 <link href="./css/doan.css" type="text/css" rel="stylesheet">
 <link rel="stylesheet" href="./css/gototop.css">
</head>

<body>
 <?php include 'header.php'  ?>
 <!-----------------------------------cartegory--------------------------------------->
 <section class="cartegory">
  <div class="container">
   <div class="cartegory-top row">
    <p><a href="./doan.html">Trang chủ</a></p>
    <p>/</p><a href="./danhmucsp.html">Phụ kiện</a>
    <p>/</p><a href="./vongco&daydan.html">Vòng cổ và dây dẫn </a>
   </div>
  </div>
  <div class="container">
   <div class="row">
    <div class="cartegory-left">
     <ul>
      <li class="cartegory-left-li"><a href="#">Phụ kiện</a>
       <ul>
        <li class="cartegory-left-li"><a href="./balo&tuisach.html">Balo & Túi sách</a></li>
        <li class="cartegory-left-li"><a href="./Chuong&nem.html">Chuồng & nệm</a></li>
        <li class="cartegory-left-li"><a href="./dungcuvesinh.html">Dụng cụ vệ sinh</a></li>
        <li class="cartegory-left-li"><a href="./dochoi.html">Đồ chơi & phụ kiện huấn luyện</a></li>
        <li class="cartegory-left-li"><a href="./thucan.html">Thức ăn</a></li>
        <li class="cartegory-left-li"><a href="./vatdunganuong.html">Vật dụng ăn uống</a></li>
        <li class="cartegory-left-li"><a href="./vongco&daydan.html">Vòng cổ & dây dẫn</a></li>
       </ul>
      </li>
      <li class="cartegory-left-li"><a href="#">Dịch vụ</a>
       <ul>
        <li class="cartegory-left-li"><a href="./trong_du.html">Trông giữ</a></li>
        <li class="cartegory-left-li"><a href="./petspa.html">Làm đẹp</a></li>
       </ul>
      </li>
     </ul>
    </div>
    <div class="cartegory-right row">
     <div class="cartegory-right-top-item">
      <p>Vòng cổ và dây dẫn</p>
     </div>
     <div class="cartegory-right-content row">


      <div class="cartegory-right-content-item">
       <a href="./day-dat-hoatiet.html">
        <img src="./img/phukien/dai-dan-3.jpg" title="Phu kien" alt="day dan">
        <h2>Dây Dắt Chó Đi Kèm Đai Ngực Họa Tiết (size nhỏ)</h2>
        <p>120.000<sup>đ</sup></p>
      </div>

      <div class="cartegory-right-content-item">
       <a href="">
        <img src="./img/phukien/dai-dan-4.jpg" title="Phu kien" alt="day dan">
        <h2>Dây dắt chó cưng kèm đai ngực Demin</h2>
        <p>90.000<sup>đ</sup></p>
      </div>
      <div class="cartegory-right-content-item">
       <a href="">
        <img src="./img/phukien/vong-tho-cam-6.jpg" title="Phu kien" alt="day dan">
        <h2>Vòng Cổ Thổ Cẩm Cho Chó & Mèo</h2>
        <p>80.000<sup>đ</sup></p>
      </div>
      <div class="cartegory-right-content-item">
       <a href="">
        <img src="./img/phukien/vong-chong-liem-thu-cung.jpg" title="Phu kien" alt="vòng chống liếm">
        <h2>Vòng chống liếm cho chó mèo</h2>
        <p>30.000<sup>đ</sup></p>
      </div>
     </div>
    </div>

   </div>
  </div>
 </section>
 <?php include 'footer.php'?>
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