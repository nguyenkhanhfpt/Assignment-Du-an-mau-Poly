<div class="alert alert-success mt-3">
    <h4>Danh sách loại hàng</h4>
</div>

<?php
if (strlen($MESSAGE)) {
    echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
}
?>
<form action="index.php" method="post">
    <table class="table ">
        <thead class="alert alert-success">
            <tr>
                <th scope="col"></th>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên loại</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <th><input type="checkbox" name="ma_loai[]" value="<?= $item['ma_loai'] ?>"></th>
                    <td><?= $item['ma_loai'] ?></td>
                    <td><?= $item['ten_loai'] ?></td>
                    <td>
                        <a href="index.php?btn-edit&ma_loai=<?= $item['ma_loai'] ?>" class="btn btn-default border">Sửa</a>
                        <a href="index.php?btn-delete&ma_loai=<?= $item['ma_loai'] ?>" class="btn btn-default border">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <button id="check-all" type="button" class="btn btn-default border">Chọn tất cả</button>
                    <button id="clear-all" type="button" class="btn btn-default border">Bỏ chọn tất cả</button>
                    <button id="btn-delete" name="btn-delete" class="btn btn-default border">Xóa các mục chọn</button>
                    <a href="index.php" class="btn btn-default border">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>
</form>

<form action="export.php" method="POST">
    <div class="form-group">
        <input type="submit" name="export" value="Xuất Excel" class="btn btn-primary border">
    </div>
</form>