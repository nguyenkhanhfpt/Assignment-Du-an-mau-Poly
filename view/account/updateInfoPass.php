<?php
    require '../../gobal.php';
    require '../../dao/database.php';
    require '../../dao/functionMember.php';

    session_start();

    extract($_REQUEST);

    if(isset($_POST['changePass'])){
        updateInfoPass($_SESSION['id'], $mat_khau);
        header("Location: ../index.php?manageAccount");
    }

?>