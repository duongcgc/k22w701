<?php 

// tạo lệnh đọc dữ liệu
$sql = "SELECT * FROM `tintuc`";

// thực hiện lệnh đã tạo
$news_data = $conn_w701->prepare($sql);
$news_data->execute();

// trả ra kết quả
$news_item = $news_data->fetchAll(PDO::FETCH_ASSOC);

foreach($news_item as $item) {    
    
    echo '<hr />';
    ?>
        <div class="news_item">
            <div class="news_item__thumbnail">
                <a href=""><img src="<?php echo $item['hinhanh']; ?>" alt="" style="width:100px; height:auto;border:solid 2px gray;"></a>
            </div>
            <h2 class="news_item__heading"><a href=""><?php echo $item['tieude']; ?></a></h2>        
            <p><span class="news_item__date"><?php echo $item['ngaydang']; ?></span></p>
            <div class="news_content"><?php echo $item['noidung']; ?></div>
        </div>

    <?php
}
?>