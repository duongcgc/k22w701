<?php 
    // Data sample news
    include 'templates/news-data.php';

    // Get request sort method
    include 'templates/news-get-request.php';

    // 6 - Trả ra kết quả View
    foreach ($news_item as $item):
        include 'templates/news-item.php';
    endforeach;
?>    