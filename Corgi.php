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
  <link href="./css/css.css" type="text/css" rel="stylesheet">
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

        <li><a href="./webdog.html">
        <li>Thú cưng /</a></li>

        <li><a href="./webdog.html">
        <li>Trang trại chó cảnh /</a></li>
        <li><a href="./Corgi.html">
        <li>Corgi</a></li>
        <li class="BD1"></li>
      </ul>
    </div>
    <div class="dong1">
      <p>Corgi</p>
    </div>
    <div class="cat1">
      <div class="image-cat1">
        <img width="500" height="400" src="./img/dog1.jpg" alt="Corgi Puppy">
      </div>
      <div class="sale">
        <ul>
          <li class="unline-decoration-text">15.000.000đ</li>
          <li class="normal">13.500.000đ</li>
        </ul>
      </div>
      <div class="word1">
        <p>Giống Chó: Corgi </p><br>
        <p>Màu sắc: Cam-trắng</p><br>
        <p>Độ tuổi: 2 tháng</p><br>
        <p>Nguồn gốc: Anh</p><br>
        <p>Tình trạng: ổn định</p><br>
        <p>Sổ sức khỏe: có</p><br>
        <p>Tiêm vacxin: Đã tiêm 2 mũi</p>
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
          <div class="modal-header" style="display: flex;">
            <span class="modal-title">Bạn đã thêm vào giỏ hàng thành công!</span>
            <span class="close">&times;</span>
          </div>

          <div class="modal-body">
            <div class="cart-row" style="display: flex;">
              <div style="width: 30%;" class="text-left">Thú Cưng</div>
              <div style="width: 20%;" class="text-center">Giá</div>
              <div style="width: 20%;" class="text-center">Số Lượng</div>
            </div>
            <div class="cart-items">
              <div class="cart-row" style="display: flex; flex-wrap: nowrap;">
                <div class="cart-item cart-column" style="width: 30%;">
                  <img class="cart-item-image" src="./img/dog1.jpg" width="100" height="100">
                  <span class="cart-item-title">Corgi</span>
                </div>
                <span class="cart-price cart-column" style="width: 20%; text-align: center; margin: 20px auto;">13500000đ</span>
                <div class="cart-quantity cart-column" style="width: 20%;">
                  <input class="cart-quantity-input" type="number" value="1">
                  <button class="btn btn-danger" type="button">Xóa</button>
                </div>
              </div>
            </div>
            <div class="cart-total" style="margin-top: 5px;">
              <strong class="cart-total-title">Tổng tiền thanh toán:</strong>
              <span class="cart-total-price">13500000VNĐ</span>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
            <button type="button" class="btn btn-primary order"><a href="./giohang.html" style="color: black;">Thanh Toán</a></button>
          </div>
        </div>
      </div>
      <!-- Java -->
      <script src="./js/main.js"></script>

      <div class="Mota">
        <p>Mô tả</p>
      </div>
      <div class="word3">
        <p>Giống chó Corgi (hay còn được biết đến với tên gọi khác là Corgi Welsh), là giống chó cảnh dễ thương nhất Thế
          Giới. Chúng có nguồn gốc từ xứ Wales, Vương quốc Anh. Corgi luôn dẫn đầu danh sách những giống chó được nuôi
          phổ biến nhất trên Thế Giới cũng như tại Việt Nam.</p>
      </div>
      <div class="Cat2">
        <div class="image-cat2">
          <img width="950" height="500" src="./img/dog2.jpg" alt="Corgi">
        </div>
      </div>
      <div class="word4">
        <p></p>
        <ul>
          <li>Corgi thuần chủng có đặc điểm chung đó là thân dài và 4 chân ngắn. Khác với các giống chó cảnh hiện nay,
            chân Corgi càng ngắn, thân hình càng dài thì càng đẹp. Theo đó, những bé Corgi có ngực sát đất giá sẽ rất
            cao. Và dù thân hình có phần lạ, mất cân đối thì chúng vẫn luôn được săn đón nhiệt tình.</li>
          <p></p><br>
          <p>Corgi có những đặc điểm sau:</p>
          <li>Corgi chân ngắn có đôi tai hình tam giác, dựng thẳng. </li>
          <li>Tai và mặt của các bé có tỷ lệ khá cân đối.</li>
          <li>Mõm của Corgi dài và nhọn, mắt chúng to tròn, miệng và khuôn hàm nhỏ nhưng cực kì sắc nhọn. </li>
          <li>Khuôn mặt của Corgi trông giống loài cáo nên chúng còn được gọi là Foxy Dog.</li>
          <li>Bộ lông dày 2 lớp của các bé Corgi có kết cấu khá giống với loài chó tuyết Samoyed, Alaska và Husky. Lớp
            lông trong ngắn, mỏng, mềm mượt có tác dụng giữ nhiệt, giúp Corgi chống chịu với khí hậu lạnh giá xứ Wales.
            Lớp lông ngoài thì dày và dài hơn, đặc biệt không thấm nước giúp Corgi thuận tiện trong việc di chuyển dưới
            thời tiết sương giá.</li>
        </ul>
      </div>
      <footer>
        <div class="footerphoto">
          <img src="./img/footerphoto.png">
        </div>
        <section id="sectionfooter">
          <div class="footertitle">
            <div>
              <h4>VỀ CHÚNG TÔI</h4>
              <ul>
                <li><a href="./thongtin.html">GIỚI THIỆU</a></li>
                <li><a href="./danhmucsp.html">CỬA HÀNG PHỤ KIỆN</a></li>
              </ul>
            </div>
            <div>
              <h4>HỖ TRỢ KHÁCH HÀNG</h4>
              <ul>
                <li><a href="./huong_dan_mua_hang.html">HƯỚNG DẪN MUA HÀNG</a></li>
                <li><a href="./chinh_sach_bao_hanh.html">CHÍNH SÁCH BẢO HÀNH</a></li>
                <li><a href="./tra_gop.html">MUA TRẢ GÓP 0%</a></li>
              </ul>
            </div>
            <div>
              <h4>THÔNG TIN LIÊN HỆ</h4>
              <ul>
                <li><a href=""><i class="fas fa-map-marker-alt"></i> KP6, LINH TRUNG, THỦ ĐỨC, TP HCM</a></li>
                <li><a href=""><i class="far fa-phone-alt"></i> Tư vấn mua: <span style="color: #e26e02;"><a
                        style="color: #e26e02;" href="tel:0123456789">0123 456 789</a></span></a></li>
              </ul>
            </div>
            <div>
              <h4><b></b><span style="font-size:90%;color:rgb(255, 130, 14);">ĐƯỜNG ĐẾN PET STORE</span><b></b></h4>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.343433065643!2d106.80230080187484!3d10.870012150562223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1634649457242!5m2!1svi!2s"
                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </section>
    </div>
  </main>
  </footer>