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
  <title>Thông tin mô tả</title>
  <link href="./css/phukien.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="./css/gototop.css">
</head>

<body>
  <header>
      <!------------------- Header logo -------------------------------------->
      <div class="logo">
        <a href="./doan.html" title="Pet Store" rel="home">
          <img src="./img/Redesign-LogoPetStore-02-1.png" alt="Pet Store" />
      </div>
  
       <!------------------- MENU NAV-------------------------------------->
    <div class="menu">
      <li><a href="./doan.html">HOME</a></li>
      <li><a href="">THÚ CƯNG <i class="fa fa-caret-down"></i></a>
        <ul class="petmenu">
          <li><a href="./webdog.html">Chó Cảnh</a>
         
          </li>
          <li><a href="./webcat.html">Mèo Cảnh </a>
          </li>
          <li><a href="./thucungkhac.html">Thú cưng khác</a>
            
          </li>
        </ul>
      </li>
      <li><a href="./danhmucsp.html">PHỤ KIỆN <i class="fa fa-caret-down"></i></a>
        <ul class="phukien-menu">
          <li><a href="./balo&tuisach.html">Balo & túi sách</a></li>
          <li><a href="./Chuong&nem.html">Chuồng & nệm</a></li>
          <li><a href="./dungcuvesinh.html">Dụng cụ vệ sinh</a></li>
          <li><a href="./dochoi.html">Đồ chơi & phụ kiện huấn luyện</a></li>
          <li><a href="./thucan.html">Thức ăn</a></li>
          <li><a href="./vatdunganuong.html">Vật dụng ăn uống</a></li>
          <li><a href="./vongco&daydan.html">Vòng cổ & dây dẫn</a></li>
        </ul>
      </li>
      <li><a href="./trong_du.html">DỊCH VỤ <i class="fa fa-caret-down"></i></a>
        <ul class="dichvumenu">
          <li><a href="./trong_du.html">Trông giữ</a></li>
          <li><a href="./petspa.html">Dịch vụ làm đẹp</a></li>
        </ul>
      </li>
      <li><a href="./thongtin.html">THÔNG TIN</a></li>
    </div>
      <div class="orthers">
        <li><input placeholder="Bạn muốn tìm gì..." type="search"></li>
        <li><button id="userButton"><a href="./dnhap.html"><i class="fas fa-user" style="color: black;"></i></a></button></li>
        <li><a class="shopping" href="./giohang.html"><i class="far fa-cart-plus"style="color: black;"></i></a></li>
      </div>
    </header>
  <!---------------------------------------ICON-BAR-------------------------------------------------->
  <div class="icon-bar">
    <a href="https://www.facebook.com/" class="facebook" title="Follow on Facebook"><i class="fab fa-facebook"></i></a>
    <a href="https://www.youtube.com/channel/UCZsffo0QcIMCHKI6MMS-dQw/featured" class="youtube"
      title="Follow on Facebook"><i class="fab fa-youtube"></i></i></a>
    <a href="tel:0123456789" class="iconphone" title="Call us"><i class="fas fa-phone"></i></a>
    <a href="https://www.instagram.com/" class="ig" title="Follow on Instagram"><i class="fab fa-instagram"></i></a>
  </div>
  <!--về đầu trang-->
  <div class="gototop" id="gototop">
    <a href="javascript:;" onclick="goToTop()"><img class="mui_ten" src="./img/mui-ten.png"></a>
</div>
<script>
  window.onscroll = function() {
    var gototop = document.getElementById("gototop");
    if (document.documentElement.scrollTop > 100 || document.body.scrollTop > 100) {
        gototop.style.display = "block";
    } else {
        gototop.style.display = "none";
    }
}
function goToTop() {
    var timer = setInterval(function() {
        document.documentElement.scrollTop -= 15;

        if (document.documentElement.scrollTop <= 0)
            clearInterval(timer)
    }, 1)
}
</script>
  <main>
    <div class="trangchu">
      <ul>
        <li><a href="./doan.html">
        <li>Trang chủ /</a></li>

        <li><a href="./danhmucsp.html">
        <li>Phụ kiện /</a></li>

        <li><a href="./vongco&daydan.html">
        <li>Vòng cổ & Dây dẫn/</a></li>

        <li><a href="./balo_vaimem.html">
        <li>Dây Dắt Chó Đi Kèm Đai Ngực Họa Tiết (size nhỏ)</a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p>Dây Dắt Chó Đi Kèm Đai Ngực Họa Tiết (size nhỏ)</p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img style="margin-left:70px" width="450" height="350" src="./img/phukien/dai-dan-3.jpg" alt="Dây Dắt Chó Đi Kèm Đai Ngực Họa Tiết (size nhỏ)">
      </div>
      <div class="sale">
        <ul>
          <li class="normal">120.000đ</li>
        </ul>
      </div>
      <div class="word1">
        <p>Dây dắt cho chó được làm từ sợi Polypropylene</p><br>
        <p>Tặng kèm  đai ngực Họa Tiết</p><br>
        <p>Với thiết kế đơn giản mang phong cách cổ điển</p><br>
        <p>Sử dụng dây xích ngực cho phép kiểm soát tự nhiên và thoải mái hơn cho chú chó của bạn</p><br>
        <p>Thiết kế có thêm kẹp sắt để dễ dàng điều chỉnh kích thước tùy ý</p><br>
        <p>Bộ xích dây cương đai ngực chó kèm dây dắt có rất nhiều màu để bạn lựa chọn</p><br>
        <p>Kích thước dây ngực có thể điều chỉnh từ 28cm đến 60cm, chiều dài dây là 114cm</p><br>
        
      </div>
      <!-- The Modal -->
      <div class="giohang">
        <button id="cart">
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          Thêm Vào Giỏ Hàng
        </button>
      </div>
      <div id="myModal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="modal-title">Bạn đã thêm vào giỏ hàng thành công!</span>
            <span class="close">&times;</span>
          </div>

          <div class="modal-body">
            <div class="cart-row" style="display: flex;">
              <div style="width: 30%;" class="text-left">Phụ kiện</div>
              <div style="width: 20%;" class="text-center">Giá</div>
              <div style="width: 20%;" class="text-center">Số Lượng</div>
            </div>
            <div class="cart-items">
              <div class="cart-row" style="display: flex; flex-wrap: nowrap;">
                <div class="cart-item cart-column" style="width: 30%;">
                  <img class="cart-item-image" src="./img/phukien/dai-dan-3.jpg" width="100" height="100">
                  <span class="cart-item-title">Dây Dắt Chó Đi Kèm Đai Ngực Họa Tiết (size nhỏ)</span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;">120000đ</span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price">120000VNĐ</span>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
            <button type="button" class="btn btn-primary order"><a href="./giohang.html" style="color: black;">Thanh Toán</a></button>
          </div>
        </div>
      </div>
   <p style="padding-left: 100px;">&nbsp;</p>
      <!-- Java -->
      <script src="./js/main.js"></script>
 </div>
      

  </main>