<?php
    require '../../gobal.php';
    require '../../dao/functionProduct.php';
    require '../../dao/functionComment.php';
    require '../../dao/functionMember.php';
    require '../Classes/PHPExcel.php';
    session_start();
    checkAdmin($_SESSION['id']);

    $view_name = '';
    $MESSAGE = '';

    extract($_REQUEST);

    if(array_key_exists('detail', $_REQUEST)){
        $comments = conmentOfProduct($ma_hh);
        $view_name = 'commentOfProduct.php';
    }
    else if(array_key_exists('delete-comment', $_REQUEST)){
        deleteComment($ma_bl);
        $comments = conmentOfProduct($ma_hh);
        $view_name = 'commentOfProduct.php';
        $MESSAGE = "Xóa thành công!";
    }

    else{
        $comments = listComment();
        $view_name = 'list.php';
    }

    require "../layout.php";
