<?php
    require '../../dao/functionTitle.php';
    require '../../dao/functionProduct.php';
    require '../../dao/functionMember.php';
    require '../Classes/PHPExcel.php';

    if(isset($_POST['export'])){
        exportExcelProduct();
    }
?>