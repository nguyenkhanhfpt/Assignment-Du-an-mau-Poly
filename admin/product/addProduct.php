<div class="alert alert-success mt-3">
    <h4>Thêm sản phẩm</h4>
</div>

<?php
if (strlen($MESSAGE)) {
    echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
}
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">MÃ HÀNG HÓA</label>
            <input type="text" readonly class="form-control" value="Auto number">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">TÊN HÀNG HÓA</label>
            <input type="text" class="form-control" name="ten_hh">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">ĐƠN GIÁ</label>
            <input type="text" class="form-control" name="don_gia">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">GIẢM GIÁ</label>
            <input type="text" class="form-control" name="giam_gia">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">HÌNH ẢNH</label>
            <input type="file" class="form-control" name="hinh">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">LOẠI HÀNG HÓA</label>
            <select name="ma_loai" class="form-control">
                <?php foreach ($items as $item) : ?>
                    <option value="<?= $item['ma_loai'] ?>"><?= $item['ten_loai'] ?></option>
                <?php endforeach ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="" class="font-weight-bold small">MÔ TẢ</label>
            <textarea name="mo_ta" cols="30" rows="5" class="form-control" name="mo_ta"></textarea>
        </div>
    </div>
    <div class="form-group">
        <button name="btn-insert" class="btn btn-default border">Thêm mới</button>
        <button type="reset" class="btn btn-default border">Nhập lại</button>
        <a href="index.php?btn-list" class="btn btn-default border">Danh sách</a>
    </div>
</form>