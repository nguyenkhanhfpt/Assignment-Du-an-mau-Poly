<div class="alert alert-success mt-3">
    <h4>Thêm mặt hàng</h4>
</div>

<?php
    if(strlen($MESSAGE)){
        echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
    }
?>

<form action="index.php" method="post" onsubmit="return check()">
    <div class="form-group">
        <label for="">Mã loại</label>
        <input type="text" value="Auto number" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="">Tên loại</label>
        <input type="text" class="form-control" name="ten_loai" id="ten_loai">
    </div>
    <div>
        <input type="submit" value="Thêm mới" name="submitTitle" class="btn btn-default border">
        <input type="reset" value="Nhập lại" class="btn btn-default border">
        <a href="<?=$ADMIN_URL?>/title?btn-list" class="btn btn-default border">Danh sách</a>
    </div>
</form>

<script>
    function check(){
        var name = document.getElementById('ten_loai');

        if(name.value === ''){
            alert("Bạn phải nhập tên loại");
            return false;
        }
    }
</script>