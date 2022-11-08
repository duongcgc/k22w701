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

    // var_dump($student);


    echo '<ul>';
    foreach ( $student as $item ) {
        echo '<li>' . $item . '</li>';
    }
    echo '</ul>';

    echo '<ul>';
    foreach ( $student as $item ) {
        echo '<li>' . $item . '</li>';
    }
    echo '</ul>';


    // echo '<ul>';
    // for ($i = 0; $i < count($student); $i++) {
    //     echo '<li>' . $student[$i] . '</li>';
    // }
    // echo '</ul>';


    // $ho = 'Johnathan';
    // $tuoi = 40;
    // $ready = true;
    // $student = array();
    // var_dump($ready);

    // Sử dụng single var        
    // $ho = 'Johnathan';
    // $ten = 'Nguyen';

    // echo '<h2>Welcome to PHP </h2>';
    // echo '<h3>My name is ' . $name . '</h3>';
    // echo '<h3>My pername is ' . $ho . '</h3>';
    // echo '<h5>Fullname is ' . $ho . ' ' . $ten . '</h5>';

    ?>
</body>

</html>