<?php

    include ('config.php');

    // Nhận thông tin từ form
    $tieude = isset($_POST['tieude'])? $_POST['tieude'] : 'Không thấy tên biến Tiêu đề';
    $hinhanh = isset($_POST['hinhanh'])? $_POST['hinhanh'] : 'Không thấy tên biến Hình ảnh';
    
    $upload_file = $hinhanh;


    // Thêm vào DB
    try {
        $sql = "INSERT INTO tintuc (tieude, hinhanh) VALUES ('$tieude', '$upload_file')";
        $conn_w701->exec($sql);

        echo "Tin mới đã thêm";
        
        // Quay về trang chính
        header("Location: /k22w701/news_main.php");
        exit;

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    

?>