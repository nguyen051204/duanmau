<?php
    session_start();
    if(isset($_SESSION['mycart'])){
            foreach($_SESSION['mycart'] as $cart){
            echo 'Mã sản phẩm:'.$cart[0] ;
            echo 'Tên sản phẩm:'.$cart[1];
            echo 'Giá:'.$cart[2];
            echo 'Số lượng:'.$cart[3];
            }
    }else{
        echo ''<h1>Session đã hủy </h1>';'
    }
    echo '<h1>Session đã show </h1>';
    echo '<a href="1.php">Khởi tạo</a>'  ;
    echo '<a href="3.php">Hủy session</a>' ; 
?>