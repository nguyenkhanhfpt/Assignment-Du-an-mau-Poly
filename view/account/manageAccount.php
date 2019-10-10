
    <style>
        .fa-shopping-cart {
            color: #f25f05;
            position: unset;
            font-size: 25px;
        }

        .nameUser {
            margin-right: 5px;
            color: red;
            font-family: arial;
        }

        .iconUser {
            margin: 0;

        }

        .iconUser i {
            color: black;
            position: unset;
            font-size: 25px;
        }

        .cart {
            position: relative;
        }

        .countCart {
            position: absolute;
            top: -10px;
            right: -18px;
            border: 1px solid black;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .countCart span {
            font-size: 15px;
            color: #f25f05;
        }

        article {
            display: flex;
            width: 85%;
            margin: 0 auto;
            flex-wrap: wrap;
            font-family: 'Roboto', sans-serif;
        }

        .product {
            margin: 20px 10px;
            width: 280px;
            background-color: white;
            padding: 10px;
        }

        .changeAvata {
            display: none;
            z-index: 200;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0000001f;
        }

        .changeAvata form {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #8888887d;
            width: 50%;
            padding: 20px;
            position: relative;
        }

        .changeAvata form label {
            font-size: 20px;
        }

        .changeAvata form span {
            position: absolute;
            top: -2px;
            right: 12px;
            font-size: 36px;
        }

        .changeAvata form span:hover {
            color: orangered;
        }
    </style>
</head>

<body>
    <div class="noidung container-fluid">
    <div class="row">
        <section class="col-md-5 text-center">
            <div class="avatar mt-5 mb-1">
                <a href="<?=$IMG_URL?>/<?=$user['hinh_kh']?>" target="_bank"><img src="<?=$IMG_URL?>/<?=$user['hinh_kh']?>" height="200px" width="200px" class="p-1 border rounded-circle"></a>
            </div>

            <a id="changeImg" class="text-primary">Thay đổi ảnh đại diện</a>
            <h4 class="font-weight-bold mt-2">Xin chào <span><?php echo $_SESSION['name'] ?></span> !</h4>

            <div class='changeAvata text-left' id="formChangeImg">
                <form action="account/changeImage.php" method="POST" enctype="multipart/form-data">
                    <span onclick="document.getElementById('formChangeImg').style.display='none'">&times;</span>
                    <label for="">Chọn ảnh</label>
                    <br>
                    <br>
                    <input type="hidden" name="hinh_cu" value="<?=$user['hinh_kh']?>">
                    <input type="file" name="hinh_kh" id="img">
                    <br>
                    <input type="submit" name="changeImg" value="Thay đổi ảnh" class="btn btn-primary mt-3">
                </form>
            </div>
        </section>

        

        <aside class="col-md-7 border shadow rounded p-4 my-3">
            <div class="profile">
                <h3>CẬP NHẬT THÔNG TIN</h3>
                <form action="account/updateInfoMember.php" method="POST">
                    <div class="form-group">
                        <label for="">Tên</label>
                        <input type="text" value="<?=$user['ho_ten']?>" name="ho_ten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="mail" value="<?=$user['email']?>" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="tel" value="<?=$user['so_dt']?>" name="so_dt" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" value="<?=$user['dia_chi']?>" name="dia_chi" class="form-control">
                    </div>
                    <input type="submit" name="updateInfo" value="Cập nhật" class="btn btn-primary mb-4">
                </form>
            </div>
            <div class="profile">
                <h3>THAY ĐỔI MẬT KHẨU</h3>
                <form action="account/updateInfoPass.php" method="POST">
                    <div class="form-group">
                        <label for="">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="pass" name="mat_khau">
                        <label for="">
                            <input type="checkbox" name="blockPass" id="blockPass"> Hiển trị mật khẩu
                        </label>

                    </div>
                    <input type="submit" name="changePass" value="Cập nhật" class="btn btn-primary">
                </form>
            </div>
        </aside>
    </div>
    </div>


    <script>
        var img = document.getElementById('changeImg');
        var formChange = document.getElementById('formChangeImg');

        img.onclick = function () {
            formChange.style.display = 'block';
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == formChange) {
                formChange.style.display = "none";
            }
        }

    </script>



    <script>
        var pass = document.getElementById('pass');
        var check = document.getElementById('blockPass');
        check.onclick = function () {
            if (pass.type == 'password') {
                pass.type = 'text';
            }
            else {
                pass.type = 'password';
            }
        };
    </script>

</body>

</html> 