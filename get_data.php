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
        $ho = 'Tên biến là ho';
        $ten = 'Tên biến là ten';

        if (isset($_GET['ho'])) {
            $ho = $_GET['ho'];
        };

        if (isset($_GET['ten'])) {
            $ten = $_GET['ten'];
        };
    ?>
    
    <h2>Xin chào bạn "<?php echo $ten . ' ' . $ho; ?>"?</h2>
    <a href="chaohoi.php">Chào lại</a>
</body>
</html>