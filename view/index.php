<?php
    require '../gobal.php';
    require '../dao/functionTitle.php';
    require '../dao/functionProduct.php';
    require '../dao/functionMember.php';
    require '../dao/functionComment.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    session_start();

    $view_name = '';
    $MESSAGE = '';
    
    extract($_REQUEST);

    if(array_key_exists('products', $_REQUEST)){
        $products = selectProducts();
        $view_name = 'products.php';
    }

    else if(array_key_exists('logIn', $_REQUEST)){
        $view_name = 'logIn.php';
    }

    else if(array_key_exists('contact', $_REQUEST)){
        $view_name = 'contact.php';
    }

    else if(array_key_exists('signUp', $_REQUEST)){
        $view_name = 'signUp.php';
    }

    else if(array_key_exists('manageAccount', $_REQUEST)){
        $user = selectMemberId($_SESSION['id']);
        $view_name = 'account/manageAccount.php';
    }

    else if(array_key_exists('changePass', $_REQUEST)){
        $view_name = 'account/changePass.php';
    }

    else if(array_key_exists('updatePass', $_REQUEST)){
        $MESSAGE = updatePass($_SESSION['id'], $mat_khau, $mat_khau_moi);
        $view_name = 'account/changePass.php';
    }

    else if(array_key_exists('binh-luan', $_REQUEST)){
        if(isset($_SESSION['id'])){
            $ma_kh = $_SESSION['id'];
            $ngay_bl = date("Y-m-d H:i:s");
            addComent($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
        }
        else{
            echo "<script>alert('Đăng nhập để bình luận!')</script>";
        }
        $view_name = 'viewProduct.php';
    }

    else if(array_key_exists('titleProduct', $_REQUEST)){
        $products = selectTitleProducts($titleProduct);
        $view_name = 'products.php';
    }

    else if(isset($_POST['btn-signup'])){
        $hinh_kh = 'user.png';
        $vai_tro = 0;
        addNewMember($ma_kh, $mat_khau , $ho_ten, $email, $hinh_kh, $so_dt, $dia_chi, $vai_tro);

        $_SESSION['name'] = $ho_ten;
        $_SESSION['id'] = $ma_kh;

        $view_name = 'signUp.php';
        $MESSAGE = "Đăng ký thành công !";
    }

    else if(isset($_POST['btn-login'])){
        $MESSAGE = checkLogin($ma_kh, $mat_khau);
        $view_name = 'logIn.php';
    }

    else if(array_key_exists('logOut', $_REQUEST)){
        logOut();
        header("Location: $VIEW_URL");
    }

    else if(array_key_exists('view-product', $_REQUEST)){
        updateCountView($ma_hh);
        $view_name = 'viewProduct.php';
    }

    else{
        $view_name = 'home.php';
    }

    include "layout.php";
?>