<?php
    require '../../gobal.php';
    require '../../dao/database.php';
    require '../../dao/functionMember.php';

    session_start();

    extract($_REQUEST);

    if(isset($_POST['changeImg'])){
        $hinh = save_file("hinh_kh", "$IMAGE_DIR"); 
        $hinh_kh = strlen($hinh) > 0 ? $hinh : $hinh_cu;

        updateImage($_SESSION['id'], $hinh_kh);
        
        header("Location: ../index.php?manageAccount");
    }

?>