<?php 

// tạo lệnh đọc dữ liệu
$sql = "SELECT * FROM `tintuc`";

// thực hiện lệnh đã tạo
$news_data = $conn_w701->prepare($sql);
$news_data->execute();

// trả ra kết quả
$news_item = $news_data->fetchAll(PDO::FETCH_ASSOC);

foreach($news_item as $item) {    
    
    ?>
        <div class="news_item" style="overflow: auto;">
            <div class="news_item__thumbnail" style="float: left; margin-right:15px;">
                <a href="news_detail.php?id=<?php echo $item['news_id']; ?>"><img src="<?php echo $item['hinhanh']; ?>" alt="" style="width:100px; height:auto;border:solid 2px gray;"></a>
            </div>
            <div class="news_item__summary" style="float: ;left">
                <h2 class="news_item__heading"><a href="news_detail.php?id=<?php echo $item['news_id']; ?>"><?php echo $item['tieude']; ?></a></h2>        
                <p><span class="news_item__date"><?php echo $item['ngaydang']; ?></span></p>
                <div class="readmore">
                   <a href="news_detail.php?id=<?php echo $item['news_id']; ?>">Xem chi tiết ...</a>
                 | <a href="news_edit.php?id=<?php echo $item['news_id']; ?>">Sửa</a></div>
            </div>
        </div>
        <br>
        <hr style="clear:both; margin-top:15px" />

    <?php
}
?>