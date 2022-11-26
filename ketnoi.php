<?php
    $host = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $dbname = 'user'; //Đây là tên của Database
    $username = 'root'; //Tên sử dụng Database
    $password = '';//Mật khẩu của tên sử dụng Database
    
    $conn = mysqli_connect($host,$username,$password, $dbname);
?>