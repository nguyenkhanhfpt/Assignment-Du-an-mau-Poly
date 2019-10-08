<div class="alert alert-success mt-3">
  <h4>Quản lý khách hàng</h4>
</div>

<?php
if (strlen($MESSAGE)) {
  echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
}
?>

<form action="index.php" method="post" class="mt-3">
  <table class="table">
    <thead class="alert alert-success small">
      <tr>
        <th scope="col"></th>
        <th scope="col">Mã KH</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Vai trò</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody class="small">
      <?php foreach ($members as $member) : ?>
        <?php
          if ($member['vai_tro'] == 3) {
            $vai_tro = 'Quản lý';
          } else if ($member['vai_tro'] == 1) {
            $vai_tro = 'Nhân viên';
          } else {
            $vai_tro = 'Khách hàng';
          }
          ?>
        <tr>
          <th><input type="checkbox" name="ma_kh[]" value="<?= $member['ma_kh'] ?>"></th>
          <td><?= $member['ma_kh'] ?></td>
          <td><?= $member['ho_ten'] ?></td>
          <td><?= $member['email'] ?></td>
          <td><?= $member['so_dt'] ?></td>
          <td><?= $member['dia_chi'] ?></td>
          <td><?= $vai_tro ?></td>
          <td>
            <a href="index.php?btn-edit&ma_kh=<?= $member['ma_kh'] ?>" class="btn btn-default border">Sửa</a>
            <a href="index.php?btn-delete&ma_kh=<?= $member['ma_kh'] ?>" class="btn btn-default border">Xóa</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="8">
          <button id="check-all" type="button" class="btn btn-default border">Chọn tất cả</button>
          <button id="clear-all" type="button" class="btn btn-default border">Bỏ chọn tất cả</button>
          <button id="btn-delete" name="btn-delete" class="btn btn-default border">Xóa các mục chọn</button>
          <a href="index.php" class="btn btn-default border">Nhập thêm</a>
          <input type="submit" name="export" value="Xuất Excel" class="btn btn-default border">
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