<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Sử dụng biến kiểu mảng       
    $student = array();

    $student[] = 'Johnathan';
    $student[] = 'Vương';
    $student[] = 'Hưng';
    $student[] = 'Huyền';
    $student[] = 'Trang';
    $student[] = 'Trang';
    $student[] = 'Trang';
    $student[] = 'Trang';
    $student[] = 'Trang';


    function html_tag($tag) {
        echo $tag;
    }

    function html_list($data = array(), $open_tag, $close_tag) {
        foreach ($data as $item) {
            echo $open_tag . $item . $close_tag;            
        }
    }

    html_tag('<h1>');
    echo 'Hello Heading1';
    html_tag('</h1>');

    // viết ul mở
    html_tag('<ul>');

    // viết toàn bộ mục mảng bằng thẻ li
    html_list($student, '<li>', '</li>');

    // viết ul đóng
    html_tag('</ul>');
    
    ?>

</body>

</html>