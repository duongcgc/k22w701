<script>

    // hàm gửi kiểu sắp xếp qua ajax tới file php
    // và kết quả trả về thì đổ vào thẻ html đang có => không load lại trang
    function showContent(str) {
        if (str.length == 0) {
            document.getElementById("content").innerHTML = "";
            return;
        } else {

            var xmlhttp = new XMLHttpRequest(); // tạo đối tượng gửi ajax

            // mỗi khi trạng thái thay đổi đã sẵn sàng
            xmlhttp.onreadystatechange = function() {

                // nếu nhận giá trị gửi về thành công
                if (this.readyState == 4 && this.status == 200) {
                    
                    // thay đổi nội dung trong #content bằng kết quả trả về
                    document.getElementById("content").innerHTML = this.responseText;

                } else if (this.readyState == 4 && this.status == 404) {

                    document.getElementById("content").innerHTML = 'Không thấy dữ liệu! Kiểu tra lại tên file hoặc dữ liệu!'; 

                }
            };

            // Mỗi lần đổi select mở một yêu cầu cầu GET gửi tới địa chỉ cần lấy data
            xmlhttp.open("GET", "news_list.php?sort=" + str, true);
            xmlhttp.send();
        }
    }

</script>