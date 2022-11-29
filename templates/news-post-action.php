<?php

    include ('config.php');

    // Nhận thông tin từ form
    $tieude = isset($_POST['tieude'])? $_POST['tieude'] : 'Không thấy tên biến Tiêu đề';

    $hinhanh = isset($_FILES["hinhanh"]["name"])? $_FILES["hinhanh"]["name"] : 'Không thấy tên biến Hình ảnh';

    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . basename($hinhanh);


    // Thêm vào DB
    try {
        $sql = "INSERT INTO tintuc (tieude, hinhanh) VALUES ('$tieude', '$upload_file')";
        $conn_w701->exec($sql);

        echo "Tin mới đã thêm";
        
        header("Location: /k22w701/news_main.php");
        exit;

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    
    // Xử lý thông tin =======
    // Upload hình ảnh lên máy chủ

    // $upload_dir = 'uploads/';
    // $upload_file = $upload_dir . basename($hinhanh);
    // $upload_type = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION));
    // $upload_check = $_FILES["hinhanh"]["tmp_name"];
    // $uploadOk = 1;

    // // 1 - Kiểm tra file thật hay file giả
    // if (isset($_POST['submit'])) {

        
    //     $check_size = getimagesize($upload_check);

    //     if($check_size !== false) {
    //         echo "File là ảnh - " . $check_size["mime"] . ".";
    //         $uploadOk = 1;
    //       } else {
    //         echo "File này không phải hình ảnh";
    //         $uploadOk = 0;
    //       }
    // }

    // // 2 - Kiểm tra file có thật hay không
    // if (file_exists($upload_file)) {
    //     echo "Xin lỗi file này đã có trên máy chủ.";
    //     $uploadOk = 0;
    // }

    // // 3 - Kiểm tra kích thước file
    // if ($_FILES["hinhanh"]["size"] > 500000) {
    //     echo "Xin lỗi file lớn quá.";
    //     $uploadOk = 0;
    // }

    // // 4 - Chỉ cho các định dạng được tải lên
    // if($upload_type != "jpg" && $upload_type != "png" && $upload_type != "jpeg" && $upload_type != "gif" ) {
    //     echo "Xin lỗi chỉ tải những file JPG, JPEG, PNG & GIF.";
    //     $uploadOk = 0;
    // }

    // // 5 - Kiểm tra nếu $uploadOk là 0 thì lỗi
    // if ($uploadOk == 0) {
    //     echo "Xin lỗi không được tải lên.";
    // // if everything is ok, try to upload file
    // } else {
    //     if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $upload_file)) {
    //         echo "File hình ảnh ". htmlspecialchars( basename( $_FILES["hinhanh"]["name"]) ) . " đã được tải lên.";
    //     } else {
    //         echo "Xin lỗi, file không được tải lên.";
    //     }
    // }

?>