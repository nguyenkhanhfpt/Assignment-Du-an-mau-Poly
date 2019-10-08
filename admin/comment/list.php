<div class="alert alert-success mt-3">
  <h4>Quản lý bình luận</h4>
</div>

<form action="index.php" method="post" class="mt-3">
  <table class="table ">
    <thead class="alert alert-success">
      <tr>
        <th scope="col">Hàng hóa</th>
        <th scope="col">Số bình luận</th>
        <th scope="col">Mới nhất</th>
        <th scope="col">Cũ nhất</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($comments as $comment) : ?>
        <tr>
          <td><?= $comment['ten_hh'] ?></td>
          <td><?= $comment['COUNT(B.ma_hh)'] ?></td>
          <td><?= $comment['MAX(B.ngay_bl)'] ?></td>
          <td><?= $comment['MIN(B.ngay_bl)'] ?></td>
          <td>
            <a href="<?= $ADMIN_URL ?>/comment?detail&ma_hh=<?= $comment['ma_hh'] ?>" class="btn btn-default border">Chi tiết</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</form>

<form action="export.php" method="POST">
    <div class="form-group">
        <input type="submit" name="export" value="Xuất Excel" class="btn btn-primary border">
    </div>
</form>