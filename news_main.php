<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - User - Yêu cầu</title>
    <style>
        .current {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Tin tức trong ngày</h1>
    
    <!-- 4 - giao diện tương tác => View -->
    <select name="sort" id="sort" onchange="showContent(this.value)">
        <option value="default">Mặc định</option>
        <option value="asc">Tăng dần</option>
        <option value="desc">Giảm dần</option>
    </select>   

    <script>

        // hàm gửi kiểu sắp xếp qua ajax tới file php
        // và kết quả trả về thì đổ vào thẻ html đang có => không load lại trang
        function showContent(str) {
            if (str.length == 0) {
                document.getElementById("content").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET", "news_list.php?sort=" + str, true);
                xmlhttp.send();
            }
        }

    </script>
    
    <hr/>    
   
    <div class="ketqua" id="content">List News show here...</div>

</body>
</html>