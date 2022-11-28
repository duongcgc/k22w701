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

    echo $item['hinhanh'] . " | ";
    echo $item['tieude'] . " | ";
    echo $item['ngaydang'] . " | ";

    
}


?>