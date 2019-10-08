<div class="alert alert-success mt-3">
    <h4>Cập nhật sản phẩm</h4>
</div>

<?php
    if(strlen($MESSAGE)){
        echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
    }
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">MÃ HÀNG HÓA</label>
            <input type="text" readonly class="form-control" name="ma_hh" value="<?=$itemFetch['ma_hh']?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">TÊN HÀNG HÓA</label>
            <input type="text" class="form-control" name="ten_hh" value="<?=$itemFetch['ten_hh']?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">ĐƠN GIÁ</label>
            <input type="text" class="form-control" name="don_gia" value="<?=$itemFetch['don_gia']?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">GIẢM GIÁ</label>
            <input type="text" class="form-control" name="giam_gia" value="<?=$itemFetch['giam_gia']?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">HÌNH ẢNH</label>
            <input type="file" class="form-control" name="hinh">
            <input type="hidden" value="<?=$itemFetch['hinh']?>" name="hinh_cu">
            <label for="" class="small"><?=$itemFetch['hinh']?></label>
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">LOẠI HÀNG HÓA</label>
            <select name="ma_loai" class="form-control">
                <?php foreach($items as $item) : ?>
                    <option value="<?=$item['ma_loai']?>"><?=$item['ten_loai']?></option>
                <?php endforeach ?>
                
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="" class="font-weight-bold small">MÔ TẢ</label>
            <textarea name="mo_ta"  cols="30" rows="5" class="form-control" name="mo_ta"><?=$itemFetch['mo_ta']?></textarea>
        </div>
    </div>
    <div class="form-group">
        <button name="btn-update" class="btn btn-default border">Cập nhật</button>
        <input type="reset" value="Nhập lại" class="btn btn-default border">
        <a href="<?=$ADMIN_URL?>/product?btn-list" class="btn btn-default border">Danh sách</a>
        <a href="<?=$ADMIN_URL?>/product" class="btn btn-default border">Thêm mới</a>
    </div>
</form>