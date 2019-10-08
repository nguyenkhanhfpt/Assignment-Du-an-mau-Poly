<form action="index.php" method="POST" class="mx-auto container">
        <h2>Đăng ký</h2>
        <?php if($MESSAGE) : ?>
            <div class="alert alert-success">
                <?= $MESSAGE ?>
            </div>
        <?php endif ?>

        <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" class="form-control" placeholder="User name" name="ma_kh">
        </div>
        <div class="form-group">
            <label for="">Họ và tên</label>
            <input type="text" class="form-control" placeholder="Full name" name="ho_ten">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="tel" class="form-control" placeholder="Phone number" name="so_dt">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" placeholder="Address" name="dia_chi">
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" placeholder="Password" name="mat_khau">
        </div>
        <div class="checkbox">
            <label for="">
                <input type="checkbox" name="" id=""> Lưu tài khoản
            </label>
        </div>
        <input type="submit" name="btn-signup" class="btn btn-primary btn-block" value="Đăng ký">
         
    </form>