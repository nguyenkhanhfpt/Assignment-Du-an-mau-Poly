<?php
$product = selectProductsId($ma_hh);
?>
<div class="alert alert-success mt-3">
  <h4>Quản lý bình luận</h4>
</div>

<h3>Hàng hóa <?= $product['ten_hh'] ?></h3>

<?php
if (strlen($MESSAGE)) {
  echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
}
?>

<form action="" class="mt-3">
  <table class="table ">
    <thead class="alert alert-success">
      <tr>
        <th scope="col"></th>
        <th scope="col">Nội dung</th>
        <th scope="col">Ngày bình luận</th>
        <th scope="col">Người bình luận</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($comments as $comment) : ?>
        <tr>
          <td><input type="checkbox" name="ma_bl[]" value="<?= $comment['ma_bl'] ?>"></td>
          <td><?= $comment['noi_dung'] ?></td>
          <td><?= $comment['ngay_bl'] ?></td>
          <td><?= $comment['ma_kh'] ?></td>
          <td><a href="index.php?delete-comment&ma_bl=<?= $comment['ma_bl'] ?>&ma_hh=<?= $product['ma_hh'] ?>" class="btn btn-defaut border">Xóa</a></td>
        </tr>
      <?php endforeach ?>
      <input type="hidden" name="ma_hh" value="<?= $product['ma_hh'] ?>">
    </tbody>
    <tfoot>
      <tr>
        <td colspan="8">
          <button id="check-all" type="button" class="btn btn-default border">Chọn tất cả</button>
          <button id="clear-all" type="button" class="btn btn-default border">Bỏ chọn tất cả</button>
          <button id="btn-delete" name="delete-comment" class="btn btn-default border">Xóa các mục chọn</button>
          <button class="btn btn-default border">Quản lý bình luận</button>
        </td>
      </tr>
    </tfoot>
  </table>
</form>