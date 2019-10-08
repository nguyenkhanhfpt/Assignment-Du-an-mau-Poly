<?php
    require '../../dao/functionComment.php';
    require '../Classes/PHPExcel.php';

    if(isset($_POST['export'])){
        exportExcelComment();
    }
?>