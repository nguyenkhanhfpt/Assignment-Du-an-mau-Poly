<div class="alert alert-success mt-3">
    <h4>Thêm khách hàng</h4>
</div>

<?php
if (strlen($MESSAGE)) {
    echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
}
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">MÃ KHÁCH HÀNG</label>
            <input type="text" class="form-control" name="ma_kh">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">HỌ TÊN</label>
            <input type="text" class="form-control" name="ho_ten">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">EMAIL</label>
            <input type="text" class="form-control" name="email">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">SỐ ĐIỆN THOẠI</label>
            <input type="text" class="form-control" name="so_dt">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">ĐỊA CHỈ</label>
            <input type="text" class="form-control" name="dia_chi">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">MẬT KHẨU</label>
            <input type="text" class="form-control" name="mat_khau">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-4">
            <label for="" class="font-weight-bold small">XÁC NHẬN MẬT KHẨU</label>
            <input type="text" class="form-control" name="mat_khau">
        </div>
        <div class="form-group col-4">
            <label for="" class="font-weight-bold small">HÌNH ẢNH</label>
            <input type="file" class="form-control" name="hinh">
        </div>
        <?php if (role($_SESSION['id']) == 3) : ?>
            <div class="form-group col-4">
                <label for="" class="font-weight-bold small">VAI TRÒ</label>
                <div class="form-control">
                    <label><input checked name="vai_tro" value="0" type="radio">Khách hàng</label>
                    <label><input name="vai_tro" value="1" type="radio">Nhân viên</label>
                    <label><input name="vai_tro" value="3" type="radio">Quản lý</label>
                </div>
            </div>
        <?php endif ?>
    </div>
    <div class="form-group">
        <button type="submit" name="btn-insert" class="btn btn-default border">Thêm mới</button>
        <button type="reset" class="btn btn-default border">Nhập lại</button>
        <a href="index.php?btn-list" class="btn btn-default border">Danh sách</a>
    </div>
</form>