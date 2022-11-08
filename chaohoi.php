<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lễ tân PHP</h2>
    <p>Vui lòng nhập họ và tên vào form bên dưới. Rồi nhấn nút xin chào</p>
    <form action="get_data.php" method="get">
        <label for="ho">Họ của bạn:</label>
        <input type="text" name="ho" id="ho" placeholder="Nhập họ vô đây">
        <label for="ten">Tên của bạn:</label>
        <input type="text" name="ten" id="ten" placeholder="Nhập tên vô đây">
        <input type="submit" value="xin chào">
    </form>
</body>
</html>