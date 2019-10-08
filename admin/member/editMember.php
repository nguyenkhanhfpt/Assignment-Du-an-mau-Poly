<div class="alert alert-success mt-3">
    <h4>Cập nhật khách hàng</h4>
</div>

<?php
    if(strlen($MESSAGE)){
        echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
    }
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">MÃ KHÁCH HÀNG</label>
            <input type="text" class="form-control" readonly name="ma_kh" value="<?=$member['ma_kh']?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">HỌ TÊN</label>
            <input type="text" class="form-control" name="ho_ten" value="<?=$member['ho_ten']?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">EMAIL</label>
            <input type="text" class="form-control" name="email" value="<?=$member['email']?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">SỐ ĐIỆN THOẠI</label>
            <input type="text" class="form-control" name="so_dt" value="<?=$member['so_dt']?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">ĐỊA CHỈ</label>
            <input type="text" class="form-control" name="dia_chi" value="<?=$member['dia_chi']?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="" class="font-weight-bold small">MẬT KHẨU</label>
            <input type="password" class="form-control" readonly name="mat_khau" value="<?=$member['mat_khau']?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-4">
            <label for="" class="font-weight-bold small">XÁC NHẬN MẬT KHẨU</label>
            <input type="password" class="form-control" readonly name="mat_khau" value="<?=$member['mat_khau']?>">
        </div>
        <div class="form-group col-4">
            <label for="" class="font-weight-bold small">HÌNH ẢNH</label>
            <input type="file" class="form-control" name="hinh_kh">
            <input type="hidden" class="form-control" name="hinh_cu" value="<?=$member['hinh_kh']?>">
        </div>
        <?php if(role($_SESSION['id']) == 3): ?>
          <div class="form-group col-4">
          <label for="" class="font-weight-bold small">VAI TRÒ</label>
            <div class="form-control">
                <label ><input <?= $member['vai_tro'] == 0 ? 'checked' : '' ?> name="vai_tro" value="0" type="radio" >Khách hàng</label>
                <label ><input <?= $member['vai_tro'] == 1 ? 'checked' : '' ?>  name="vai_tro" value="1" type="radio">Nhân viên</label>
                <label ><input <?= $member['vai_tro'] == 3 ? 'checked' : '' ?>  name="vai_tro" value="3" type="radio">Quản lý</label>
            </div>
          </div>
        <?php else : ?>
            <input type="hidden" name="vai_tro_cu" value="<?=$member['vai_tro']?>" >
        <?php endif ?>
    </div>
    <div class="form-group">
        <button type="submit" name="update" class="btn btn-default border">Cập nhật</button>
        <button type="reset" class="btn btn-default border">Nhập lại</button>
        <a href="index.php?btn-list" class="btn btn-default border">Danh sách</a>
    </div>
</form>