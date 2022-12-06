<?php 


// Lấy giá trị id hiện tại ở trên url
$current_id = isset($_GET['id']) ? $_GET['id'] : 0;

// tạo lệnh đọc dữ liệu
$sql = "SELECT * FROM `tintuc` WHERE `news_id` = $current_id" ;

// thực hiện lệnh đã tạo
$news_data = $conn_w701->prepare($sql);
$news_data->execute();

// trả ra kết quả
$news_item = $news_data->fetchAll(PDO::FETCH_ASSOC);

foreach($news_item as $item) {    
    
    ?>

    <!-- Form Edit News -->
    <?php include 'templates/news-edit-form.php'; ?>
        

<?php } ?>

