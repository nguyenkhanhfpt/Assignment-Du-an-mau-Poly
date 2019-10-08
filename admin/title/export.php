<?php
    require '../../dao/functionTitle.php';
    require '../Classes/PHPExcel.php';

    if(isset($_POST['export'])){
        exportExcelTitle();
    }
?>