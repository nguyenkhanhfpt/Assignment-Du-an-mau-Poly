<div class="alert alert-success mt-3">
    <h4>Thêm mặt hàng</h4>
</div>

<?php
if (strlen($MESSAGE)) {
    echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
}
$item = $items->fetch();

?>

<form action="index.php" method="post">
    <div class="form-group">
        <label for="">Mã loại</label>
        <input type="text" value="<?= $item['ma_loai'] ?>" name="ma_loai" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="">Tên loại</label>
        <input type="text" class="form-control" name="ten_loai" value="<?= $item['ten_loai'] ?>">
    </div>
    <div>
        <button name="updateTitle" class="btn btn-default border">Cập nhật</button>
        <input type="reset" value="Nhập lại" class="btn btn-default border">
        <a href="<?= $ADMIN_URL ?>/title?btn-list" class="btn btn-default border">Danh sách</a>
        <a href="<?= $ADMIN_URL ?>/title" class="btn btn-default border">Thêm mới</a>
    </div>
</form>