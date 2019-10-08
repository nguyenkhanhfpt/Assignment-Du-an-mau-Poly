<?php
    require '../../gobal.php';
    require '../../dao/functionMember.php';
    require '../../dao/functionProduct.php';
    require '../Classes/PHPExcel.php';
    session_start();
    checkAdmin($_SESSION['id']);

    $view_name = '';

    extract($_REQUEST);

    if(array_key_exists('chart',$_REQUEST)){
        $view_name = 'chart.php';
    }
    else{
        $view_name = 'listStatistical.php';
    }
    $items = statisticalProduct();

    require "../layout.php";
?>