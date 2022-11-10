<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <link rel="stylesheet" href="album.css">
</head>
<body>
    
    <h2>Album hình ảnh PHP</h2>

    <?php 
        $tenfile = 'hinhanh/anh (1).png';

        if (isset($_GET['file'])) {
            $tenfile = $_GET['file'];
        }
    ?>

    <div class="album">
        <div class="album__big-photo">
            <img src="<?php echo $tenfile; ?>" alt="">
        </div>
        <div class="album__list-thumbnail">
            <a href="album.php?file=hinhanh/anh (1).png" class="album__thumbnail"><img src="hinhanh/anh (1).png" alt=""></a>
            <a href="album.php?file=hinhanh/anh (2).png" class="album__thumbnail"><img src="hinhanh/anh (2).png" alt=""></a>
            <a href="album.php?file=hinhanh/anh (3).png" class="album__thumbnail"><img src="hinhanh/anh (3).png" alt=""></a>
            <a href="album.php?file=hinhanh/anh (4).png" class="album__thumbnail"><img src="hinhanh/anh (4).png" alt=""></a>
            <a href="album.php?file=hinhanh/anh (5).png" class="album__thumbnail"><img src="hinhanh/anh (5).png" alt=""></a>
        </div>
    </div>

</body>
</html>

<!-- 
    * Tính năng & Luồng logic
    - Khi click vào ảnh nhỏ => Ảnh kích thước lớn sẽ hiện lên big-photo

    * Yêu cầu hoạt động
    - Nhận click chuột vào ảnh nhỏ (thumbnail)
    - Truyền được tên ảnh nhỏ tới chỗ ảnh (big) => thông qua link thẻ a
    - Đọc biến tên file trên url điền vào link ảnh lớn

 -->