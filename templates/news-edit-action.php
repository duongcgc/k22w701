<?php

    include ('config.php');

    // Nhận thông tin từ form
    $news_id = isset($_POST['newsid'])? $_POST['newsid'] : 'Không thấy tên biến News id';
    $tieude = isset($_POST['tieude'])? $_POST['tieude'] : 'Không thấy tên biến Tiêu đề';
    $hinhanh = isset($_POST['hinhanh'])? $_POST['hinhanh'] : 'Không thấy tên biến Hình ảnh';
    $noidung = isset($_POST['noidung'])? $_POST['noidung'] : 'Không thấy tên biến Nội dung';
    
    $upload_file = $hinhanh;


    // Thêm vào DB
    try {

        $sql = "UPDATE `tintuc` SET `tieude` = '$tieude', `hinhanh`='$upload_file', `noidung`='$noidung' WHERE `news_id` = $news_id; ";
       
        $conn_w701->exec($sql);

        echo "Tin mới đã sửa";
        
        // Quay về trang chính
        header("Location: /k22w701/news_main.php");
        exit;

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    

?>