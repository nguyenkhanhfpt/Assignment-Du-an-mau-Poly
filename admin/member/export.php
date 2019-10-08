<?php
    require '../../dao/functionMember.php';
    require '../Classes/PHPExcel.php';

    if(isset($_POST['export'])){
        exportExcelMember();
    }
?>