<?php
    require '../../gobal.php';
    require '../../dao/functionTitle.php';
    require '../../dao/functionMember.php';
    require '../Classes/PHPExcel.php';
    session_start();
    checkAdmin($_SESSION['id']);

    $view_name = '';
    $MESSAGE = '';

    extract($_REQUEST);

    if(isset($_POST['submitTitle'])){
        addTitle($ten_loai);
        $view_name = 'addTitle.php';
        
        $MESSAGE = 'Thêm vào thành công';
    }

    else if(array_key_exists('btn-list', $_REQUEST)){
        $items = selectTitle();
        $view_name = 'listTitle.php';
    }

    else if(array_key_exists('btn-edit', $_REQUEST)){
        $items = selectTitleId($ma_loai);
        $view_name = 'editTitle.php';
    }

    else if(array_key_exists('updateTitle', $_REQUEST)){
        updateTitle($ma_loai, $ten_loai);

        $items = selectTitleId($ma_loai);
        $view_name = 'editTitle.php';
        $MESSAGE = 'Cập nhật thành công';
    }

    else if(array_key_exists('btn-delete', $_REQUEST)){
        deleteTitleId($ma_loai);
        $items = selectTitle();
        $view_name = 'listTitle.php';
        $MESSAGE = 'Xóa thành công';
    }

    else{
        $view_name = 'addTitle.php';
    }

    require "../layout.php";
