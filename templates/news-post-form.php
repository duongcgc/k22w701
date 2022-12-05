<hr>
<form action="templates/news-post-action.php" method="post">
    <label for="tieude">Tiêu đề: </label>
    <input name="tieude" id="tieude" class="news-field" type="text" placeholder="Nhập tiêu đề">
    <br>

    <label for="hinhanh">Hình ảnh: </label>
    <input name="hinhanh" id="hinhanh" type="text">
    <input type="button" name="upload" id="duyetanh" class="news-button" value="Duyệt ảnh">

    <br>
    <hr>
    <input type="submit" name="submit" value="Đăng" class="news-button">
    
</form>

<script src="ckfinder/ckfinder.js"></script>
<script>

    var button_duyet = document.getElementById( 'duyetanh' );

    // khi click nút duyệt ảnh => mở trình duyệt ảnh ckfinder trả dữ liệu vào txt hinhanh
    button_duyet.onclick = function() {
		selectFileWithCKFinder( 'hinhanh' );
	};

    // hàm xử lý popup ckfinder
    function selectFileWithCKFinder( elementId ) {
		CKFinder.popup( {
			chooseFiles: true,
			width: 800,
			height: 600,
			onInit: function( finder ) {
				finder.on( 'files:choose', function( evt ) {
					var file = evt.data.files.first();
					var output = document.getElementById( elementId );
					output.value = file.getUrl();
				} );

				finder.on( 'file:choose:resizedImage', function( evt ) {
					var output = document.getElementById( elementId );
					output.value = evt.data.resizedUrl;
				} );
			}
		} );
	}

</script>
<script src="//cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js" type="text/javascript"></script>