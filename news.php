<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <style>
        .current {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Tin tức trong ngày</h1>

    <?php 
        // 1 - lưu trữ data - Model
        $news_item = array(
            array(
                'hinh'      =>  'hinhanh/anh (1).png',
                'tieude'    =>  'The 1 news',
                'ngaydang'  =>  '05/11/2022'
            ), 
            array(
                'hinh'      =>  'hinhanh/anh (4).png',
                'tieude'    =>  'The 4 news',
                'ngaydang'  =>  '30/11/2022'
            ),            
            array(
                'hinh'      =>  'hinhanh/anh (2).png',
                'tieude'    =>  'The 2 news',
                'ngaydang'  =>  '07/11/2022'
            ),       
            array(
                'hinh'      =>  'hinhanh/anh (5).png',
                'tieude'    =>  'The 5 news',
                'ngaydang'  =>  '15/11/2022'
            ),      
            array(
                'hinh'      =>  'hinhanh/anh (3).png',
                'tieude'    =>  'The 3 news',
                'ngaydang'  =>  '25/11/2022'
            ),  
            array(
                'hinh'      =>  'hinhanh/anh (5).png',
                'tieude'    =>  'The 5 news',
                'ngaydang'  =>  '15/11/2022'
            ),      
            array(
                'hinh'      =>  'hinhanh/anh (3).png',
                'tieude'    =>  'The 3 news',
                'ngaydang'  =>  '25/11/2022'
            ),             
            
        );

        // mặc định không xếp
        $sapxep = 'default';

        // 2 - đọc thông tin đầu vào, truyền thông tin qua các trang khác nhau - controller
        if (isset($_GET['sort'])) { $sapxep = $_GET['sort']; }

        // 3 - xử lý - sắp xếp - controller
        if ($sapxep == 'asc') { asort($news_item); }        
        if ($sapxep == 'desc') { arsort($news_item); }  
        
    ?>

    <!-- 4 - giao diện tương tác => View -->
    <select name="sort" id="sort">
        <option value="default" <?php echo $sapxep=='default' ? 'selected':''; ?> >Mặc định</option>
        <option value="asc" <?php echo $sapxep=='asc' ? 'selected':''; ?> >Tăng dần</option>
        <option value="desc" <?php echo $sapxep=='desc' ? 'selected':''; ?> >Giảm dần</option>
    </select>   

    <script>

        // 5 - gửi giá trị lên url Controller - Mỗi khi thay đổi select có id=sort thì tự động chuyển url = javascript thành url mới giá trị vừa mới chọn  thay đổi xong
        select_option = document.getElementById('sort');
        select_option.onchange = function(){
            location.href = 'http://localhost/k22w701/news.php?sort=' + select_option.value;
        }

    </script>
    
    <hr/>    

    <a href="http://localhost/k22w701/news.php?sort=default" <?php echo $sapxep=='default' ? 'class="current"':''; ?> >Mặc định</a> | 
    <a href="http://localhost/k22w701/news.php?sort=asc" <?php echo $sapxep=='asc' ? 'class="current"':''; ?> >Tăng dần</a> | 
    <a href="http://localhost/k22w701/news.php?sort=desc" <?php echo $sapxep=='desc' ? 'class="current"':''; ?>>Giảm dần</a>

    <hr/>    

    <?php 
        // 6 - Trả ra kết quả View
        foreach ($news_item as $item):
    ?>    
        <div class="news_item">
            <div class="news_item__thumbnail">
                <a href=""><img src="<?php echo $item['hinh']; ?>" alt=""></a>
            </div>
            <h2 class="news_item__heading"><a href=""><?php echo $item['tieude']; ?></a></h2>        
            <p><span class="news_item__date"><?php echo $item['ngaydang']; ?></span></p>
        </div>

    <?php 
        endforeach;
    ?>        

</body>
</html>