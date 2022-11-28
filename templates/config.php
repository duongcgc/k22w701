<?php 


// DB Infor

$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_databasename = 'webk22w7';

// Connect Database

try {

    $conn_w701 = new PDO("mysql:host=$db_server;dbname=$db_databasename", $db_username, $db_password);
    // set the PDO error mode to exception
    $conn_w701->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Đã kết nối thành công";

} catch(PDOException $e) {

    echo "Kết nối thất bại: " . $e->getMessage();
    die();
    
}


?>