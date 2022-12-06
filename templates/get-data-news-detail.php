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
        <p><a href="news_main.php">Trang chủ</a></p>
        <div class="news_item" style="overflow: auto;">
            <div class="news_item__thumbnail" style="float: left; margin-right:15px;">
                <a href=""><img src="<?php echo $item['hinhanh']; ?>" alt="" style="width:100px; height:auto;border:solid 2px gray;"></a>
            </div>
            <div class="news_item__summary" style="float: ;left">
                <h2 class="news_item__heading"><a href=""><?php echo $item['tieude']; ?></a></h2>        
                <p><span class="news_item__date"><?php echo $item['ngaydang']; ?></span></p>
                <div class="news_item__content"><?php echo $item['noidung']; ?></div>
            </div>
        </div>
        <br>
        <hr style="clear: both; margin-top:15px;" />

    <?php
}
?>