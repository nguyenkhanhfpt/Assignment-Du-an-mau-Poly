<form action="index.php" method="post" class="mx-auto container">
    <h2>Đổi mật khẩu</h2>
    <?php
        if(strlen($MESSAGE)){
            echo "<h6 class='alert alert-warning'>$MESSAGE</h6>";
        }
    ?>
    <div class="form-group">
        <label for="" class="font-weight-bold">Mật khẩu cũ</label>
        <input type="password" class="form-control" placeholder="Mật khẩu cũ" id="mat_khau" name="mat_khau">
    </div>
    <div class="form-group">
        <label for="" class="font-weight-bold">Mật khẩu mới</label>
        <input type="password" class="form-control" placeholder="Mật khẩu mới" id="mat_khau_moi" name="mat_khau_moi">
    </div>
    <div class="form-group">
        <label for="" class="font-weight-bold">Xác nhận mật khẩu</label>
        <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" id="xacNhanMk">
    </div>
    <div class="checkbox">
        <input type="checkbox"> Lưu tài khoản
    </div>
    <input type="submit" value="Xác nhận" id="updatePass" name="updatePass" class="btn btn-primary btn-block mt-3">
</form>


<script>
    var but = document.getElementById('updatePass');
    var matKhau = document.getElementById('mat_khau');
    var matKhauMoi = document.getElementById('mat_khau_moi');
    var xacNhanMk = document.getElementById('xacNhanMk');

    var passNew = matKhauMoi.value;
    var confPass = xacNhanMk.value;

    but.onclick = function(){
        if(matKhau.value == '' || matKhauMoi.value == '' || xacNhanMk.value == ''){
            alert('Bạn phải nhận vào!');
            return false;
        }

        if(matKhauMoi.value != xacNhanMk.value){
            alert('Mật khẩu mới không trùng khớp!');
            return false;
        }
    }
</script>