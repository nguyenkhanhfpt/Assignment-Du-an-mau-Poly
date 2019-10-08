
<form action="index.php" method="post" class="mx-auto container">
    <h2>Đăng nhập</h2>
    <?php
        if(strlen($MESSAGE)){
            echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
        }
    ?>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="ma_kh">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Mật khẩu" name="mat_khau">
    </div>
    <div class="checkbox">
        <input type="checkbox"> Lưu tài khoản
    </div>
    <input type="submit" value="Đăng nhập" name="btn-login" class="btn btn-primary btn-block mt-3">
</form>