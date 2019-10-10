<form action="index.php" method="post" class="mx-auto  w-50">
    <h2>Quên mật khẩu</h2>
    <?php
        if(strlen($MESSAGE)){
            echo "<h6 class='alert alert-warning my-3'>$MESSAGE</h6>";
        }
    ?>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="ma_kh">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="checkbox">
        <input type="checkbox"> Lưu tài khoản
    </div>
    <input type="submit" value="Xác nhận" name="btn-forgetPass" class="btn btn-primary btn-block mt-3">
</form>