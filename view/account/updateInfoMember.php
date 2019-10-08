<?php
    require '../../gobal.php';
    require '../../dao/database.php';
    require '../../dao/functionMember.php';

    session_start();

    extract($_REQUEST);

    if(isset($_POST['updateInfo'])){
        updateInfoMember($_SESSION['id'], $ho_ten, $email, $so_dt, $dia_chi);
        header("Location: ../index.php?manageAccount");
    }

?>