
<form action="index.php" method="post" name="form" onsubmit="return checkLogIn()" class="mx-auto  w-50">
    <h2>Đăng nhập</h2>
    <?php
        if(strlen($MESSAGE)){
            echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
        }
    ?>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="ma_kh" required >
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Mật khẩu" name="mat_khau" required>
    </div>
    <div class="checkbox">
        <input type="checkbox"> Lưu tài khoản
    </div>
    <input type="submit" value="Đăng nhập" name="btn-login" class="btn btn-primary btn-block mt-3">
    <a href="?btn-pass" class="btn btn-primary btn-block" >Quên mật khẩu</a>
</form>

<script>
    function checkLogIn(){
        var ma_kh = document.forms["form"]["ma_kh"].value;
        var mat_khau = document.forms["form"]["mat_khau"].value;

        if(ma_kh == ''){
            alert('Tên đăng nhập không được để trống!');
            return false;
        }
        
        if(mat_khau == ''){
            alert('Mật khẩu không được để trống!');
            return false;
        }
    }
</script>