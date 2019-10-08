<?php
  if(isset($_SESSION['name'])){
    $ma_kh = $_SESSION['id'];
    $user = selectMemberId($ma_kh);
    $vai_tro = role($ma_kh);
  }
?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a class="font-weight-bold text-decoration-none" href="index.php" style="font-size : 28px ">X shop</a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="<?=$VIEW_URL?>">Trang Chủ</a>
    <a class="p-2 text-dark" href="<?=$VIEW_URL?>/?products">Sản Phẩm</a>
    <a class="p-2 text-dark" href="<?=$VIEW_URL?>/?contact">Liên Hệ</a>
    <!-- <a class="p-2 text-dark" href="<?=$ADMIN_URL?>">Quản lý</a> -->
  </nav>
  <?php if(isset($_SESSION['name'])) : ?>
    <div class="user">
      <h3><i class="fas fa-user-edit ml-2 mr-4 text-primary" id="user"></i></h3>
      <div id="tableUser" class="border">
        <div class="d-flex flex-column">
          <img src="<?=$ROOT_URL?>/img/<?=$user['hinh_kh']?>" class="mx-auto rounded-circle mb-2" width="50px" height="50px">
          <p class="small my-2 text-center"><?=$user['ho_ten']?></p>
          <div>
            <a href="<?=$VIEW_URL?>/?manageAccount" >Quản lý tài khoản</a> <br>
            <a href="<?=$VIEW_URL?>/?changePass" >Đổi mật khẩu</a> <br>
            <?php if($vai_tro > 0): ?>
              <a href="<?=$ADMIN_URL?>">Quản lý</a> <br>
            <?php endif ?>
            <a onclick="return confirm('Bạn có muốn đăng xuất không?')" href="<?=$VIEW_URL?>/?logOut" >Đăng xuất</a>
          </div>
        </div>
      </div>
    </div>
  <?php else : ?>
    <a class="btn btn-outline-primary mx-2" href="?signUp" id="signUp">Sign up</a>
    <a class="btn btn-outline-primary mx-2" href="?logIn" id="logIn">Log in</a>
  <?php endif ?>
</div>



