<hr>
<form action="templates/news-post-action.php" enctype="multipart/form-data" method="post">
    <label for="tieude">Tiêu đề: </label>
    <input name="tieude" id="tieude" class="news-field" type="text" placeholder="Nhập tiêu đề">
    <br>

    <label for="hinhanh">Hình ảnh: </label>
    <input name="hinhanh" id="hinhanh" type="file">
    <br>
    <hr>
    <input type="submit" name="submit" value="Đăng" class="news-button">
    
</form>