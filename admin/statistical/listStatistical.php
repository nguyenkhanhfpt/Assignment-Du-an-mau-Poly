<div class="alert alert-success mt-3">
    <h4>Liệt kê loại hàng</h4>
</div>

<form action="" method="post">
    <table class="table ">
        <thead class="alert alert-success">
            <tr>
                <th scope="col">Tên loại</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá cao nhất</th>
                <th scope="col">Giá thấp nhất</th>
                <th scope="col">Giá trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <td><?= $item['ten_loai'] ?></td>
                    <td><?= $item['so_luong'] ?></td>
                    <td>$ <?= $item['MAX(h.don_gia)'] ?></td>
                    <td>$ <?= $item['MIN(h.don_gia)'] ?></td>
                    <td>$ <?= number_format($item['AVG(H.don_gia)'], 2) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7">
                    <a href="index.php?chart" class="btn btn-defaut border">Biểu đồ</a>
                </td>
            </tr>
        </tfoot>
    </table>
</form>