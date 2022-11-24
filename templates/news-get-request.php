<?php 
    // mặc định không xếp
    $sapxep = 'default';

    // 2 - đọc thông tin đầu vào, truyền thông tin qua các trang khác nhau - controller
    if (isset($_GET['sort'])) { $sapxep = $_GET['sort']; }

    // 3 - xử lý - sắp xếp - controller
    if ($sapxep == 'asc') { asort($news_item); }        
    if ($sapxep == 'desc') { arsort($news_item); }  
?>