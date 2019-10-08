<?php
    require '../../gobal.php';
    require '../../dao/functionTitle.php';
    require '../../dao/functionProduct.php';
    require '../../dao/functionMember.php';
    require '../Classes/PHPExcel.php';

    session_start();
    checkAdmin($_SESSION['id']);
    
    $view_name = '';
    $MESSAGE = '';

    $items = selectTitle();
    extract($_REQUEST);

    if(array_key_exists('btn-insert', $_REQUEST)){
        $hinh = save_file("hinh", "$IMAGE_DIR");
        $ngay_nhap = date('Y-m-d');
        $so_luot_xem = '0';
        insertProduct($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $mo_ta);
        $view_name = 'addProduct.php';
        $MESSAGE = 'Thêm hàng hóa thành công';
    }
    else if(array_key_exists('btn-list', $_REQUEST)){
        $items = selectProducts();
        $view_name = 'productsList.php';
    }
    else if(array_key_exists('btn-delete', $_REQUEST)){
        deleteProducts($ma_hh);
        $items = selectProducts();
        $view_name = 'productsList.php';
        $MESSAGE = 'Xóa thành công !';
    }
    else if(array_key_exists('btn-edit', $_REQUEST)){
        $itemFetch = selectProductsId($ma_hh);
        $view_name = 'editProduct.php';
    }
    else if(array_key_exists('btn-update', $_REQUEST)){
        $up_hinh = save_file("hinh", "$IMAGE_DIR");
        $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh_cu;
        updateProduct($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $mo_ta);

        $itemFetch = selectProductsId($ma_hh);;
        
        $view_name = 'editProduct.php';
        $MESSAGE = 'Cập nhật thành công !';
    }

    else{
        $view_name = 'addProduct.php';
    }

    require "../layout.php";
